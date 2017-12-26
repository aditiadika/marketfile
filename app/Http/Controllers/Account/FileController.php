<?php

namespace App\Http\Controllers\Account;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function index()
    {
        $files = auth()->user()->files()->latest()->finished()->get();

        return view('account.files.index', compact('files'));
    }

    public function create(File $file)
    {
        if (!$file->exists){
            $file = $this->createAndReturnSekeletonFile();

            return redirect()->route('account.files.create', $file);
        }

        $this->authorize('create', $file);

        return view('account.files.create', compact('file'));
    }

    public function store(File $file, Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'overview' => 'required|max:300',
            'overview_short' => 'required|max:5000',
            'price' => 'required|numeric',
        ]);

        $this->authorize('create', $file);

        $file->fill($request->only(['title', 'overview', 'overview_short', 'price']));
        $file->finished = true;
        $file->save();

        return redirect()->route('account');
    }

    public function createAndReturnSekeletonFile()
    {
        return auth()->user()->files()->create([
            'title' => 'Untitled',
            'overview' => 'None',
            'overview_short' => 'None',
            'price' => 0,
            'finished' => false,
        ]);
    }
}

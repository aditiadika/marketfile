@extends('account.layouts.default')

@section('account.content')
 <h1 class="title">Your Files</h1>

 @if($files->count())
    @each('account.partials._file', $files, 'file')
 @else
    <p>You no have files</p>
 @endif
@stop
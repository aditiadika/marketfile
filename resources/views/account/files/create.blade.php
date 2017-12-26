@extends('account.layouts.default')

@section('account.content')
    <h2 class="title">Sell a Files</h2>
   <form action="{{ route('account.files.store', $file) }}" method="POST">
   {{ csrf_field() }}
            <div class="field">
                <label for="title" class="label">Title</label>
                <p class="control">
                    <input type="text" name="title" id="titile" class="input{{ $errors->has('title') ? 'is-danger' : '' }}">
                </p>
                @if($errors->has('title'))
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                @endif
            </div>
           <div class="field">
               <label for="overview_short" class="label">Short Overview</label>
               <p class="control">
                   <input type="text" name="overview_short" id="overview_short" class="input{{ $errors->has('overview_short') ? 'is-danger' : '' }}">
               </p>
               @if($errors->has('overview_short'))
                   <p class="help is-danger">{{ $errors->first('title') }}</p>
               @endif
           </div>
           <div class="field">
               <label for="overview" class="label">Overview</label>
               <p class="control">
                   <textarea name="overview" id="overview" class="textarea{{ $errors->has('overview') ? 'is-danger' : '' }}"></textarea>
               </p>
               @if($errors->has('overview'))
                   <p class="help is-danger">{{ $errors->first('title') }}</p>
               @endif
           </div>
           <div class="field">
               <label for="price" class="label">Price (Rp)</label>
               <p class="control">
                   <input type="text" name="price" id="price" class="input{{ $errors->has('price') ? 'is-danger' : '' }}">
               </p>
               @if($errors->has('price'))
                   <p class="help is-danger">{{ $errors->first('title') }}</p>
               @endif
           </div>
            <div class="field is-grouped">
                <p class="control">
                    <button class="button is-primary">Submit</button>
                </p>
                <p>We'll review your file before it goes live</p>
            </div>
   </form>
@stop
@extends('layouts.app')

@section('content')
    @include('account.layouts.partials._stats')

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-one-quarter">
                    @include('account.layouts.partials._nav')
                </div>
                <div class="column">
                    @yield('account.content')
                </div>
            </div>
        </div>
    </section>

@stop
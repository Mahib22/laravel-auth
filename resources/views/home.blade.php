@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4>Hi, {{ Auth::user()->username }}</h4>
                        {{ __('You are logged in!') }}

                        @if (Auth::user()->is_admin)
                            <p>Tulisan ini hanya bisa dilihat oleh admin</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

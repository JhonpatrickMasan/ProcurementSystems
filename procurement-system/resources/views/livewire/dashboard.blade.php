<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @auth
                            Welcome to the dashboard, {{ auth()->user()->name }}!
                        @else
                            You are not authenticated.
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

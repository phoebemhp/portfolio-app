@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div> -->
                
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
            <!-- </div> -->
            <div class="row d-flex align-items-center">
                <div class="col-7">
                    <span class="display-4">{{ Auth::user()->name }}</span>
                </div>
                <div class="col-1">
                    <i class="fa fa-circle fa-lg" aria-hidden="true"></i>
                </div>
                <div class="col-3">
                    <span class="display-4">UI/UX</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

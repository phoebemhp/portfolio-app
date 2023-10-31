@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
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
            <div class="row home-title">
                <div class="col d-flex align-items-center">
                    <span class="display-4 me-3">{{ Auth::user()->name }}</span>
                    <i class="fa fa-circle fa-lg me-3" aria-hidden="true"></i>
                    <span class="display-4">UI/UX</span>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <div>sections</div>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

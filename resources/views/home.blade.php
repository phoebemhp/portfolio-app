@extends('layouts.app')

@section('content')
<div class="container font-poppins">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row home-title font-faustina">
                <div class="col d-flex align-items-center">
                    <span class="display-4 me-3">{{ Auth::user()->name }}</span>
                    <i class="fa fa-circle fa-lg me-3 text-dark-green" aria-hidden="true"></i>
                    <span class="display-4 text-dark-green">UI/UX</span>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <span class="font-faustina text-light-green">sections</span>
                </div>
                <div class="col-4">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <div class="row justify-content-center d-grid gap-3 d-md-flex ms-1 me-1">
                        <button class="btn col bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">ui/ux showcase</button>
                        <button class="btn col bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">design process</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col">
            <h1 class="display-5">Warehouse Management System</h1>
        </div>
    </div>
</div>
@endsection

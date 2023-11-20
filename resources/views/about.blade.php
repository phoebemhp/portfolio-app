@extends('layouts.app')

@section('content')
<div class="container font-poppins">
    <div class="row justify-content-center about-margin">
        <div class="col text-end">
            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-50 h-100">
        </div>
        <div class="col ms-5 text-dark-green">
            <div class="row mb-5">
                <div class="col-6">
                    <div class="row">
                        <h2 class="font-faustina fw-bold">hello!</h2>
                    </div>
                    <div class="row">
                        <span class="mb-2">My name is Pun Le Jon, but you can call me Jon! I love to make things that are easy to use and beautiful to look at.</span>
                        <span>Design is my first passion, from digital graphic design to physical crafts and interior design. Otherwise, you can find me tending to my garden and 3 cats.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row">
                    <h2 class="font-faustina fw-bold">contacts.</h2>
                </div>
                <div class="row mb-1">
                    <span><i class="fa fa-phone me-2" aria-hidden="true"></i> +60168575922</span>
                </div>
                <div class="row">
                    <span><i class="fa fa-envelope-o me-2" aria-hidden="true"></i> lejonpun@gmail.com</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col ms-auto">
                    <span class="btn btn-sm rounded-5 bg-linkedin-button text-white"><i class="fa fa-linkedin me-1" aria-hidden="true"></i>LinkedIn</span>
                    <span class="btn btn-sm rounded-5 bg-dribble-button text-white"><i class="fa fa-dribbble me-1" aria-hidden="true"></i>Dribble</span>
                    <span class="btn btn-sm rounded-5 bg-primary text-white"><i class="fa fa-behance me-1" aria-hidden="true"></i>Behance</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
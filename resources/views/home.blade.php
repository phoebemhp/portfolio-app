@extends('layouts.app')

@section('content')
<div class="container font-poppins">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row home-title font-faustina">
                <div class="col d-flex align-items-center p-0">
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
    <div class="row d-flex justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Warehouse Management System</h1>
                    <p class="fs-5 fw-light">This system has a mobile app for operators to handle warehousing processes and a desktop website for admins to customize the processes.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Daily UI Challenge</h1>
                    <p class="fs-5 fw-light">Everyday I design a different UI component/screen. <br> Through this challenge I experiment with different styles.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Corporate Informational Site + Questionnaire</h1>
                    <p class="fs-5 fw-light">A website for Singaporean companies to identify their strengths and provide relevant information in their respective industries.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Employee Management</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Company Website & Client System</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Company Website & Client System</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-3">
                    <span class="fs-3 font-faustina text-dark-green fw-medium">my design process</span>
                </div>
                <div class="col-8">
                    <hr>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h5 class="fs-3 font-faustina fw-medium">Gathering requirements</h5>
                    <span>Every project has a unique goal to achieve. Understanding the needs of the project gives me the direction for a satisfying design.</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

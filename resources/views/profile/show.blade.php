@extends('layouts.app')

@section('content')
<div class="container font-poppins">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (isset($error))
        <div class="col-sm-12">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            $error
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    @endif
    <div class="row mb-4">
        <div class="col text-end">
            <a type="button" class="btn btn-success" href="{{ route('profile.edit', $user) }}"><i class="fa fa-edit me-2"></i>Edit Profile</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="row mb-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar" class="circle-profile-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Website URL</h5>
                            <div class="row mb-1">
                                <div class="col">
                                    <span class="fw-bold">LinkedIn URL</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->linkedin_url ? $user->profile->linkedin_url : "N/A" }}</span>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">
                                    <span class="fw-bold">Dribble URL</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->dribble_url ? $user->profile->dribble_url : "N/A" }}</span>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col">
                                    <span class="fw-bold">Behance URL</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->behance_url ? $user->profile->behance_url : "N/A" }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row mb-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bold">Name</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->name }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bold">Email</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->email }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bold">Birthday</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->dob ? $user->profile->dob : "N/A" }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bold">Contact Number</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->contact_no ? $user->profile->contact_no : "N/A" }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bold">Address</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->address ? $user->profile->address : "N/A" }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <span class="fw-bold">Occupation</span>
                                </div>
                                <div class="col">
                                    <span>{{ $user->profile && $user->profile->occupation ? $user->profile->occupation : "N/A" }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">About</h5>
                            <span>{{ $user->profile && $user->profile->autobiography ? $user->profile->autobiography : "N/A" }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
</script>
@endsection
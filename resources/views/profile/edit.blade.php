@extends('layouts.app')

@section('content')
<div class="container font-poppins">
    <form action="{{ route('profile.update', ['user' => $user]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-4">
                <div class="row mb-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                                <img :src="displayedImage" alt="Uploaded Image" class="circle-profile-image">
                                <div class="row mt-3">
                                    <div class="col d-flex justify-content-center align-items-center">
                                        <input type="file" class="form-control" name="image" @change="handleImageUpload" ref="fileInput">
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
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="linkedInUrl" v-model="linkedInCheckbox">
                                            <label class="form-check-label fw-bold" for="linkedInUrl">
                                                LinkedIn URL
                                            </label>
                                        </div>
                                        <input type="url" name="linkedin_url" class="form-control" placeholder="Insert here!" v-show="linkedInCheckbox"  value="{{ $user->profile && $user->profile->linkedin_url ? $user->profile->linkedin_url : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="dribbleUrl" v-model="dribbleCheckbox">
                                            <label class="form-check-label fw-bold" for="dribbleUrl">
                                                Dribble URL
                                            </label>
                                        </div>
                                        <input type="url" name="dribble_url" class="form-control" placeholder="Insert here!" v-show="dribbleCheckbox" value="{{ $user->profile && $user->profile->dribble_url ? $user->profile->dribble_url : '' }}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="behanceUrl" v-model="behanceCheckbox">
                                            <label class="form-check-label fw-bold" for="behanceUrl">
                                                Behance URL
                                            </label>
                                        </div>
                                        <input type="url" name="behance_url" class="form-control" placeholder="Insert here!" v-show="behanceCheckbox" value="{{ $user->profile && $user->profile->behance_url ? $user->profile->behance_url : '' }}">
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
                                        <label class="fw-bold">Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" value="{{ $user->name ? $user->name : '' }}" placeholder="Enter name here">
                                    </div>
                                    <div class="col">
                                        <label class="fw-bold">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" value="{{ $user->email ? $user->email : '' }}" placeholder="Enter email here">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <label class="fw-bold">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" id="dob" value="{{ $user->profile && $user->profile->dob ? $user->profile->dob : '' }}">
                                    </div>
                                    <div class="col">
                                        <label class="fw-bold">Contact Number</label>
                                        <input type="tel" name="contact_no" class="form-control" pattern="[0-9]{3}-[0-9]{7}" placeholder="Enter contact number here" value="{{ $user->profile && $user->profile->contact_no ? $user->profile->contact_no : '' }}">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <label class="fw-bold">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Enter address here" value="{{ $user->profile && $user->profile->address ? $user->profile->address : '' }}">
                                    </div>
                                    <div class="col">
                                        <label class="fw-bold">Occupation</label>
                                        <input type="text" name="occupation" class="form-control" placeholder="Enter occupation here" value="{{ $user->profile && $user->profile->occupation ? $user->profile->occupation : '' }}">
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
                                <textarea name="autobiography" id="autobiography" class="form-control" placeholder="Tell them about yourself!">{{ $user->profile && $user->profile->autobiography ? $user->profile->autobiography : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-end">
                <a href="{{ route('profile.show', ['user' => $user]) }}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </div>
    </form>
    
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            linkedInCheckbox: false,
            dribbleCheckbox: false,
            behanceCheckbox: false,
            selectedDate: null,
            imagePreview: '',
            defaultImage: 'https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Account-512.png'
        },
        computed: {
    displayedImage() {
        // Check if user profile image is empty
        return this.imagePreview ? this.imagePreview : this.defaultImage;
        }
    },
    methods: {
        handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
            this.imagePreview = e.target.result;
            };
            reader.readAsDataURL(file);
        }
        },
        openFileInput() {
        this.$refs.fileInput.click();
        }
    },
    mounted() {
        // Check if $user->profile->image is empty here and set this.imagePreview accordingly
        if (!this.$store.state.user.profile.image) {
        this.imagePreview = this.defaultImage;
        } else {
        // Set this.imagePreview to the URL of the user's profile image
        this.imagePreview = this.$store.state.user.profile.image;
        }

        // Call openFileInput when the component is mounted
        this.openFileInput();
    }
    });
</script>
<script type="text/javascript">
    $(function() {  
        $('#dobDatePicker').datetimepicker();
    });
</script>
@endsection
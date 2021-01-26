@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="/profile/show/{{ $user->id }}" class="btn-link">
                                <i class="fas fa-angle-double-left"></i> Back
                            </a>
                            <h6>Update Profile | {{ $user->name }}</h6>
                        </div>
                    </div>
                    <div class="card-body">     
                        <form action="/profile/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $user->name }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                @if ($user->picture)
                                    <img class="rounded-circle" width="150px" alt="Image placeholder" src="{{ asset($user->takePicture) }}">
                                @else
                                    <img class="rounded-circle" width="150px" alt="Image placeholder" src="{{ asset('volt/assets/img/team/profile.png') }}">
                                @endif
                                {{-- <img src="{{ asset($user->takePicture) ?? asset('volt/assets/img/team/profile-picture-3.jpg') }}" alt="" class="rounded-circle" width="150px"> --}}
                            </div>
                            <div class="form-file mb-3">
                                {{-- <input type="file" class="form-file-input" name="picture" id="customFile">
                                <label class="form-file-label" for="customFile">
                                    <span class="form-file-text">Choose file...</span>
                                    <span class="form-file-button">Browse</span>
                                </label> --}}
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Picture</label>
                                    <input class="form-control @error('picture') is-invalid @enderror" type="file" id="formFile" name="picture">

                                    <small class="text-danger">Jika ingin mengubah foto profile, harap masukkan dimensi 1x1 atau foto berbentuk persegi agar foto tidak menjadi lonjong ^_^</small>
                                    @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-secondary float-right">
                                    <i class="fab fa-telegram-plane"></i> Update
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
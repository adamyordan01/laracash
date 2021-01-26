@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="/me" class="btn-link">
                                <i class="fas fa-angle-double-left"></i> Back
                            </a>
                            <h6>Detail User | {{ $user->name }}</h6>
                            <a href="/profile/edit/{{ $user->id }}" class="btn btn-secondary btn-sm">Edit</a>
                        </div>
                    </div>
                    <div class="card-body">     
                        <div class="mb-4">
                            {{-- <img src="{{ asset($user->takePicture) ?? asset('volt/assets/img/team/profile-picture-3.jpg') }}" alt="" class="rounded-circle" width="150px"> --}}
                            @if ($user->picture)
                                <img class="rounded-circle" width="150px" alt="Image placeholder" src="{{ asset($user->takePicture) }}">
                            @else
                                <img class="rounded-circle" width="150px" alt="Image placeholder" src="{{ asset('volt/assets/img/team/profile.png') }}">
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="">Name</label>
                            <div class="">
                                <p style="font-size: 20px; font-weight: bold;">{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="">E-mail</label>
                            <div class="">
                                <p style="font-size: 20px; font-weight: bold;">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="">Member Since</label>
                            <div class="">
                                <p style="font-size: 20px; font-weight: bold;">{{ $user->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-body">     
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card text-white bg-primary mb-3">
                                    {{-- <div class="card-header">Header</div> --}}
                                    <div class="card-body">
                                      <h5 class="card-title">Balance</h5>
                                      <p class="card-text">Rp. 4.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-white bg-success mb-3">
                                    {{-- <div class="card-header">Header</div> --}}
                                    <div class="card-body">
                                      <h5 class="card-title">Debit</h5>
                                      <p class="card-text">Rp. 8.000.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-white bg-danger mb-3">
                                    {{-- <div class="card-header">Header</div> --}}
                                    <div class="card-body">
                                      <h5 class="card-title">Credit</h5>
                                      <p class="card-text">Rp. 4.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
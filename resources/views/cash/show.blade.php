@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="/me" class="btn-link">
                                <i class="fas fa-angle-double-left"></i> Back
                            </a>
                            <h6>Detail Transaction | {{ $cash->name }}</h6>
                        </div>
                    </div>
                    <div class="card-body">     
                        <div class="mb-4">
                            <label for="">Amount</label>
                            <div class="{{ $cash->amount < 0 ? 'text-danger' : 'text-success' }}">
                                {{ "Rp " . number_format($cash->amount, 0, ",", ".") }}
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="">Stored</label>
                            <div class="text-primary">
                                {{ $cash->when->format("d F Y - H:i") }}
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="">Description</label>
                            <div class="text-primary">
                                {{ $cash->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
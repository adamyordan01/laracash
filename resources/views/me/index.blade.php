@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            @if (session('status'))
            <div class="toast fade show float-right ml-auto" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="100" data-bs-autohide="false">
                <div class="toast-header text-primary">
                    <span class="fab fa-bootstrap"></span>
                    <strong class="mr-auto ml-2">Laracash</strong>
                    <small class="text-muted">11 mins ago</small>
                    {{-- <button type="button" class="btn-close ml-2 close" data-dismiss="toast" aria-label="Close"></button> --}}
                    {{-- <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button> --}}
                </div>
                <div class="toast-body">
                    {{ session('status') }}
                </div>
            </div>
                {{-- <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div> --}}
            @endif
            
            <div class="col-md-10 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-body">     
                        <div class="row">
                            <div class="col-md-4 d-md-none d-xs-block mb-3">
                                <a href="/cash/create" class="btn btn-secondary float-right">Add New Transaction</a>
                            </div>
                            <div class="col-md-8">
                                <div class="card text-white bg-primary col-xs mb-3">
                                    {{-- <div class="card-header">Header</div> --}}
                                    <div class="card-body">
                                      <h5 class="card-title">Balance</h5>
                                      <h3 class="card-text">
                                          <b>{{ "Rp " . number_format($balances, 0, ",", ".") }}</b>
                                      </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-none d-md-block">
                                <a href="/cash/create" class="btn btn-secondary float-right mt-0">Add New Transaction</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-white bg-success mb-3">
                                    {{-- <div class="card-header">Header</div> --}}
                                    <div class="card-body">
                                        <h5 class="card-title">Debit</h5>
                                        <h5 class="card-text">
                                            {{ "Rp " . number_format($debit, 0, ",", ".") }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-white bg-danger mb-3">
                                    {{-- <div class="card-header">Header</div> --}}
                                    <div class="card-body">
                                      <h5 class="card-title">Credit</h5>
                                      <h5 class="card-text">
                                        {{ "Rp " . number_format($credit, 0, ",", ".") }}
                                      </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-header">
                        <h5>Transactions</h5>
                    </div>
                    <div class="card-body vh-100 overflow-auto">
                        @foreach ($transactions as $transaction)
                            <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                                <span class="d-flex flex-column">
                                    <small class="text-muted">
                                        {{ $transaction->when->format("d F Y - H:i") }}
                                    </small>
                                    <span>
                                        {{ $transaction->name }}
                                    </span>
                                </span>
                                <span class="{{ $transaction->amount < 0 ? 'text-danger' : 'text-success' }}">
                                    {{ "Rp " . number_format($transaction->amount, 0, ",", ".") }}
                                </span>
                            </a>
                        @endforeach
                        {{-- <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">22 Januari 2021</small>
                                <span>Beli SmartPhone Samsung Galaxy A20</span>
                            </span>
                            <span class="text-danger">Rp. 2.200.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">02 Januari 2021</small>
                                <span>Gajian Bulanan</span>
                            </span>
                            <span class="text-success">Rp. 4.000.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">22 Januari 2021</small>
                                <span>Beli SmartPhone Samsung Galaxy A20</span>
                            </span>
                            <span class="text-danger">Rp. 2.200.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">02 Januari 2021</small>
                                <span>Gajian Bulanan</span>
                            </span>
                            <span class="text-success">Rp. 4.000.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">22 Januari 2021</small>
                                <span>Beli SmartPhone Samsung Galaxy A20</span>
                            </span>
                            <span class="text-danger">Rp. 2.200.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">02 Januari 2021</small>
                                <span>Gajian Bulanan</span>
                            </span>
                            <span class="text-success">Rp. 4.000.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">22 Januari 2021</small>
                                <span>Beli SmartPhone Samsung Galaxy A20</span>
                            </span>
                            <span class="text-danger">Rp. 2.200.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">02 Januari 2021</small>
                                <span>Gajian Bulanan</span>
                            </span>
                            <span class="text-success">Rp. 4.000.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">22 Januari 2021</small>
                                <span>Beli SmartPhone Samsung Galaxy A20</span>
                            </span>
                            <span class="text-danger">Rp. 2.200.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">02 Januari 2021</small>
                                <span>Gajian Bulanan</span>
                            </span>
                            <span class="text-success">Rp. 4.000.000</span>
                        </a>
                        <a href="" class="d-flex justify-content-between align-items-center list-group-item-action py-2 px-2 rounded mb-3">
                            <span class="d-flex flex-column">
                                <small class="text-muted">22 Januari 2021</small>
                                <span>Beli SmartPhone Samsung Galaxy A20</span>
                            </span>
                            <span class="text-danger">Rp. 2.200.000</span>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
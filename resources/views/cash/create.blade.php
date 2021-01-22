@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card border-light shadow-sm components-section">
                    <div class="card-header">
                        <h6>Add Transaction</h6>
                    </div>
                    <div class="card-body">     
                        <form action="/cash/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" name="amount" id="amount" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="when" class="form-label">When</label>
                                <input class="form-control" type="date" name="when" id="when">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-secondary float-right">
                                    <i class="fab fa-telegram-plane"></i> Send
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
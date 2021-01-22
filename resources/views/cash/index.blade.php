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
                        {{-- @foreach ($debit as $item)
                            Amount : {{ $item->amount }} <br>
                        @endforeach --}}
                        {{ "Rp " . number_format($debit, 0, ",", ".") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('user.app')
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2>Order History</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th class="product-thumbnail">Kode Invoice</th>
                <th class="product-name">Total</th>
                <th class="product-price">Status</th>
                <th class="product-quantity" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histori as $o)
                <tr>
                    <td>{{ $o->invoice }}</td>
                    <td>Rp. {{ $o->subtotal + $o->biaya_cod }}</td>
                    <td>{{ $o->name }}</td>
                    <td>
                    <a href="{{ route('user.order.detail',['id' => $o->id]) }}" class="btn btn-secondary">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </div>
        
    </div>

    </div>
</div>
@endsection
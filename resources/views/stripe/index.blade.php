@extends('layouts.layout')
@section('content')
    <div class="panel panel-default">
        <div style="display: flex; gap: 3rem;">
            @foreach($products as $product)
                <div class="flex: 1">
                    <img src="{{$product->image}}" style="max-width: 100%">
                    <h5>{{$product->name}}</h5>
                    <p>${{$product->price}}</p>
                </div>
            @endforeach
        </div>
        <p>
        <form action="{{route('checkout')}}" method="POST">
            @csrf
            <button>Checkout</button>
        </form>
        </p>  
    </div>
@endsection
@push('js')
    <script src="https://js.stripe.com/v3/"></script>

@endpush

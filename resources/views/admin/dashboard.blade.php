@extends('layouts.adminlayout')

@section('content')
<div class="container">
@foreach( $products as $data)
	<li>{{$data}}</li>
@endforeach

<form method="POST" action="{{ route('admin.create') }}">
    @csrf
    <div class="row mb-3">
        <label for="products" class="col-md-4 col-form-label text-md-end">{{ __('Product') }}</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control" name="title" value="{{ 'title' }}">
            <input id="description" type="text" class="form-control" name="description" value="{{ 'description' }}">
            <input id="price" type="number" class="form-control" name="price" value="{{ 'price' }}">

        </div>
    </div>
<button type="submit" class="btn btn-primary">
    {{ __('Add') }}
</button>
</form>
</div>
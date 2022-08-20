@extends('Layouts.main')
@section('name' , 'Products')

@section('content')

    <a class="btn btn-primary" href="{{ route('Products.index') }}" role="button">
        Add New Product
    </a>

@endsection


@extends('Layouts.main')
@section('name' , 'Result-Search')



@section('content')

    <h4 style="margin-bottom: 20px" class="text-center"> Search-Result </h4>
    @foreach ( $products as $product )
    <a class="btn btn-outline-warning" style="margin-right: 10px; margin-bottom: 20px"
        href="{{ route('Products.show' , $product->id ) }}" role="button">
        {{ $product->title  }}
    </a>
    @endforeach

@endsection

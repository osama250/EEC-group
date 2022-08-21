@extends('Layouts.main')
@section('name' , 'details-Product')

@section('content')

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <h5 class="card-title">{{ $product->title }}</h5>
    <div class="card-body">
      <p class="card-text"> {{ $product->description }}.</p>
       Price <span> {{ $product->price  }} $ </span> <br>
       quantity <span> {{ $product->quantity  }}</span>
    </div>
  </div>
  <ul>
    <h4> Pharmacies </h4>
    @foreach( $product->pharmacies as $pharmacy )
        <li> {{ $pharmacy->name }} </li>
    @endforeach
  </ul>

@endsection

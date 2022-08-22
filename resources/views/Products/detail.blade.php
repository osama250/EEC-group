@extends('Layouts.main')
@section('name' , 'details-Product')

@section('content')

<a class="btn btn-primary" href="{{ route('Products.index') }}" role="button" style="margin: 15px">
  Back
</a>
<div class="card" style="width: 18rem;">
    <h5 class="card-title">{{ $product->title }}</h5>
    @if ( $product->image == null )
         <h3> {{ $product->image }}  </h3>
    @else
         <img src="/images/Prodcut_Image/{{ $product->image }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body">
      <p class="card-text"> {{ $product->description }}.</p>
       quantity <span> {{ $product->quantity  }}</span>
    </div>
  </div>
  <ul>
    <h4> Pharmacies </h4>
    @if ( $product->pharmacies->count() > 0 )
        @foreach( $product->pharmacies as $pharmacy )
            <li> {{ $pharmacy->name  . ' This Price   : ' . $pharmacy->pivot->price }} </li>
        @endforeach
    @else
       <h4> Not found Still Now </h4>
    @endif
  </ul>

@endsection

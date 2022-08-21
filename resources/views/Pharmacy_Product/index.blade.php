@extends('Layouts.main')
@section('name' , 'Pharmacies-Products')

@section('content')

    <h4 class="text-center" style="margin-bottom: 40px"> Products-Pharmacies </h4>
    <form action="{{ route('Pro_Pharmacy.store') }}" method="POST">
        @csrf
            <select class="form-select" aria-label="Default select example" name="pharmacy_id" required>
                <option selected> Choose Your Pharmacy </option>
                    @foreach ( $pharmacies as $pharmacy )
                        <option value="{{ $pharmacy->id }}">{{ $pharmacy->name }}</option>
                    @endforeach
            </select>

          <h4 class="text-center" style="margin-top: 40px"> Chosse Multiple Products </h4>
            <select class="form-select" aria-label="Default select example" name="product_id[]" multiple required>
                    @foreach ( $Products as $product )
                        <option value="{{ $product->id }}">{{ $product->title }}</option>
                    @endforeach
            </select>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;"> Save </button>
    </form>

@endsection


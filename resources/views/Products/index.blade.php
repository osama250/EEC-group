@extends('Layouts.main')
@section('name' , 'Products')

@section('content')

    <a class="btn btn-primary" href="{{ route('Products.index') }}" role="button" style="margin: 15px">
        Add New Product
    </a>

     <table id="myTable">
        <thead>
          <tr>
            <th> Id   </th>
            <th> Name </th>
            <th> Description </th>
            <th> Options </th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ( $products as $product )
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $product->title  }}</td>
                    <td>{{ $product->description }} </td>
                    <td>
                        <a class="btn btn-outline-success"
                            href="{{ route('Pharmacies.edit' , $product->id) }}" role="button">
                            Edit
                        </a> <br> <br>
                        <form action="{{ route('Pharmacies.destroy' , $product->id ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Danger</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>

@endsection


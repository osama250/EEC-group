@extends('Layouts.main')
@section('name' , 'Products')

@section('content')
            <h4 class="text-center"> All Products </h4>
    <a class="btn btn-primary" href="{{ route('Products.create') }}" role="button" style="margin: 15px">
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
                        <a class="btn btn-outline-success" style="margin-right: 20px; margin-bottom: 20px"
                            href="{{ route('Products.edit' , $product->id) }}" role="button">
                            Edit
                        </a>
                        <a class="btn btn-outline-warning" style="margin-bottom: 20px"
                        href="{{ route('Products.show' , $product->id) }}" role="button">
                           Show
                       </a>
                        <form action="{{ route('Products.destroy' , $product->id ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"> Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
     </table>

@endsection


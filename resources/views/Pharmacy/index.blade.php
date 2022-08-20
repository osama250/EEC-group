@extends('Layouts.main')
@section('name' , 'Pharmacies')

@section('content')

    <a class="btn btn-primary" href="{{ route('Pharmacies.create') }}" role="button">
        Add New Pharmacy
    </a>

    <table id="myTable">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ( $pharmacies as $pharmacy )
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $pharmacy->name  }}</td>
                    <td>{{ $pharmacy->address }} </td>
                    <td>
                        <a class="btn btn-outline-success"
                            href="{{ route('Pharmacies.edit' , $pharmacy->id) }}" role="button">
                            Edit
                        </a> <br> <br>
                        <form action="{{ route('Pharmacies.destroy' , $pharmacy->id ) }}" method="POST">
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


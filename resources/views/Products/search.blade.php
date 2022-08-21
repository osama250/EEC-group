@extends('Layouts.main')
@section('name' , 'View-Search')

@section('content')
            <h4 class="text-center" style="margin-bottom:10px;"> Wirte Name Of product </h4>
       <form class="d-flex" role="search" action="{{ route('productSearch.result') }}" method="POST">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="name" required>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
@endsection


@extends('Layouts.main')
@section('name' , 'Add-New-Phrmacy')

@section('content')

        {{-- Show error validation  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

  <form action="{{ route('Pharmacies.store') }}" method="POST">
        @csrf
       <div class="row" style="margin-top: 40px">
            <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label"> Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name = "name"
                  aria-describedby="emailHelp" placeholder="Write Name Here...">
            </div>
            <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label"> Address </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name = "address"
                  aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
            </div>
       </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px"> Save </button>
  </form>

@endsection

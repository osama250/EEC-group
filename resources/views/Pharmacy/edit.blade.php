@extends('Layouts.main')
@section('name' , 'Edit-Phrmacy')

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

  <form action="{{ route('Pharmacies.update' , $pharmacy->id ) }}" method="POST">
        @csrf
        @method('PUT')
       <div class="row" style="margin-top: 40px">
            <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label"> Name </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name = "name" value="{{ $pharmacy->name }}"
                  aria-describedby="emailHelp" placeholder="Write Name Here...">
            </div>
            <div class="col-lg-6">
                <label for="exampleInputEmail1" class="form-label"> Address </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name = "address"  value="{{ $pharmacy->address }}"
                  aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
            </div>
       </div>
        <button type="submit" class="btn btn-success" style="margin-top: 20px; margin-right: 5px"> Save </button>
        <a class="btn btn-outline-info" style="margin-top: 20px" href="{{ route('Pharmacies.index') }}" role="button"> Back  </a>
  </form>

@endsection

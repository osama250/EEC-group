@extends('Layouts.main')
@section('name' , 'Add-New-Product')
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

        <form action="{{ route('Products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="row" style="margin-top: 40px">
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> title </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "title"
                      aria-describedby="emailHelp" placeholder="Write Name Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> Description </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "description"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> Image </label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name = "image"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> quantity </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "quantity"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
           </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px"> Save </button>
      </form>

@endsection

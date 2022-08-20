@extends('Layouts.main')
@section('name' , 'Edit-Product')
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

        <form action="{{ route('Products.update' , $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           <div class="row" style="margin-top: 40px">
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> title </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "title" value="{{ $product->title }}"
                      aria-describedby="emailHelp" placeholder="Write Name Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> Description </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "description"
                      value="{{ $product->description }}"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> Image </label>
                    <input type="hidden" value="{{ $product->image }}" name="old">
                    <input type="file" class="form-control" id="exampleInputEmail1" name = "image"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> Price </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "price"
                      value="{{ $product->price }}"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
                <div class="col-lg-6">
                    <label for="exampleInputEmail1" class="form-label"> quantity </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name = "quantity"
                      value="{{ $product->quantity }}"
                      aria-describedby="emailHelp"  placeholder="Write Adrees Here...">
                </div>
           </div>
           <button type="submit" class="btn btn-success" style="margin-top: 20px; margin-right: 5px"> Save </button>
           <a class="btn btn-outline-info" style="margin-top: 20px" href="{{ route('Products.index') }}"
                     role="button"> Back
           </a>
      </form>

@endsection

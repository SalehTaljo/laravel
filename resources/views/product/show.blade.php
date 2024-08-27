@extends('product.layout')
@section('content')

<div class = 'container'  style="padding-top: 12%">

    <div class="card ">

        <div class="card-body">
          <p class="card-text"><a href="{{route('products.index')}}">back</a>Product Name: {{ $product->name }}</p>
        </div>
      </div>

<div class="mb-3" style="padding-top: 2%">
    <label for="exampleFormControlInput1" class="form-label">{{$product->name}}</label>
  </div>
  <div class="mb-3" style="padding-top: 2%">
    <label for="exampleFormControlInput1" class="form-label">{{$product->price}}</label>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">{!!$product->details!!}</label>

  </div>


</div>


@endsection

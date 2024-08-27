@extends('product.layout')
@section('content')

<div class = 'container'  style="padding-top: 12%">

    <div class="card ">

        <div class="card-body">

          <p class="card-text"><a href="{{route('products.index')}}">back</a> Product Name: {{ $product->name }}</p>
        </div>
      </div>
      <form action={{route('products.update',$product->id)}} method="POST" >
        @csrf
        @method('PUT')
<div class="mb-3" style="padding-top: 2%">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="product name">
  </div>
  <div class="mb-3" style="padding-top: 2%">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" value="{{$product->price}}" placeholder="product price">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
    <textarea class="form-control" name="details" rows="3">
        {!!$product->details!!}
    </textarea>
  </div>
 <div class="mb-3"> <button type="submit" class="btn btn-primary">update</button>
</div>
</form>
</div>


@endsection

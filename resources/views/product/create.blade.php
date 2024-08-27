@extends('product.layout')
@section('content')

<div class = 'container'  style="padding-top: 12%">

    <div class="card ">

        <div class="card-body">
          <p class="card-text"><h1>Create Product</h1></p>
        </div>
      </div>
      <form action={{route('products.store')}} method="POST" >
        @csrf
<div class="mb-3" style="padding-top: 2%">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control"  placeholder="product name">
  </div>
  <div class="mb-3" style="padding-top: 2%">
    <label for="exampleFormControlInput1" class="form-label">Price</label>
    <input type="text" name="price" class="form-control"  placeholder="product price">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
    <textarea class="form-control" name="details" rows="3"></textarea>
  </div>
 <div class="mb-3"> <button type="submit" class="btn btn-primary">Save</button>
</div>
</form>
</div>


@endsection

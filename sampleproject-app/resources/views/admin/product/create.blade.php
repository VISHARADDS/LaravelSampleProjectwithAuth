<x-app-layout>
@push('styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @endpush
   
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="my-4" style="background-color:white;">

<div style="padding:20px">
@if(Session::has('error'))
                            <div class="alert alert-error" role="alert">
                                {{ Session::get('error') }}
                            </div>
                            @endif
<h2>ADD PRODUCT DETAILS </h2>
                            <hr>
    <form action="{{ route('admin/products/save') }}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="name">PRODUCT NAME</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter product name">
    @error('name')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for="price">PRICE</label>
    <input type="text" class="form-control"  name="price" placeholder="Enter price">
    @error('price')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for="quantity">QUANTITY </label>
    <input type="text" class="form-control" id="quantity" name="quantity"  placeholder="Enter quanitity">
    @error('quantity')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for="description">CATEGORY </label>
    <input type="text" class="form-control" id="description" name="description"  placeholder="Enter product material">
    @error('description')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
 
  <button style="margin-top:10px" type="submit" class="btn btn-primary">Save Product</button>
</form>
</div>  

</div>
</div>
</div>
</div>

       

</x-app-layout>

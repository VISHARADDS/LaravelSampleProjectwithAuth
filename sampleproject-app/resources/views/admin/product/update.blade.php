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
<h2>UPDATE PRODUCT DETAILS </h2>
                            <hr>
    <form action="{{ route('admin/products/update' , $products->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  <div class="form-group">
    <label for="name">PRODUCT NAME</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter product name" value="{{$products->name}}">
    @error('name')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for="price">PRICE</label>
    <input type="text" class="form-control"  name="price" placeholder="Enter price" value="{{$products->price}}">
    @error('price')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for="quantity">QUANTITY </label>
    <input type="text" class="form-control" id="quantity" name="quantity"  placeholder="Enter quanitity" value="{{$products->quantity}}">
    @error('quantity')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for="description">CATEGORY </label>
    <input type="text" class="form-control" id="description" name="description"  placeholder="Enter product material" value="{{$products->description}}">
    @error('description')
    <span class="text-danger">{{$message}}</span>
   @enderror
  </div>
  <div class="form-group">
    <label for=""> UPLOAD IMAGE </label>
    <div class="avatar-upload">
        <div>
        <input type="file"  id="imageUpload" name="image"  accept=".png , .jpeg , .jpg" onchange="previewImage(this)"/>
        <label for="imageUpload"></label>
</div>
        
</div>
  </div>
  <button style="margin-top:10px"  class="btn btn-warning">Save Product</button>
</form>
</div>  

</div>
</div>
</div>
</div>

       

</x-app-layout>
 @push('js')
 <script type="text/javascript">
    function previewImage(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
        }
    }
    </script>
    @endpush
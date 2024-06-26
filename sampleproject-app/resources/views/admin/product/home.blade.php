<x-app-layout>
@push('styles')
        <link rel="stylesheet" href="{{ asset('css/headerUI.css') }}"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
        .showPhoto{
            width:50%;
            height:50px;
        }
        .showPhoto>div{
            width:100%;
            height:100%;
            margin:auto;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        </style>   
    @endpush
   

   
      
    
                <div class="p-4 text-gray-900">
              <a href="{{ route('admin/products/create') }}" style="width: 100px; height: 40px; margin-left:20px " class="btn btn-dark d-flex justify-content-center align-items-center"> 
                                                        <i class="material-icons opacity-10">add</i>ADD  </a>
       <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3"><b>PRODUCTS</b></h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            @if(Session::has('success'))
                            <div class="alert alert-success" style="color:white" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            <table class="table align-items-center mb-0 align-items-center table-flush" responsive="true">
                                <thead>
                                    <tr>
                                       
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-3"></th>
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-2">IMAGE</th>
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-2">NAME</th>
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-2">PRICE</th>
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-2">QUANTITY</th>
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-2">CATEGORY</th>
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-2">Last updated</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @forelse ($products as $product )
                                   <tr >
                                  
                                        <td>
                                            <div class="px-2 py-1">
                                                <div>
                                                    <p style="font-size:14px" class="font-weight-bold mb-0">{{ $loop->iteration}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 style="color:black" class="mb-0 text-sm">
                                                <div class="showPhoto">
                                                    <div id="imagePreview" style="@if ($product->photo !='') background-image:url('{{url('/')}}/uploads/{{ $product->photo}}')@else background-image: url('{{url('/image/avatar.png')}}') @endif;" >
                                                </div>
                                              </div>    
                                            </h6>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0">{{ $product->name}}</p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0">{{ $product->price}}</p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0">{{ $product->quantity}}</p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0">{{ $product->description}}</p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0">{{ $product->updated_at}}</p>
                                        </td>
                                        <td>
                                            <div style="display: flex">
                                                <div style="padding: 0; display: flex; align-items: center">
                                                    <a href="{{ route('admin/products/edit',['id'=>$product->id]) }}" style="width: 40px; height: 40px" type="button" class="btn btn-success d-flex justify-content-center align-items-center">
                                                        <i class="material-icons opacity-10">edit</i>
</a>
                                                </div>
                                                <div style="margin-left: 10px; display: flex; align-items: center">
                                                    <a href="{{ route('admin/products/delete',['id'=>$product->id]) }}" style="width: 40px; height: 40px" type="button" class="btn btn-danger d-flex justify-content-center align-items-center delete-user-button">
                                                        <i class="material-icons opacity-10">delete</i>
</a>
                                                </div>
                                            
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="5">Product not found </td>
                                
                                     </tr>
                                     @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
          
       

</x-app-layout>

<x-app-layout>
@push('styles')
        <link rel="stylesheet" href="{{ asset('css/headerUI.css') }}"/>
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
                            <h6 class="text-white text-capitalize ps-3">PRODUCTS</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            <table class="table align-items-center mb-0 align-items-center table-flush" responsive="true">
                                <thead>
                                    <tr>
                                       
                                        <th style="color:black" class="text-uppercase text-sm opacity-7 ps-3">PRODUCT ID</th>
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
                                 
                                   <tr >
                                  
                                        <td>
                                            <div class="px-2 py-1">
                                                <div>
                                                    <p style="font-size:14px" class="font-weight-bold mb-0"></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 style="color:black" class="mb-0 text-sm"></h6>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0"></p>
                                        </td>
                                        <td class="align-justify text-justify text-sm">
                                            <p style="font-size:14px" class="font-weight-bold mb-0"></p>
                                        </td>
                                        <td>
                                            <div style="display: flex">
                                                <div style="padding: 0; display: flex; align-items: center">
                                                    <button style="width: 40px; height: 40px" type="button" class="btn btn-success d-flex justify-content-center align-items-center">
                                                        <i class="material-icons opacity-10">book</i>
                                                    </button>
                                                </div>
                                                <div style="margin-left: 10px; display: flex; align-items: center">
                                                    <button style="width: 40px; height: 40px" type="button" class="btn btn-danger d-flex justify-content-center align-items-center delete-user-button">
                                                        <i class="material-icons opacity-10">delete</i>
                                                    </button>
                                                </div>
                                            
                                                 <div style="margin-left: 10px; display: flex; align-items: center">
                                                    <button style="width: 40px; height: 40px" type="button" class="btn btn-info d-flex justify-content-center align-items-center">
                                                        <i class="material-icons opacity-10">download</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                
                                    
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

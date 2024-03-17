@extends('backend.master');
@section('page_title') Brand Manage @endsection



@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Brand Manage</h2>
                         <a href="{{ route('brand.create') }}" class="btn btn-sm btn-success">Add</a>
                    </div>
                    <div class="body">
                         <table class="table table-bordered table-hover table-striped">
                              <thead>
                                   <tr class="text-center">
                                        <th>SL NO</th>
                                        <th>Name</th>
                                        <th>SLUG</th>
                                        <th>ACTION</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($brands as $brand)
                                   <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td>{{ $brand->name }}</td>
                                        <td>{{ $brand->slug }}</td>
                                        <td class="text-center">
                                             <a href="{{ route('brand.edit', $brand->id) }}" class="btn btn-sm btn-info">Edit</a>
                                             <a href="{{ route('brand.destroy', $brand->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>   
          </div>
    </div>
    
  </section>
    
@endsection

@extends('backend.master');
@section('page_title') Brand Add @endsection



@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Brand Add</h2>
                         <a href="{{ route('brand.index') }}" class="btn btn-sm btn-success">List</a>
                    </div>
                    <div class="body">
                         <div class="container">
                              <form action="{{ route('brand.store') }}" method="POST">
                                   @csrf
                                   <div class="mb-0">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Category Name">
                                        @error('name')
                                             <span class="text-danger mt-1">{{ $message }}</span>
                                       @enderror
                                      </div>
                                      <button type="submit" class="btn btn-success mt-2">Add Brand</button>
                                   </div>
                              </form>

                         </div>
                    </div>
               </div>   
          </div>
    </div>
  </section>
    
@endsection
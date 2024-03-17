@extends('backend.master');
@section('page_title') Product Manage @endsection

@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Product Manage</h2>
                         <a href="{{ route('product.create') }}" class="btn btn-sm btn-success">Add</a>
                    </div>
                    <div class="body">
                         <table class="table table-bordered table-hover table-striped">
                              <thead>
                                   <tr class="text-center">
                                        <th>SL NO</th>
                                        <th>Category Name</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>ACTION</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($products as $product)
                                   <tr>
                                        <td class="text-center">{{ $loop->index+1 }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                             <img src="" alt="">
                                             {{ $product->name ?? '' }}
                                        </td>
                                        <td>
                                             <strong>Buy price</strong>: {{ $product->buy_price ?? '' }}Tk. <br/>
                                             <strong>Sale price</strong>: {{ $product->price ?? '' }}Tk. <br/>
                                             <strong>Profit price</strong>: {{ $product->buy_price - $product->price ?? '' }}Tk.
                                        </td>
                                        <td>
                                             
                                             {{ $product->qty ?? '' }}
                                              
                                        </td>
                                        <td class="text-center">
                                             <a href="{{ route('product.show', $product->id) }}" class="btn btn-sm btn-success">Details</a>
                                             <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-info">Edit</a>
                                             <a href="{{ route('product.destroy', $product->id) }}" class="btn btn-sm btn-danger">Delete</a>
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

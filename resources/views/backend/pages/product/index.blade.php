@extends('backend.master');
@section('page_title') Product Manage @endsection

@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Product Manage</h2>
                         <a href="{{ route('product.create') }}" class="btn btn-sm btn-success"><i class='bx bx-plus'></i> Add</a>
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
                                        <td class="text-center align-content-center" >{{ $loop->index+1 }}</td>
                                        <td style="align-content: center" >{{ $product->category?->name }}</td>
                                        <td style="align-content: center">
                                             <img src="{{ $product->image }}" width="40px" alt="">
                                             {{ $product->name }}
                                        </td>
                                        <td>
                                             <strong>Buy price</strong>: {{ $product->buy_price ?? '' }} Tk. <br/>
                                             <strong>Sale price</strong>: {{ $product->price?? '' }} Tk. <br/>
                                             <strong>Profit price</strong>: {{$product->price - $product->buy_price - $product->discount_price }} Tk.
                                        </td>
                                        <td style="align-content: center">
                                             
                                             {{ $product->qty ?? '' }}
                                              
                                        </td>
                                        <td class="align-middle" >
                                             <a href="{{ route('product.show', $product->id) }}" class=" btn btn-sm btn-success"><i class='bx bxs-show'></i></a>
                                             <a href="{{ route('product.edit', $product->id) }}" class="mx-1  btn btn-sm btn-info"><i class='bx bx-edit'></i></a>
                                             <a href="{{ route('product.destroy', $product->id) }}" class="btn  btn-sm btn-danger"><i class='bx bxs-trash'></i></a>
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

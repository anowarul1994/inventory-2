@extends('backend.master');
@section('page_title') Product Update @endsection


@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
               <div class="card p-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Product Upadate</h2>
                         <a href="{{ route('product.index') }}" class="btn btn-success"><i class='bx bx-list-ul' ></i> List</a>
                    </div>
                    <div class="body">
                         <div class="container">
                              <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="name" class="form-label">Category Name</label> <span style="color:red">*</span>
                                                  <select class="form-select @error('cat_id') is-invalid @enderror" name="cat_id">
                                                       <option disabled>Select Category Name</option>
                                                       @foreach($categories as $category)
                                                       <option {{ $category->id == $product->cat_id ?  'selected':'' }} value="{{ $category->id ?? old('cat_id') }}">{{ $category->name }}</option>
                                                       @endforeach
                                                     </select>
                                                  @error('cat_id')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="name" class="form-label">Name</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ $product->name??old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Product Name">
                                                  @error('name')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="name" class="form-label">Buy Price</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ $product->buy_price??old('buy_price') }}" name="buy_price" class="form-control @error('buy_price') is-invalid @enderror" id="name" placeholder="Enter Buy Price">
                                                  @error('buy_price')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="name" class="form-label">Sale Price</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ $product->price?? old('price') }}" name="price" class="form-control @error('price') is-invalid @enderror" id="name" placeholder="Enter Sale Price">
                                                  @error('price')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="discount_price" class="form-label">Discount Price</label>
                                                  <input type="text" value="{{ $product->discount_price?? old('discount_price') }}" name="discount_price" class="form-control @error('discount_price') is-invalid @enderror" id="name" placeholder="Enter Sale Price">
                                                  @error('discount_price')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-3">
                                                  <label for="qty" class="form-label">Qty</label><span style="color:red">*</span>
                                                  <input type="number" value="{{$product->qty?? old('qty') }}" name="qty" class="form-control @error('qty') is-invalid @enderror" id="qty" placeholder="Enter your Qty">
                                                  @error('qty')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-12">
                                             <div class="mb-3">
                                                  <label for="sku" class="form-label">SKU</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ $product->sku??old('sku') }}" name="sku" class="form-control @error('sku') is-invalid @enderror" id="sku" placeholder="Enter your sku">
                                                  @error('sku')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>
                                        </div>
                                        <div class="col-md-12">
                                             
                                             <div class="mb-3">
                                                  <label for="image" class="form-label">Image</label><span style="color:red">*</span>
                                                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                                  @error('image')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror                                      
                                             </div>

                                        </div>
                                        <div class="col-md-12">
                                             <div class="col-md-6">
                                                  <img src="{{ $product->image }}" width="120px" alt="">
                                             </div>
                                        </div>

                                   </div>
  
                                   <div class="mb-3">
                                        <label for="short_description" class="form-label">Short Description</label><span style="color:red">*</span>
                                        <textarea name="short_description" class="ckeditor form-control @error('short_description') is-invalid @enderror" id="short_description" placeholder="Enter short description"> {{ $product->short_description??old('short_description') }}</textarea>
                                        @error('short_description')
                                             <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror                                      
                                   </div>
                                   <div class="mb-3">
                                        <label for="long_description" class="form-label">Long Description</label><span style="color:red">*</span>
                                        <textarea name="long_description" class="ckeditor form-control @error('long_description') is-invalid @enderror" id="long_description" placeholder="Enter short long description"> {{ $product->long_description??old('long_description') }}</textarea>
                                        @error('long_description')
                                             <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror                                      
                                   </div>
                                   
                                   <button type="submit" class="btn btn-success mt-2">Update Product</button>
                              </form>
                         </div>
                    </div>
               </div>   
          </div>
    </div>
  </section>
    
@endsection

@push('script')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
@endpush
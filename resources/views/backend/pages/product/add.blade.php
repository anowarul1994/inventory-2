@extends('backend.master');
@section('page_title') Product Add @endsection


@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
               <div class="card p-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Product Add</h2>
                         <a href="{{ route('product.index') }}" class="btn btn-success"><i class='bx bx-list-ul' ></i> List</a>
                    </div>
                    <div class="body">
                         <div class="container">
                              <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                   @csrf
                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="name" class="form-label">Category Name</label> <span style="color:red">*</span>
                                                  <select class="form-select @error('cat_id') is-invalid @enderror" name="cat_id">
                                                       <option disabled selected>Select Category Name</option>
                                                       @foreach($categories as $category)
                                                       <option value="{{ $category->id ?? old('cat_id') }}">{{ $category->name }}</option>
                                                       @endforeach
                                                     </select>
                                                  @error('cat_id')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="name" class="form-label">Name</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Product Name">
                                                  @error('name')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="name" class="form-label">Buy Price</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ old('buy_price') }}" name="buy_price" class="form-control @error('buy_price') is-invalid @enderror" id="name" placeholder="Enter Buy Price">
                                                  @error('buy_price')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="name" class="form-label">Sale Price</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ old('price') }}" name="price" class="form-control @error('price') is-invalid @enderror" id="name" placeholder="Enter Sale Price">
                                                  @error('price')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="discount_price" class="form-label">Discount Price</label>
                                                  <input type="text" value="{{ old('discount_price') }}" name="discount_price" class="form-control @error('discount_price') is-invalid @enderror" id="name" placeholder="Enter Sale Price">
                                                  @error('discount_price')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="qty" class="form-label">Qty</label><span style="color:red">*</span>
                                                  <input type="number" value="{{ old('qty') }}" name="qty" class="form-control @error('qty') is-invalid @enderror" id="qty" placeholder="Enter your Qty">
                                                  @error('qty')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="sku" class="form-label">SKU</label><span style="color:red">*</span>
                                                  <input type="text" value="{{ old('sku') }}" name="sku" class="form-control @error('sku') is-invalid @enderror" id="sku" placeholder="Enter your sku">
                                                  @error('sku')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="mb-1">
                                                  <label for="image" class="form-label">Image</label><span style="color:red">*</span>
                                                  <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                                  @error('image')
                                                       <span class="text-danger mt-1">{{ $message }}</span>
                                                  @enderror
                                             </div>
                                        </div>

                                   </div>

                                   <div class="mb-1">
                                        <label for="short_description" class="form-label">Short Description</label><span style="color:red">*</span>
                                        <textarea name="short_description" class="ckeditor form-control @error('short_description') is-invalid @enderror" id="short_description" placeholder="Enter short description"> {{ old('short_description') }}</textarea>
                                        @error('short_description')
                                             <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                   </div>
                                   <div class="mb-1">
                                        <label for="long_description" class="form-label">Long Description</label><span style="color:red">*</span>
                                        <textarea name="long_description" class="ckeditor form-control @error('long_description') is-invalid @enderror" id="long_description" placeholder="Enter short long description"> {{ old('long_description') }}</textarea>
                                        @error('long_description')
                                             <span class="text-danger mt-1">{{ $message }}</span>
                                        @enderror
                                   </div>

                                   <button type="submit" class="btn btn-success mt-2"><i class='bx bx-plus'></i> Add Product</button>
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

@extends('backend.master');
@section('page_title') Product Details @endsection

@section('content')


  <section class="section dashboard">
     <div class="row">
          <div class="col-md-12">
               <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                         <h2>Product Details</h2>
                         <a href="{{ route('product.index') }}" class="btn btn-sm btn-success">List</a>
                    </div>
                    <div class="card-body mt-2">
                         <table class="table table-bordered table-hover table-striped">
                            <tr class="align-middle">
                                <th style="width: 200px">Name</th>
                                <td>{{ $product->name }}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Categoy Name</th>
                                <td>{{ $product->category?->name }}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Buy Price</th>
                                <td>{{ $product->buy_price }}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Sale Price</th>
                                <td>{{ $product->sale_price }}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Qty</th>
                                <td>{{ $product->qty }}</td>
                            </tr>

                            <tr class="align-middle">
                                <th>Discount Price</th>
                                <td>{{ $product->discount_price?? '' }}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Sku</th>
                                <td>{{ $product->sku }}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Short Description</th>
                                <td>{!! $product->short_description?? '' !!}</td>
                            </tr>
                            <tr class="align-middle">
                                <th>Long Description</th>
                                <td>{!! $product->long_description?? '' !!}</td>
                            </tr>

                            @php
                                $url = parse_url($product->image); //base url different
                                $image_path = public_path($url['path']);
                            @endphp
                            <tr class="align-middle">
                                <th>Image</th>
                                <td>
                                    @if (file_exists($image_path))
                                        <img src="{{ $product->image }}" width="40px" alt="">

                                    @else
                                        <img src="{{ asset(Helper::DEFAULT_IMAGE_PATH)}}" width="40px" alt="">
                                    @endif
                                    {{ $product->name }}
                                </td>
                            </tr>


                         </table>

                         <a class=" ms-3 mb-3 btn btn-sm btn-warning" href="{{ route('product.index') }}"><i class='bx bx-arrow-back'></i> Back</a>


                    </div>
               </div>
          </div>
    </div>

  </section>

@endsection

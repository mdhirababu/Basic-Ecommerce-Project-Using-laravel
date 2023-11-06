@extends('backend.master')

@section('title')
    Update Product
@endsection

@section('content')
    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-success"></p>
                    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Edit Your Product</h3>
                        <div class="mb-3">
                            <label for="pnmae" class="form-label">Product Title</label>
                            <input type="text" class="form-control" value="{{ $product->product_title }}" name="pnmae" id="pnmae">
                            <div class="form-text">Insert your Product Title</div>
                        </div>
                        <div class="mb-3">
                            <label for="psd" class="form-label">Product Short Description</label>
                            <input type="text" class="form-control" name="psd" id="psd"  value="{{ $product->product_sd }}" >
                            <div class="form-text">Insert your Short Description</div>
                        </div>
                        <div class="mb-3">
                            <label for="pld" class="form-label">Product Long Description</label>
                            <input type="text" class="form-control" name="pld" id="pld"  value="{{ $product->product_ld }}" >
                        </div>
                        <div class="mb-3">
                            <label for="pprice" class="form-label">Price</label>
                            <input type="number" class="form-control" name="pprice" id="pprice"  value="{{ $product->product_price }}" >
                        </div>
                        <div>
                            <img src="{{asset('/')}}{{$product->image}}" alt="" height="50" width="70">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Choose Product Image</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                        <button type="submit" name="btn" id="btn" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('backend.master')

@section('title')
    Add Product
@endsection


@section('content')
    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-success">{{ Session::get('pmsg') }}</p>
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Add New Product</h3>
                        <div class="mb-3">
                            <label for="pnmae" class="form-label">Product Category</label>
                            <select class="form-select" name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pnmae" class="form-label">Product Title</label>
                            <input type="text" class="form-control" name="pnmae" id="pnmae">
                            <div class="form-text">Insert your Product Title</div>
                        </div>
                        <div class="mb-3">
                            <label for="psd" class="form-label">Product Short Description</label>
                            <input type="text" class="form-control" name="psd" id="psd">
                            <div class="form-text">Insert your Short Description</div>
                        </div>
                        <div class="mb-3">
                            <label for="pld" class="form-label">Product Long Description</label>
                            <input type="text" class="form-control" name="pld" id="pld">
                        </div>
                        <div class="mb-3">
                            <label for="pprice" class="form-label">Price</label>
                            <input type="number" class="form-control" name="pprice" id="pprice">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Choose Product Image</label>
                            <input type="file" class="form-control" name="img" id="img">
                        </div>
                        <button type="submit" name="btn" id="btn" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection


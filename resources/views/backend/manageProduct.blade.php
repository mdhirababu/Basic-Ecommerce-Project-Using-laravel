@extends('backend.master')

@section('title')
    Manage Product
@endsection

@section('content')
  <section class="p-5">
      <div class="container">
            <div class="row ">
                <h1 class="text-center text-success">{{ Session::get('pmsg') }}</h1>
            </div>
          <div class="row">
              <div class="col-md-12">
                  <table class="table table-hover table-striped">
                      <tr>
                          <td>Title</td>
                          <td>Short D.</td>
                          <td>Price</td>
                          <td>Image</td>
                          <td>Action</td>
                      </tr>
                      @foreach($ourproducts as $product)
                      <tr>
                          <td>{{ $product->product_title }}</td>
                          <td>{{ $product->product_sd }}</td>
                          <td>{{ $product->product_price }}</td>
                          <td><img src="{{ $product->image }}" alt="" height="50px" width="50px"></td>
                          <td>
                              <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="btn btn-success">Edit</a>
                              <a href="{{route('product.delete', ['p' => $product->id ])}}" class="btn btn-danger">Delete</a>
                          </td>
                      </tr>
                      @endforeach
                  </table>
              </div>
          </div>
      </div>
  </section>
@endsection

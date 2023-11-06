@extends('backend.master')

@section('title')
    Add New Category
@endsection

@section('content')
  <section class="p-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <p class="text-danger">{{ Session::get('msg') }}</p>
                  <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-3">
                          <label for="cname" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="cname" id="cname">
                          <div id="emailHelp" class="form-text">Please give a New Category Name</div>
                      </div>
                      <div class="mb-3">
                          <label for="ldesp" class="form-label">Long Description</label>
                          <input type="text" class="form-control" name="ldesp" id="ldesp">
                      </div>
                      <div class="mb-3">
                          <label for="img" class="form-label">Choose Category Image</label>
                          <input type="file" class="form-control" name="img" id="img">
                      </div>
                      <button type="submit" name="btn" id="btn" class="btn btn-primary">Add Category</button>
                  </form>
              </div>
          </div>
      </div>
  </section>
@endsection

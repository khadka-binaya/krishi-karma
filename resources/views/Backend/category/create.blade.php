@extends('Backend.index')

@section('title', 'Create Category')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="col-sm-6">
        <h1>Category</h1>
      </div>
      <br>
      <div class="row">
        <!-- left column -->
        <div class="col">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{url('Category')}}">
              <div class="card-body">
                <div class="form-group">
                  {{-- <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> --}}
                  <label for="categoryName">Category Name</label> <br>
                  <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Category">
                </div>
                <div class="form-group">
                  <label for="categoryDetails">Category Details</label>
                  <input type="text" class="form-control" name="categoryDetails" id="categoryName"
                    placeholder="Details">
                </div>
                <div class="form-group">
                  <label for="categoryPrice">Money Offer</label>
                  <br>
                  <input type="text" name="categoryDetails" id="categoryPrice" class="form-control"
                    placeholder="Price to be distributed">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="submit" class="btn btn-danger">Clear</button>
                </div>
            </form>
          </div>
        </div>
  </section>
</div>

@endsection
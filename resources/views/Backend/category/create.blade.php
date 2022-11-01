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
            <form action="{{ route('category.store') }}" method="POST">
              @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="name">Name Title</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter the Category Name">
                </div>
                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name="description" class="form-control" id="description"
                    placeholder="Enter Description">
                </div>
                <div class="form-group">
                  <label for="amount">Money</label>
                  <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter the Amount">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="submit" class="btn btn-danger">Clear</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    @endsection
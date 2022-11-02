@extends('Backend.index')

@section('title', 'Edit Category')

@section('content')
<div class="content-wrapper">
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
          <h3 class="card-title">Edit</h3>
        </div>

        <form action="{{ route('category.update', $category->id) }}" method="POST">
          {{-- <input type="hidden" name="_token" value="<?php //echo csrf_token(); ?>"> --}}
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
            </div>
            <div class="form-group">
              <label for="slug">Slug</label>
              <input type="text" name="slug" id="slug" class="form-control" value="{{ $category->slug }}">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" id="description" class="form-control"
                value="{{ $category->description }}">
            </div>
            <div class="form-group">
              <label for="amount">Money</label>
              <input type="text" name="amount" id="amount" class="form-control" value="{{ $category->amount }}">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" value="Edit" class="btn btn-success">Edit</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
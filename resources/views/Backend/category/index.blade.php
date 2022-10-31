@extends('Backend.index')

@section('title', 'Category Index')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="col-sm-6">
        <h1>Category</h1>
      </div>
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th>Total Amount</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Animal Husbandary</td>
              <td>Animal</td>
              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum qui, quidem vel aliquid commodi error?
                Sint omnis perspiciatis voluptatem quaerat esse blanditiis quae. Expedita libero ullam ex maxime
                necessitatibus neque.</td>
              <td>10,000</td>
              <td>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-primary">Edit</button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th>Total Amount</th>
              <th>Changes</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
</div>
</div>

@endsection
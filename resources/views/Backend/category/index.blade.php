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
              <th>S.N</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th>Total Amount</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td> {{ $category['id'] }} </td>
              <td>{{$category['name']}}</td>
              <td>{{$category['slug']}}</td>
              <td>{{$category['description']}}</td>
              <td>{{$category['amount']}}</td>
              <td>
                <a href="{{ route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{ route('category.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>SN</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th>Total Amount</th>
              <th>Button Options</th>
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
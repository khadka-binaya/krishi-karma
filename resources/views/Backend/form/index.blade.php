@extends('Backend.index')

@section('title', 'Form')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="col-sm-6">
        <h1>Form</h1>
      </div>
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Full Name</th>
              <th>Citizenship Number</th>
              <th>Bank Account</th>
              <th>Current Address</th>
              <th>Permanent Address</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data['forms'] as $form)
            <tr>
              <th>{{$form->id}}</th>
              <th>{{$form->fullname}}</th>
              <th>{{$form->citizenship_number}}</th>
              <th>{{$form->account_number}}</th>
              <th>{{$form->c_address}}</th>
              <th>{{$form->p_address}}</th>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
</div>
</div>

@endsection
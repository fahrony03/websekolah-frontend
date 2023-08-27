@extends('layoutadmin')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Dataset</h1>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Dataset</h6>
    </div>
    <form class="form-horizontal" method="POST" action="/addphone">
      <div class="box-body">
        <br>
        <div class="form-group">
          <div class="col-sm-2">
            <input name="no" type="number" class="form-control" placeholder="no" autocomplete="off" required>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input name="text" type="text" class="form-control" placeholder="Text" autocomplete="off" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input name="polarity" type="text" class="form-control" placeholder="Polaritas/label" autocomplete="off" required>
          </div>
        </div>
      <div class="box-footer">
        <a href="/dataset"><button type="button" class="btn btn-default">Cancel</button></a>
        <input name="save" type="submit" class="btn btn-info pull-right" value="Save">
  
      </div>
      <br>
  
    </form>
  
  </div>
@endsection
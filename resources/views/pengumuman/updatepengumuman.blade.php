@extends('layoutadmin')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Dataset</h1>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Data</h6>
    </div>
  
    <form class="form-horizontal" method="POST" action="/updatephone">
      {% for row in data %}
        <div class="box-body">
          <br>
          <div class="form-group">
            <div class="col-sm-2">
              <input name="no" value="{{ row[1] }}" type="number" class="form-control" placeholder="Name" autocomplete="off" required>
            </div>
          </div>
        </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input name="text" value="{{ row[2] }}" type="text" class="form-control" placeholder="text" autocomplete="off" required>
            </div>
  
          </div>
  
        <div class="box-footer">
          <a href="/dataset"><button type="button" class="btn btn-default">Cancel</button></a>
          <input name="update" type="submit" class="btn btn-primary pull-right" value="Update">
  
        </div>
        <br>
       {% endfor %}
      </form>
      </div>
@endsection
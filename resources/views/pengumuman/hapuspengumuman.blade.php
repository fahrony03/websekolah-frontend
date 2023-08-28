@extends('layoutadmin')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Delete Dataset</h1>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Delete Dataset</h6>
    </div>
                <form class="form-horizontal" method="POST" action="/delete">
                      {% for row in data %}
                    <div class="box-body">
                      <br>
                      <div class="form-group">
                                      <div class="col-sm-12">
                                        <input name="name" value="{{ row[1] }}" type="text" class="form-control" disabled>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      <div class="col-sm-12">
                                        <input name="phone" value="{{ row[2] }}" type="text" class="form-control" disabled>
                                      </div>
                                    </div>
                                  <div class="box-footer">
                                    <a href="/dataset"><button type="button" class="btn btn-default">Cancel</button></a>
                                    <input name="delete" type="submit" class="btn btn-danger pull-right" value="Delete">
                                  </div>
                                  <br>
                                {% endfor %}
                                </form>
                          </div>
                      </div>
@endsection
@extends('layoutadmin')
@section('content')
<!-- Begin Page Content -->
 <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Pengumuman</h1>
  </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="font-weight-bold text-primary">Tambah Pengumuman</h6>
                      </div>
                      <div class="card-body">
                        <form class="form-horizontal" method="POST" action="/addphone">
                          <div class="box-body">
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
                            <input name="save" type="submit" class="btn btn-primary pull-right" value="Save">
                      
                          </div>
                          <br>
                      
                        </form>
                      </div>
                  </div>



</div>
<!-- /.container-fluid -->
  @endsection
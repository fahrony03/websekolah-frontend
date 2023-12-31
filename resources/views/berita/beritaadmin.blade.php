@extends('layoutadmin')
@section('content')
<!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
        <a href="/add" class="btn btn-primary btn-icon-split">
          <span class="icon text-white-50">
              <i class="fas fa-plus"></i>
          </span>
          <span class="text">Tambah</span>
        </a>
    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                          <h6 class="m-0 font-weight-bold text-primary">Tabel Berita</h6>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                   <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Thumbnail</th>
                                    <th>Konten</th>
                                    <th>Penulis</th>
                                    <th>Aksi</th>
                                   </tr>
                                  </thead>
                                  <tfoot>
                                   <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Thumbnail</th>
                                    <th>Konten</th>
                                    <th>Penulis</th>
                                    <th>Aksi</th>
                                   </tr>
                                  </tfoot>
                                  <tbody>
                                <tr>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td></td>
                                     <td>
                                      <a href=""
                                      class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <a href=""
                                      class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                              </td>
                                   </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

</div>
<!-- /.container-fluid -->
@endsection
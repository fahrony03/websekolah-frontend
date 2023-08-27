@extends('layoutadmin')
@section('content')
<!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

<!-- Total Pengumuman -->
<div class="card mb-4 py-2 border-bottom-primary">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                    Total Pengumuman</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>

<!-- Total Galeri -->
<div class="card mb-4 py-2 border-bottom-success">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-2">
                    Total Galeri</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-images fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>

<!-- Total Berita -->
<div class="card mb-4 py-2 border-bottom-info">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-2">
                    Total Berita</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>

<!-- Total Guru -->
<div class="card mb-4 py-2 border-bottom-warning">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-2">
                    Total Guru</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
        </div>
    </div>
</div>



</div>
<!-- /.container-fluid -->
@endsection
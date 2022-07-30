@extends('layouts.main')
@section('container')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Galeri</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Album</th>
                    <th>Gambar Sampul</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1; ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td>Agustusan 2022</td>
                    <td>
                      <img src="20220718_115146.jpg" alt="" style="width:100px;height:50px;">
                    </td>
                    <td>
                      <a href="/detail_galeri">
                        <div class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i></div>
                      </a>
                      <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@extends('layouts.main')
@section('container')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pengurus</h1>
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
              <h3 class="card-title">Data Pengurus</h3>
              <div class="card-tools">
                <a href="/tambah_pengurus">
                  <div class="input-group input-group-sm" style="width: 160px;">
                    <button type="button" class="btn btn-block btn-success">Tambah Pengurus</button>
                  </div>
                </a>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Jabatan</th>
                    <th>Nama</th>
                    <th>Tanggal Mulai Menjabat</th>
                    <th>aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1; ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td>0018123123</td>
                    <td>bendahara</td>
                    <td>Alin</td>
                    <td>10-10-2022</td>
                    <td>
                      <a href="/detail_pengurus">
                        <div class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i></div>
                      </a>
                      <a href="/edit_pengurus">
                        <div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>
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
</section>
</div>
@endsection
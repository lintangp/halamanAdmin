@extends('layouts.main')
@section('container')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Detail Pengurus</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-end">
          <a href="/pengurus">
            <div class="mr-2">
              <button type="button" class="btn btn-block btn-primary">Kembali</button>
            </div>
          </a>
          <div class="mr-2">
            <button type="button" class="btn btn-block btn-success">Edit</button>
          </div>
          <div class="mr-2">
            <button type="button" class="btn btn-block btn-danger">Hapus</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="col-sm-6">
          <h4 class="m-2">Biodata</h4>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img src="mutsumi.jpg" alt="">
          </div>
          <div class="col-md-9">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid">
              <tbody>
                <tr>
                  <td class="dtr-control sorting_1" tabindex="0">Nama</td>
                  <td>Asuma Mutsumi</td>
                </tr>
                <tr>
                  <td class="dtr-control sorting_1" tabindex="0">NIP</td>
                  <td>0018123123</td>
                </tr>
                <tr>
                  <td class="dtr-control sorting_1" tabindex="0">Jabatan</td>
                  <td>mahasiswa</td>
                </tr>
                <tr>
                  <td class="dtr-control sorting_1" tabindex="0">tanggal menjabat</td>
                  <td>10 Juli 2022</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
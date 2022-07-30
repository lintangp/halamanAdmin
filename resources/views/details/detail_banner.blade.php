@extends('layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Banner</h1>
          </div>
        </div>
      </div>
    </div>
   <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="d-flex flex-row justify-content-end">
          <a href="/banner">
          <div class="mr-2">
            <button type="button" class="btn btn-block btn-primary">Kembali</button>
          </div>
          </a>
          <a href="/edit_banner">
          <div class="mr-2">
            <button type="button" class="btn btn-block btn-success">Edit</button>
          </div>
          </a>
          <div class="mr-2">
              <button type="button" class="btn btn-block btn-danger">Hapus</button>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
          <img src="itachi.jpg" alt="" style="width:300px;height:200px;">
          </div>
          <div class="col-md-8">
            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid">
              <tbody>
                <tr>
                  <td class="dtr-control sorting_1" tabindex="0">Judul</td>
                  <td>Ini judul</td>
                </tr>
                <tr>
                  <td class="dtr-control sorting_1" tabindex="0">Keterangan</td>
                  <td>ini keterangan</td>
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
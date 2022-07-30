@extends('layouts.main')
@section('container')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Banner</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Tambah data banner</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" placeholder="judul banner">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Keterangan</label>
                <input class="form-control" type="text" placeholder="Keterangan">
              </div>
            </div>
          </div>
          <div>
            <label>Gambar</label>
            <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
          </div>
          <div class="d-flex flex-row justify-content-end">
            <div class="mr-2">
              <button type="button" class="btn btn-block btn-success">Tambah</button>
            </div>
            <div class="mr-2">
              <a href="/banner">
                <button type="button" class="btn btn-block btn-danger">Batal</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>
</div>
@endsection
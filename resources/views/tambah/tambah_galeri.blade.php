@extends('layouts.main')
@section('container')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Gambar</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Tambah data gambar</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Album</label>
                <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="19">17 agustusan</option>
                  <option>upacara</option>
                  <option>kegiatan harian</option>
                </select>
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
              <a href="/galeri">
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
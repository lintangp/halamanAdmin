@extends('layouts.main')
@section('container')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Potensi</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit potensi desa</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan judul">
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan nama penulis">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" id="" name="" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="">
                                <label class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="mr-2">
                            <button type="button" class="btn btn-block btn-success">Tambah</button>
                        </div>
                        <div class="mr-2">
                            <a href="/potensi">
                                <button type="button" class="btn btn-block btn-danger">Batal</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
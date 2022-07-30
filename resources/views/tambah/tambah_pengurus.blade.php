@extends('layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Pengurus</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Tambah data pengurus</h3>
            </div>
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan nama pengurus">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan NIP">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai Menjabat</label>
                        <input type="text" class="form-control" id="" placeholder="tanggal mulai menjabat">
                    </div>
                    <div class="form-group">
                        <label>Pas Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <div class="mr-2">
                            <button type="button" class="btn btn-block btn-success">Tambah</button>
                        </div>
                        <div class="mr-2">
                            <a href="/pengurus">
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
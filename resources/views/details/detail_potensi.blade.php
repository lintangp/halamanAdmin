@extends('layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Potensi</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-row justify-content-end">
                    <a href="/potensi">
                        <div class="mr-2">
                            <button type="button" class="btn btn-block btn-primary">Kembali</button>
                        </div>
                    </a>
                    <a href="/edit_potensi">
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
                <strong>Judul</strong>
                <p class="text-muted">
                    ini judul potensi
                </p>
                <hr>
                <strong>penulis</strong>
                <p class="text-muted">Nama penulis</p>
                <hr>
                <strong>Deskripsi</strong>
                <p class="text-muted">
                    deskripsi
                </p>
                <hr>
                <strong>Tanggal</strong>
                <p class="text-muted">10 Juli 2022</p>
                <hr>
                <strong>Gambar</strong>
                <p>ini gambar</p>
            </div>
        </div>
    </section>
</div>
@endsection
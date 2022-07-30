@extends('layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Produk</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">

                <div class="d-flex flex-row justify-content-end">
                    <a href="/produk">
                        <div class="mr-2">
                            <button type="button" class="btn btn-block btn-primary">Kembali</button>
                        </div>
                    </a>
                    <a href="/edit_produk">
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
                    ini judul produk
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
                <strong>Gambar</strong><br>
                <img src="mutsumi.jpg" alt="">
            </div>
        </div>
    </section>
</div>
@endsection
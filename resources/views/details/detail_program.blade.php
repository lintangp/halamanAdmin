@extends('layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Program</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-row justify-content-end">
                    <a href="/program">
                        <div class="mr-2">
                            <button type="button" class="btn btn-block btn-primary">Kembali</button>
                        </div>
                    </a>
                    <a href="/edit_program">
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
                    ini judul program
                </p>
                <hr>
                <strong>Penyelenggara</strong>
                <p class="text-muted">Nama penyelenggara kegiatan</p>
                <hr>
                <strong>Deskripsi</strong>
                <p class="text-muted">
                    deskripsi kegiatan
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
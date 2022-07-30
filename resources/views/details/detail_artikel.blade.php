@extends('layouts.main')
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Artikel</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-row justify-content-end">
                    <a href="/artikel">
                        <div class="mr-2">
                            <button type="button" class="btn btn-block btn-primary">Kembali</button>
                        </div>
                    </a>
                    <a href="/edit_artikel">
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
                <strong>Penulis</strong>
                <p class="text-muted">
                    ALin
                </p>
                <hr>
                <strong>Judul</strong>
                <p class="text-muted">Ini judul</p>
                <hr>
                <strong>Isi Konten</strong>
                <p class="text-muted">
                    ini konten
                </p>
                <hr>
                <strong>Tanggal</strong>
                <p class="text-muted">10 Juli 2022</p>
            </div>
        </div>
    </section>
</div>
@endsection
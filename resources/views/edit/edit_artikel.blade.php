@extends('layouts.main')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@section('container')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Artikel</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="card card-default">
            <div class="col-md-12 mt-2">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" placeholder="Judul Artikel">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Penulis</label>
                    <input class="form-control" type="text" placeholder="Penulis">
                </div>
            </div>
            <div class="card-tools">
                <div id="summernote"></div>
                <script>
                    $('#summernote').summernote({
                        placeholder: 'Ketik isi artikel di sini',
                        tabsize: 2,
                        height: 120,
                        toolbar: [
                            ['style', ['style']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });
                </script>
            </div>
            <div class="d-flex flex-row justify-content-end mt-2 mb-2">
                <div class="mr-2">
                    <button type="button" class="btn btn-block btn-success">Simpan</button>
                </div>
                <div class="mr-2">
                    <a href="/artikel">
                        <button type="button" class="btn btn-block btn-danger">Batal</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
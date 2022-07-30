@extends('layouts.main')
@section('container')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Artikel</p>
            </div>
            <div class="icon">
              <i class="fas fa-edit"></i>
            </div>
            <a href="/artikel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53</h3>
              <p>Program Desa</p>
            </div>
            <div class="icon">
              <i class="far fa-handshake"></i>
            </div>
            <a href="/program" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p>Potensi desa</p>
            </div>
            <div class="icon">
              <i class="fa fa-universal-access"></i>
            </div>
            <a href="/potensi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>
              <p>Produk Unggulan</p>
            </div>
            <div class="icon">
              <i class="far fa fa-shopping-basket"></i>
            </div>
            <a href="/produk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Album</p>
            </div>
            <div class="icon">
              <i class="far fa-image"></i>
            </div>
            <a href="/album" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p>Galeri</p>
            </div>
            <div class="icon">
              <i class="far fa fa-camera-retro"></i>
            </div>
            <a href="/galeri" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
    </div>
  </section>
</div>
@endsection
@extends('layouts.website-main')
@section('title', 'info sekolah')
@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Info Sekolah</h1>
            </div>

            <div class="section-body">
                <div class="card border-0">
                    <div class="card-header">
                        <span>Setting info sekolah</span>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama-sekolah" class="text-dark font-weight-bold text-uppercase">Nama Sekolah</label>
                                        <input type="text" name="nama-sekolah" id="nama-sekolah" class="form-control text-uppercase" placeholder="ex: smkn 1 jamblang..." value="{{ $info_sekolah->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="no-telp" class="text-dark font-weight-bold text-uppercase">No Telp</label>
                                        <input type="text" name="no-telp" id="no-telp" class="form-control" placeholder="ex: (0231) - 9129312..." value="{{ $info_sekolah->no_telp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat" class="text-dark font-weight-bold text-uppercase">Alamat Sekolah</label>
                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="ex: Jl. Nyi Mas Rarakerta Ds...">{{ $info_sekolah->alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kecamatan" class="text-dark font-weight-bold text-uppercase">Kecamatan</label>
                                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="ex: Jamblang.." value="{{ $info_sekolah->kecamatan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota" class="text-dark font-weight-bold text-uppercase">Kota/Kabupaten</label>
                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="ex: Cirebon" value="{{ $info_sekolah->kota }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('assets/img/'.$info_sekolah->logo) }}" alt="logo" class="img-thumbnail" style="object-fit:'cover';">
                                        </div>
                                        <div class="col-9">
                                            <div class="form-group">
                                                <label for="logo">Logo Sekolah</label>
                                                <input type="file" name="logo" id="logo" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Profile</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="mb-3 row">
                        <label for="Name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Bio" class="col-sm-2 col-form-label">Bio</label>
                        <div class="col-sm-10">
                            <input type="bio" class="form-control" id="bio">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" class="form-control" id="Lokasi"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="website" class="col-sm-2 col-form-label">website</label>
                        <div class="col-sm-10">
                            <input type="webiste" class="form-control" id="webiste">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="tanggal" class="form-control" id="tanggal">
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
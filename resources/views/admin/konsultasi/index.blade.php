@extends('admin._layouts.index')

@push('cssScript')
    @include('admin._layouts.css._css')
@endpush

@push('konsultasi')
    active
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Konsultasi</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a onclick="createForm()" class="">
                            <button class="btn btn-primary btn-rounded btn-sm">
                                <span class="btn-label">
                                    <i class="fa fa-plus"></i>
                                </span>
                                Tambah Data Konsultasi
                            </button>
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="tableJenis" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. Handphone</th>
                                        <th>Status</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </section>
            @include('admin.konsultasi.modal')

@endsection

@push('jsScript')
    @include('admin._layouts.js._js')
    @include('admin.konsultasi.js')
@endpush


@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 d-flex justify-content-between">
                <h1 class="m-0">Form Laporan</h1>
                <a href="{{ route('admin.pelanggar.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-3">
                    <form method="post" action="{{ route('admin.pelanggar.update', [$pelanggar]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{ $pelanggar->id }}" />
                        <h4>Data Pelapor</h4>
                        <hr />
                        <div class="form-group row border-bottom pb-4">
                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="nik" name="nik" value="{{ $pelanggar->nik }}" placeholder="Masukkan NIK">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $pelanggar->nama_lengkap }}" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="email" name="email" value="{{ $pelanggar->email }}" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="no_handphone" class="col-sm-2 col-form-label">No Handphone</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="no_handphone" name="no_handphone" value="{{ $pelanggar->no_handphone }}" placeholder="Masukkan No Handphone">
                            </div>
                        </div>
                        <h4 class="mt-5">Data Pelanggar</h4>
                        <hr />
                        <div class="form-group row border-bottom pb-4">
                            <label for="nik_pelanggar" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="nik_pelanggar" name="nik_pelanggar" value="{{ $pelanggar->nik_pelanggar }}" placeholder="Masukkan NIK">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="nama_lengkap_pelanggar" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="nama_lengkap_pelanggar" name="nama_lengkap_pelanggar" value="{{ $pelanggar->nama_lengkap_pelanggar }}" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="email_pelanggar" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="email_pelanggar" name="email_pelanggar" value="{{ $pelanggar->email_pelanggar }}" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="no_handphone_pelanggar" class="col-sm-2 col-form-label">No Handphone</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="no_handphone_pelanggar" name="no_handphone_pelanggar" value="{{ $pelanggar->no_handphone_pelanggar }}" placeholder="Masukkan No Handphone">
                            </div>
                        </div>

                        <h4 class="mt-5">Data Kendaraan Pelanggar & Berkas Pendukung Lainnya</h4>
                        <hr />
                        <div class="form-group row border-bottom pb-4">
                            <label for="plat_nomor" class="col-sm-2 col-form-label">Plat Nomor</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="plat_nomor" name="plat_nomor" value="{{ $pelanggar->plat_nomor }}" placeholder="Masukkan Plat Nomor">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="bukti_foto" class="col-sm-2 col-form-label">Bukti Foto</label>
                            <div class="col-sm-10">
                                @if ($pelanggar->bukti_foto)
                                <div class="mb-3"><a class="btn btn-sm btn-primary" href="{{ Storage::url('bukti_foto'.$pelanggar->bukti_foto) }}" target="_blank">Lihat Bukti Foto</a></div>
                                @endif

                                <input type="file" name="bukti_foto" />
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="bukti_video" class="col-sm-2 col-form-label">Bukti Video</label>
                            <div class="col-sm-10">
                                @if ($pelanggar->bukti_video)
                                <div class="mb-3"><a class="btn btn-sm btn-primary" href="{{ Storage::url('bukti_video'.$pelanggar->bukti_video) }}" target="_blank">Lihat Bukti Video</a></div>
                                @endif
                                <input type="file" name="bukti_video" />
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option @if ($pelanggar->status == "Pending")selected="selected"@endif value="Pending">Pending</option>
                                    <option @if ($pelanggar->status == "Tilang")selected="selected"@endif value="Tilang">Tilang</option>
                                    <option @if ($pelanggar->status == "Dalam Proses")selected="selected"@endif value="Dalam Proses">Dalam Proses</option>
                                    <option @if ($pelanggar->status == "Selesai")selected="selected"@endif value="Selesai">Selesai</option>
                                    <option @if ($pelanggar->status == "Ditolak")selected="selected"@endif value="Ditolak">Ditolak</option>
                                    <option @if ($pelanggar->status == "Lainnya")selected="selected"@endif value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input text="text" class="form-control" id="keterangan" name="keterangan" value="{{ $pelanggar->keterangan }}" placeholder="Masukkan Keterangan">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection

@section('styles')
<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
</style>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
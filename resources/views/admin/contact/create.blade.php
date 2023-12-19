@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 d-flex justify-content-between">
                <h1 class="m-0">Form Input</h1>
                <a href="{{ route('admin.contact.index') }}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a>
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
                    <form method="post" action="{{ route('admin.contact.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row border-bottom pb-4">
                            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="subjek" class="col-sm-2 col-form-label">Subjek</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="subjek" name="subjek" value="{{ old('subjek') }}" placeholder="Masukkan Subjek">
                            </div>
                        </div>
                        <div class="form-group row border-bottom pb-4">
                            <label for="pesan" class="col-sm-2 col-form-label">Isi Pesan</label>
                            <div class="col-sm-10">
                                <input required text="text" class="form-control" id="pesan" name="pesan" value="{{ old('pesan') }}" placeholder="Masukkan Isi Pesan">
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
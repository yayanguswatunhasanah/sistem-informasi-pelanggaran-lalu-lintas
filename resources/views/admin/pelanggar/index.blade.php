@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 justify-content-between d-flex">
                <h1 class="m-0">Data Pelanggar</h1>
                <a href="{{ route('admin.pelanggar.create') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
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

                <div class="card">
                    <div class="card-body p-0">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIK Pelapor</th>
                                    <th>Nama Lengkap Pelapor</th>
                                    <th>NIK Pelanggar</th>
                                    <th>Nama Lengkap Pelanggar</th>
                                    <th>Plat Nomor</th>
                                    <th>Bukti Foto</th>
                                    <th>Bukti Video</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rekap as $i)
                                <tr>
                                    <td>{{ $i->id }}</td>
                                    <td>{{ $i->nik }}</td>
                                    <td>{{ $i->nama_lengkap }}</td>
                                    <td>{{ $i->nik_pelanggar ?? "-" }}</td>
                                    <td>{{ $i->nama_lengkap_pelanggar ?? "-" }}</td>
                                    <td>{{ $i->plat_nomor }}</td>
                                    <td>@if ($i->bukti_foto) <a href="{{ Storage::url('bukti_foto'.$i->bukti_foto) }}" target="_blank">Lihat Bukti Foto</a> @else Tidak ada @endif</td>
                                    <td>@if ($i->bukti_video) <a href="{{ Storage::url('bukti_video'.$i->bukti_video) }}" target="_blank">Lihat Bukti Video</a> @else Tidak ada @endif</td>
                                    <td>{{ $i->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.pelanggar.edit', [$i]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                        <form onclick="return confirm('Apakah Anda yakin ingin menghapus data ini? Data yang sudah terhapus tidak dapat dikembalikan');" class="d-inline-block" action="{{ route('admin.pelanggar.destroy', [$i]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        {{ $rekap->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
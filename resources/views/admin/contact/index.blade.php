@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 justify-content-between d-flex">
                <h1 class="m-0">Hubungi Kami</h1>
                <a href="{{ route('admin.contact.create') }}" class="btn btn-primary btn-sm"> <i class="fa fa-plus"></i> </a>
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
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Subjek</th>
                                    <th>Isi Pesan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $i)
                                <tr>
                                    <td>{{ $i->id }}</td>
                                    <td>{{ $i->nama_lengkap }}</td>
                                    <td>{{ $i->email }}</td>
                                    <td>{{ $i->subjek ?? "-" }}</td>
                                    <td>{{ $i->pesan ?? "-" }}</td>
                                    <td>
                                        <a href="{{ route('admin.contact.edit', [$i]) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a>
                                        <form onclick="return confirm('Apakah Anda yakin ingin menghapus data ini? Data yang sudah terhapus tidak dapat dikembalikan');" class="d-inline-block" action="{{ route('admin.contact.destroy', [$i]) }}" method="post">
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
                        {{ $contacts->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
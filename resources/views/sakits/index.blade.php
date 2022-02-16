@extends('layouts.app')

@section('title','Taruna Sakit')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Taruna Sakit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Taruna Sakit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                @if(Auth::user()->roles == 'ADMIN')
                    <div class="card-header">
                        <a href="{{ route('sakits.create') }}" class="btn btn-primary" title="Tambah Taruna Sakit"><i
                                class="nav-icon fas fa-plus-circle"></i> </a>
                    </div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Pangkat</th>
                                    <th>No AK</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $row)
                                <tr>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->pangkat }}</td>
                                    <td>{{ $row->no_ak }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td>{{ $row->keterangan }}</td>
                                    @if(Auth::user()->roles == 'ADMIN')
                                    <td>
                                        <a href="{{ route('sakits.edit', $row->id) }}" class="btn btn-success btn-sm" title="Ubah">
                                            <i class="fa fa-edit"></i></a>
                                        <form action="{{ route('sakits.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm "
                                                onclick="return confirm('Apakah anda yakin ?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8">Data tidak ditemukan</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        {!! $data->render() !!}
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- push external js -->

@endsection
@extends('layouts.app')

@section('title','Daftar Kerusakan Inventaris')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Daftar Kerusakan Inventaris</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('inventaris.index') }}">Daftar Kerusakan Inventaris</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div>
                    @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>
                    @endif
                    <form class="w-full" action="{{ route('inventaris.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-2">
                                Nama*
                            </div>
                            <div class="col-sm-5">
                            <input type="text" name="nama" placeholder="Kota / Kabupaten" class="form-control"
                                style="width: 100%;" value="{{old('nama')}} " required>
                            </div></br>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                Lokasi
                            </div>
                            <div class="col-sm-5">
                            <input type="text" name="lokasi" placeholder="Kota / Kabupaten" class="form-control"
                                style="width: 100%;" value="{{old('lokasi')}} " required>
                            </div></br>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                Keterangan
                            </div>
                            <div class="col-sm-5">
                            <input type="text" name="keterangan" class="form-control"
                                style="width: 100%;" value="{{old('keterangan')}} ">
                            </div></br>
                        </div>
                       
                        <div class="row">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3 text-right">
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

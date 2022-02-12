@extends('layouts.app')

@section('title','Kekuatan Apel')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Daftar Kekuatan Apel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('apels.index') }}">Kekuatan Apel</a></li>
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
                        <form class="w-full" action="{{ route('apels.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-2">
                                    Nama Skadron*
                                </div>
                                <div class="col-sm-5">
                                    <select name="nama_skadron" class="form-control form-control-sm" required>
                                        <option value="">- Pilih Nama Skadron</option>
                                        <option value="skadroni">Skadron I</option>
                                        <option value="skadronii">Skadron II</option>
                                        <option value="skadroniii">Skadron III</option>
                                        <option value="skadroniv">Skadron IV</option>
                                        <option value="wingkorps">Wingkorps Taruna</option>
                                    </select>
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    Jumlah*
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="jumlah" class="form-control" style="width: 100%;"
                                        value="{{old('jumlah')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    Kurang
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="kurang" class="form-control" style="width: 100%;"
                                        value="{{old('kurang')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    Hadir
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="hadir" class="form-control" style="width: 100%;"
                                        value="{{old('hadir')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    DD
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="dd" class="form-control" style="width: 100%;"
                                        value="{{old('dd')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    DL
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="dl" class="form-control" style="width: 100%;"
                                    value="{{old('dl')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    RSAU
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="rsau" class="form-control" style="width: 100%;"
                                        value="{{old('rsau')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    RSPAU
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="rspau" class="form-control" style="width: 100%;"
                                        value="{{old('rspau')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    DLL
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="dll" class="form-control" style="width: 100%;"
                                        value="{{old('dll')}} ">
                                </div></br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    Keterangan
                                </div>
                                <div class="col-sm-auto">
                                    <input type="text" name="keterangan" class="form-control" style="width: 100%;"
                                        value="{{old('keterangan')}} ">
                                </div></br>
                            </div> <br>
                            <div class="row">
                                <div class="col-sm-2">
                                    Waktu*
                                </div>
                                <div class="col-sm-auto">
                                    <select name="waktu" class="form-control form-control-sm" required>
                                        <option value="">- Pilih Waktu Apel</option>
                                        <option value="pagi">Apel Pagi</option>
                                        <option value="siang">Apel Siang</option>
                                        <option value="malam">Apel Malam</option>
                                    </select>
                                </div></br>
                            </div>
                            <br>
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

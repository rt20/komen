@extends('layouts.app')

@section('title','Tambah')

@section('content')
@include ('shared.errors')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Agenda</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('schedules.index') }}">Jadwal</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <!-- <form action="{{ asset("/stugas") }}" method="POST"> -->
                <form action="{{ route('schedules.store')}}" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-2">
                                Tanggal Kegiatan*
                            </div>
                            <div class="col-sm-auto">
                                <input id="date" type="date" name="date_start" class="form-control form-control-sm"
                                    value="{{old('date')}} " required>
                            </div>
                            <div class="col-sm-auto">
                                Waktu*
                            </div>
                            <div class="col-sm-auto">
                                <input id="time" type="time" name="time_start" class="form-control form-control-sm"
                                    value="{{old('time')}}" required>
                            </div>
                            WIB
                        </div>
                        <br>
                       


                        <div class="row">
                            <div class="col-sm-2">
                                Kegiatan*
                            </div>
                            <div class="col-sm-5">
                                <input id="agenda" type="text" name="agenda" placeholder="Nama Kegiatan/ Acara"
                                    class="form-control form-control-sm" value="{{old('agenda')}}">
                            </div>
                        </div>
                      


                        <div class="row">
                            <!-- <div id="googleMap" style="width:100%;height:380px;"></div> -->
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                            </div>



                            <div class="col-sm-4">

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" name="refresh" id="bersih" class="btn btn-info">Refresh</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

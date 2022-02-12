@extends('layouts.app')

@section('title','Jadwal Kegiatan')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @include ('flash::message')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Jadwal Kegiatan</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Jadwal</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="row input-daterange">
                    <div class="col-sm-2">
                        <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date"
                            readonly />
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date"
                            readonly />
                    </div>
                    <div class="col-sm-4">
                        <button type="button" name="filter" id="filter" class="btn btn-primary">Filter</button>
                        <button type="button" name="refresh" id="refresh" class="btn btn-info">Refresh</button>
                        <a href="{{ route('schedules.create') }}" class="btn btn-success"
                            title="Tambah Jadwal Kegiatan"><i class="nav-icon fas fa-plus-circle"></i> </a>
                    </div>
                </div>
            </div>

            <div class="card-body " style="overflow-x:auto;">
                <table id="schedule" class="table table-striped table-bordered table-sm-auto"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Waktu</th>
                            <th>Kegiatan</th>
                        </tr>
                    </thead>

                </table>

            </div>

            <!-- </div> -->



        </div>

        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

@extends('layouts.app')

@section('title','Edit Taruna Sakit')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Taruna Sakit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('sakits.index') }}">Taruna Sakit</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <form class="w-full" action="{{ route('sakits.update', $sakit->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        {{ method_field("PATCH") }}
                        <div class="row">
                            <div class="col-sm-2">
                                Nama Taruna*
                            </div>
                            <div class="col-sm-5">

                            <select name="user_id" 
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                                <option value="">- Pilih Nama Taruna</option>
                                    @foreach($user ?? '' as $user)
                                    <option value="{{ $user->id }}" {{ $sakit->user_id == $user->id ? 'selected' : null }}>
                                        {{ $user->name }}
                                    </option>
                                    @endforeach
                                </select>

                            </div><br>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-2">
                                Status*
                            </div>
                            <div class="col-sm-5">
                            <input type="text" name="status" class="form-control"
                                style="width: 100%;" value="{{old('status')?? $sakit->status}} " required>
                            </div><br>
                        </div></br>
                        <div class="row">
                            <div class="col-sm-2">
                                Keterangan
                            </div>
                            <div class="col-sm-5">
                            <input type="text" name="keterangan" class="form-control"
                                style="width: 100%;" value="{{old('keterangan')?? $sakit->keterangan}} " required>
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

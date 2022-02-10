@extends('layouts.app')

@section('title','Pegawai')

@section('content')   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Pegawai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('users.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    + Create User
                </a>
            </div>
            <div class="bg-white">
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="border px-6 py-4">No</th>
                        <th class="border px-6 py-4">Nama</th>
                        <th class="border px-6 py-4">No AK</th>
                        <th class="border px-6 py-4">Kelas</th>
                        <th class="border px-6 py-4">Email</th>
                        <th class="border px-6 py-4">Roles</th>
                        <th class="border px-6 py-4">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($user as $item)
                            <tr>
                                <td class="border px-6 py-4">{{ ($user->currentPage()-1) * $user->perPage()+$loop->index+1 }}</td>
                                <td class="border px-6 py-4 ">{{ $item->name }}</td>
                                <td class="border px-6 py-4">{{ $item->no_ak }}</td>
                                <td class="border px-6 py-4">{{ $item->kelas }}</td>
                                <td class="border px-6 py-4">{{ $item->email }}</td>
                                <td class="border px-6 py-4">{{ $item->roles }}</td>
                                <td class="border px-6 py- text-center">
                                    <a href="{{ route('users.edit', $item->id) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('users.destroy', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger btn-sm " onclick="return confirm('Apakah anda yakin ?')">
                                <i class="fa fa-trash"></i>
                            </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                               <td colspan="6" class="border text-center p-5">
                                   Data Tidak Ditemukan
                               </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-5">
                {{ $user->links() }}
            </div>
        </div>
    



      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
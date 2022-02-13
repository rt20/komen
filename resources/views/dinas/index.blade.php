@extends('layouts.app')

@section('title','Taruna Dinas')

@section('content')   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Taruna Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Taruna Dinas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card card-primary card-outline">
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-sm-2">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Skadron I</a>
                  <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Skadron II</a>
                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Skadron III</a>
                  <a class="nav-link" id="vert-tabs-skadroniv-tab" data-toggle="pill" href="#vert-tabs-skadroniv" role="tab" aria-controls="vert-tabs-skadroniv" aria-selected="false">Skadron IV</a>
                  <div class="card-header">
                        <a href="{{ route('dinas.create') }}" class="btn btn-primary" title="Tambah Taruna Dinas"><i
                                class="nav-icon fas fa-plus-circle"></i> </a>
                    </div>
                </div>
              </div>
              <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                  <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                  <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Pangkat</th>
                      <th>No AK</th>
                      <th>Dinas</th>
                      <th>Kelas</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($skadron1 as $row)
                    <tr>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->pangkat }}</td>
                      <td>{{ $row->no_ak }}</td>
                      <td>{{ $row->dinas }}</td>
                      <td>{{ $row->kelas }}</td>           
                        <td>                               
                                <form action="{{ route('dinas.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm "
                                        onclick="return confirm('Apakah anda yakin ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data tidak ditemukan</td>
                        </tr>
                        @endforelse
                    <tr>
                   
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                  <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Nama</th>
                      <th>Pangkat</th>
                      <th>No AK</th>
                      <th>Dinas</th>
                      <th>Kelas</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($skadron2 as $row)
                    <tr>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->pangkat }}</td>
                      <td>{{ $row->no_ak }}</td>
                      <td>{{ $row->dinas }}</td>
                      <td>{{ $row->kelas }}</td>           
                        <td>                               
                                <form action="{{ route('dinas.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm "
                                        onclick="return confirm('Apakah anda yakin ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data tidak ditemukan</td>
                        </tr>
                        @endforelse
                    <tr>
                  
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                  
                  <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                  <!-- <div class="row"> -->
          <!-- <div class="col-13"> -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Nama</th>
                      <th>Pangkat</th>
                      <th>No AK</th>
                      <th>Dinas</th>
                      <th>Kelas</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($skadron3 as $row)
                    <tr>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->pangkat }}</td>
                      <td>{{ $row->no_ak }}</td>
                      <td>{{ $row->dinas }}</td>
                      <td>{{ $row->kelas }}</td>           
                        <td>                               
                                <form action="{{ route('dinas.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm "
                                        onclick="return confirm('Apakah anda yakin ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data tidak ditemukan</td>
                        </tr>
                        @endforelse
                    <tr>
                   
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          
            <!-- /.card -->
          <!-- </div> -->
        <!-- </div> -->
                  </div>
                  <div class="tab-pane fade" id="vert-tabs-skadroniv" role="tabpanel" aria-labelledby="vert-tabs-skadroniv">
                  <div class="card">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 350px;">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th>Nama</th>
                      <th>Pangkat</th>
                      <th>No AK</th>
                      <th>Dinas</th>
                      <th>Kelas</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($skadron4 as $row)
                    <tr>
                      <td>{{ $row->name }}</td>
                      <td>{{ $row->pangkat }}</td>
                      <td>{{ $row->no_ak }}</td>
                      <td>{{ $row->dinas }}</td>
                      <td>{{ $row->kelas }}</td>           
                        <td>                               
                                <form action="{{ route('dinas.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm "
                                        onclick="return confirm('Apakah anda yakin ?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">Data tidak ditemukan</td>
                        </tr>
                        @endforelse
                    <tr>
                 
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- /.card -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <!-- push external js -->
@endsection
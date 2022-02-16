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
            <h1>Kekuatan Apel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Apel</li>
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
                  <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Apel Pagi</a>
                  <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Apel Siang</a>
                  <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Apel Malam</a>
                  @if(Auth::user()->roles == 'ADMIN')
                  <div class="card-header">
                        <a href="{{ route('apels.create') }}" class="btn btn-primary" title="Tambah Laporan Kekuatan Apel"><i
                                class="nav-icon fas fa-plus-circle"></i> </a>
                    </div>
                    @endif
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
                      <th>Jumlah</th>
                      <th>Kurang</th>
                      <th>Hadir</th>
                      <th>DD</th>
                      <th>DL</th>
                      <th>RSAU</th>
                      <th>RSPAU</th>
                      <th>DLL</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($pagi1 as $row)
                    <tr>
                    <td>Skadron I</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron I</td>
                        </tr>
                        @endforelse
                        @forelse($pagi2 as $row)
                    <tr>
                    <td>Skadron II</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>    
                      @if(Auth::user()->roles == 'ADMIN')                
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron II</td>
                        </tr>
                        @endforelse
                        @forelse($pagi3 as $row)
                    <tr>
                    <td>Skadron III</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>   
                      @if(Auth::user()->roles == 'ADMIN')                 
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron III</td>
                        </tr>
                        @endforelse
                        @forelse($pagi4 as $row)
                    <tr>
                    <td>Skadron IV</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron IV</td>
                        </tr>
                        @endforelse
                        @forelse($pagi5 as $row)
                    <tr>
                    <td>Wingkorps Taruna</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Wingkorps Taruna</td>
                        </tr>
                        @endforelse
                   
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
                      <th>Jumlah</th>
                      <th>Kurang</th>
                      <th>Hadir</th>
                      <th>DD</th>
                      <th>DL</th>
                      <th>RSAU</th>
                      <th>RSPAU</th>
                      <th>DLL</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($siang1 as $row)
                    <tr>
                    <td>Skadron I</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron I</td>
                        </tr>
                        @endforelse
                        @forelse($siang2 as $row)
                    <tr>
                    <td>Skadron II</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron II</td>
                        </tr>
                        @endforelse
                        @forelse($siang3 as $row)
                    <tr>
                    <td>Skadron III</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>   
                      @if(Auth::user()->roles == 'ADMIN')                 
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron III</td>
                        </tr>
                        @endforelse
                        @forelse($siang4 as $row)
                    <tr>
                    <td>Skadron IV</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron IV</td>
                        </tr>
                        @endforelse
                        @forelse($siang5 as $row)
                    <tr>
                    <td>Wingkorps Taruna</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Wingkorps Taruna</td>
                        </tr>
                        @endforelse
                   
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
                      <th>Jumlah</th>
                      <th>Kurang</th>
                      <th>Hadir</th>
                      <th>DD</th>
                      <th>DL</th>
                      <th>RSAU</th>
                      <th>RSPAU</th>
                      <th>DLL</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  @forelse($malam1 as $row)
                    <tr>
                    <td>Skadron I</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>   
                      @if(Auth::user()->roles == 'ADMIN')                 
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron I</td>
                        </tr>
                        @endforelse
                        @forelse($malam2 as $row)
                    <tr>
                    <td>Skadron II</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>   
                      @if(Auth::user()->roles == 'ADMIN')                 
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron II</td>
                        </tr>
                        @endforelse
                        @forelse($malam3 as $row)
                    <tr>
                    <td>Skadron III</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>   
                      @if(Auth::user()->roles == 'ADMIN')                 
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron III</td>
                        </tr>
                        @endforelse
                        @forelse($malam4 as $row)
                    <tr>
                    <td>Skadron IV</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>  
                      @if(Auth::user()->roles == 'ADMIN')                  
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Skadron IV</td>
                        </tr>
                        @endforelse
                        @forelse($malam5 as $row)
                    <tr>
                    <td>Wingkorps Taruna</td>
                      <td>{{ $row->jumlah }}</td>
                      <td>{{ $row->kurang }}</td>
                      <td>{{ $row->hadir }}</td>
                      <td>{{ $row->dd }}</td>
                      <td>{{ $row->dl }}</td>
                      <td>{{ $row->rsau }}</td>
                      <td>{{ $row->rspau }}</td>
                      <td>{{ $row->dll }}</td>
                      <td>{{ $row->keterangan }}</td>   
                      @if(Auth::user()->roles == 'ADMIN')                 
                        <td>                               
                                <form action="{{ route('apels.destroy', $row->id)}}" method="post" class="d-inline" title="Hapus">
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
                            <td colspan="8">Wingkorps Taruna</td>
                        </tr>
                        @endforelse
                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <!-- </div> -->
        <!-- </div> -->
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
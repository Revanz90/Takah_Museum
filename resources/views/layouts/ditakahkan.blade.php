@extends('main')

@section('title', 'Ditakahkan')
@section('title2', 'Ditakahkan')
@section('judul', 'Ditakahkan')

@section('content')
<section class="content">
    <div id="xtest" style="font-size: 14px"></div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    <div class="card">
        <!-- Navbar Content -->
        <div class="card-header">
            <h4 class="card-title font-weight-bold">DITAKAHKAN KEPADA KAMUS</h4>
            <div class="card-tools">
                <input type="hidden" name="xnull" id="statusxid[2]" value="2">
                {{-- <div class="project-actions text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            <i class="fas fa-plus"></i>
                            TAMBAH
                        </button>
                    </div> --}}
            </div>
        </div>
        <!-- /Navbar Content -->

        <!-- Page Content -->
        <div class="card-body">
            <table id="examplePolos" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kepada Yth</th>
                        <th>Naskah / Catatan</th>
                        <th>No. Naskah</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    @if($data->ditakahkan_at != null)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>Kepala Museum (KAMUS)</td>
                        <td>Dari : {{$data->dari}},
                            Nomor Surat : {{$data->no_surat}},
                            Tanggal : {{$data->created_at}},
                            Perihal : {{$data->perihal}}</td>
                        <td>N - {{$data->id}}</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-info btn-xs" href="{{ route('action_disposisi') }}">
                                <i class="fas fa-folder">
                                </i>
                                Lihat Disposisi
                            </a>
                        <td class="project-state text-center">
                        <h6><span class="badge {{$data->status_surat_masuk}}">{{Str::upper($data->status)}}</span></h6>
                        </td>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
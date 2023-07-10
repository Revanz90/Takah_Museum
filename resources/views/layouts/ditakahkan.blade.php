@extends('main')

@section('title', 'Tata Naskah')
@section('title2', 'Tata Naskah')
@section('judul', 'Tata Naskah')

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
                        <!-- <code>{{ $kepada }}</code> -->
                        @foreach ($datas as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $kepada[0]->role_label }}</td>
                                <td>Dari : {{ $data->dari }},
                                    Nomor Surat : {{ $data->no_surat }},
                                    Tanggal : {{ $data->created_at }},
                                    Perihal : {{ $data->perihal }}</td>
                                <td>N - {{ $data->id }}</td>
                                <td class="project-actions text-center">
                                    @if ($data->disposisi_at != null)
                                        <form method="POST" action="{{ route('detail_disposisi', ['id' => $data->id]) }}">
                                            @csrf
                                            <button class="btn btn-primary btn-xs w-100">Lihat Disposisi</button>
                                        </form>
                                    @endif
                                <td class="project-state text-center">
                                    <div class="btn btn-xs {{ $data->status_surat_masuk }}">
                                        {{ Str::upper($data->status) }}
                                    </div>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@extends('main')

@section('title', 'Disposisi')
@section('title2', 'Disposisi')
@section('judul', 'Disposisi')

@section('content')
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
        <h4 class="card-title font-weight-bold">DATA DISPOSISI</h4>
        <div class="card-tools">
            <input type="hidden" name="xnull" id="statusxid[2]" value="2">
            <div class="project-actions text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fas fa-plus"></i>
                    Disposisi
                </button>
            </div>
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
                    @foreach ($datasm as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>Kepala Museum (KAMUS)</td>
                            <td>Dari : {{ $data->dari }},
                                Nomor Surat : {{ $data->no_surat }},
                                Tanggal : {{ $data->created_at }},
                                Perihal : {{ $data->perihal }}</td>
                            <td>N - {{ $data->id }}</td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-xs w-100" href=" {{ route('detail_disposisi') }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Disposisi
                                </a>
                            <td class="project-state text-center">
                                <div class="btn btn-xs {{ $data->status_surat_masuk }}">
                                    {{ Str::upper($data->status) }}</div>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Disposisi Kamus</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="content">
                    <div class="card">
                        <!-- Navbar Content -->
                        <div class="card-header ">
                            <h4 class="card-title font-weight-bold">TAMBAH DISPOSISI</h4>
                            <div class="card-tools"></div>
                        </div>
                        <!-- /Navbar Content -->
                        <!-- Page Content -->
                        <form action="" enctype="multipart/form-data" method="POST" class="form-horizontal" id="simpandisposisi">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group row align-items-center">
                                                <label for="" class="col-sm-2 col-form-label font-weight-normal">Pilih
                                                    Surat</label>
                                                <!-- Example split danger button -->
                                                <select class="form-select border" style="border-color: #ced4da !important;" aria-label="Default select example" name="suratmasuk_id">
                                                    <option selected>Pilih Surat Masuk</option>
                                                    @foreach ($datasm as $data)
                                                    @if($data->disposisi_at == null)
                                                    <option value="{{ $data->id }}">{{ $data->dari }}
                                                    </option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group row">
                                                <div class="input-group">
                                                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Pesan
                                                        Disposisi</label>
                                                    <textarea class="form-control" aria-label="With textarea" placeholder="Masukan pesan disposisi disini ..." name="pesan_disposisi"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row" name="status">
                                                <label class="col-sm-2 col-form-label font-weight-normal">Status</label>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" name="status" value="diterima"> Diterima
                                                    <input type="radio" name="status" value="ditolak"> Ditolak
                                                </div>
                                            </div>

                                            <div class="form-group row align-items-center">
                                                <label for="" class="col-sm-2 col-form-label font-weight-normal">Teruskan
                                                    Ke</label>
                                                <!-- Example split danger button -->
                                                <div>
                                                    <select class="form-select border" style="border-color: #ced4da !important;" aria-label="Default select example" name="tembusan_ke">
                                                        <option selected>Pilih Seksi</option>
                                                        @foreach ($datadv as $data)
                                                        <option value="{{ $data->id }}">{{ $data->divisi }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /Page Content -->
                    </div>
                </section>
            </div>
            <!-- /Main Content -->

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <div class="btn-savechange-reset">
                    <button type="reset" class="btn btn-sm btn-warning" style="margin-right: 5px">Reset</button>
                    <button type="submit" form="simpandisposisi" value="Submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal -->
@endsection
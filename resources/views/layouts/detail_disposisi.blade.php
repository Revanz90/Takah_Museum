@extends('main')

@section('title', 'Detail Disposisi')
@section('title2', 'Detail Disposisi')
@section('judul', 'Detail Disposisi')

@section('content')
    <div id="xtest" style="font-size: 14px"></div>
    <div class="callout callout-warning">
        <i class="fas fa-info-circle"></i>
        Halaman untuk melihat detail disposisi
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">DATA DETAIL DISPOSISI</h4>
            <div class="card-tools">
                <input type="hidden" name="statusM" id="statusMid[2]" value="2">
            </div>
        </div>
        {{-- @foreach ($dataview as $data) --}}
        <div class="card-body">
            <form action="" class="form-horizontal">

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Asal Surat</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="{{ $data->suratmasuk_id }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Pesan Disposisi</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="{{ $data->pesan_disposisi }}"
                            readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Status</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="{{ $data->status }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Diteruskan Kpd</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="{{ $data->author_id }}" readonly>
                    </div>
                </div>
            </form>
        </div>
        {{-- @endforeach --}}
    </div>
@endsection

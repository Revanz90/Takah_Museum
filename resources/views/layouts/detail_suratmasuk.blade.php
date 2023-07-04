@extends('main')

@section('title', 'Detail Surat Masuk')
@section('title2', 'Detail Surat Masuk')
@section('judul', 'Detail Surat Masuk')

@section('content')
    <div id="xtest" style="font-size: 14px"></div>
    <div class="callout callout-warning">
        <i class="fas fa-info-circle"></i>
        Halaman untuk melihat detail surat masuk
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title font-weight-bold">DATA SURAT MASUK</h4>
            <div class="card-tools">
                <input type="hidden" name="statusM" id="statusMid[2]" value="2">
            </div>
        </div>
        <div class="card-body">
            <form action="" class="form-horizontal">

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="2023-02-17 14:01:38" readonly>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Dari</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control"
                            value="Institud Teknologi Dirgantara Adisutjipto" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">No. Surat</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="B/49-08/06/04/IF/ITDA" readonly>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Perihal</label>
                    <div class="col-sm-10">
                        <input type="text" name="" class="form-control" value="Surat izin penilitian" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="" class="form-control text-bold" readonly>Melakukan penelitian selama 2 bulan, Februari-Maret</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label font-weight-normal">Surat Masuk File</label>
                    <div class="card-footer bg-white col-sm-10">
                        <p><a href="https://ofes.itda.ac.id/upload/sempro/proposal_ProposalTA-230328-88c647a152.pdf"
                                class="mailbox-attachment-name"><u>proposal_ProposalTA-230328-88c647a152.pdf</u></a></p>
                    </div>
                </div>
            @endsection

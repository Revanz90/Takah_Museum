@extends('main')

@section('title', 'Disposisi')
@section('title2', 'Disposisi')
@section('judul', 'Disposisi')

@section('content')
    <div id="xtest" style="font-size: 14px"></div>
    <div class="callout callout-warning">
        <i class="fas fa-info-circle"></i>
        Halaman Disposisi
    </div>

    <div class="card">
        <!-- Navbar Content -->
        <div class="card-header">
            <h4 class="card-title font-weight-bold">DATA PENGAJUAN PROPOSAL</h4>
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
                    <tr>
                        <td>1</td>
                        <td>Kepala Museum (KAMUS)</td>
                        <td>Surat izin berkunjung</td>
                        <td>N - 13</td>
                        <td class="project-actions text-center">
                            <a class="btn btn-info btn-xs"
                                href="https://ofes.itda.ac.id/Mahasiswa/Proposal/viewDetailPengajuan/38">
                                <i class="fas fa-folder">
                                </i>
                                Disposisi
                            </a>
                        <td class="project-state text-center">
                            <span class="badge badge-success">Diterima</span>
                        </td>
                        </td>
                    </tr>
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
                            <form action="https://ofes.itda.ac.id/Mahasiswa/Proposal/addPengajuan"
                                enctype="multipart/form-data" method="POST" class="form-horizontal">
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <div class="input-group">
                                                        <label for=""
                                                            class="col-sm-2 col-form-label font-weight-normal">Pesan
                                                            Disposisi</label>
                                                        <textarea class="form-control" aria-label="With textarea" placeholder="Masukan pesan disposisi disini ..."></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for=""
                                                        class="col-sm-2 col-form-label font-weight-normal">Status</label>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Diterima</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Ditolak</label>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for=""
                                                        class="col-sm-2 col-form-label font-weight-normal">Teruskan
                                                        Ke</label>
                                                    <!-- Example split danger button -->
                                                    <div>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option selected>Pilih Seksi</option>
                                                            <option value="1">TAUD</option>
                                                            <option value="2">BIMLUH</option>
                                                            <option value="3">KOLEKSI</option>
                                                            <option value="4">KONSERVASI</option>
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
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
@endsection

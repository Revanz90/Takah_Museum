@extends('main')

@section('title', 'Ditakahkan')
@section('title2', 'Ditakahkan')
@section('judul', 'Ditakahkan')

@section('content')
    <section class="content">
        <div id="xtest" style="font-size: 14px"></div>
        <div class="callout callout-warning">
            <i class="fas fa-info-circle"></i>
            Halaman Ditakahkan
        </div>

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
                        <tr>
                            <td>1</td>
                            <td>Kepala Museum (KAMUS)</td>
                            <td>Surat dari rektor ITDA Dekan Fakultas Teknologi Industri nomor : B/49-08/06/04/IF/ITDA
                                Tanggal
                                16-01-2023 Tentang permohonan izin penelitian untuk skripsi</td>
                            <td>N - 13</td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-xs" href="{{ route('action_disposisi') }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Lihat Disposisi
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
    </section>
@endsection

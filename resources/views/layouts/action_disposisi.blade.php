@extends('main')

@section('title', 'Action Disposisi')
@section('title2', 'Action Disposisi')
@section('judul', 'Action Disposisi')

@section('content')
    <div class="card">
        <!-- Navbar Content -->
        <div class="card-header">
            <h4 class="card-title font-weight-bold">DISPOSISI KAMUS</h4>
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
                        <th>Dari Kamus</th>
                        <th>Naskah / Catatan</th>
                        <th>No. Naskah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kepala Museum (KAMUS)</td>
                        <td>Surat diterima silahkan berikan izin kepada yang bersangkutan untuk melakukan penelitian di
                            museum sesuai dengan bidang yang dipilih</td>
                        <td>N - 13</td>
                        <td class="project-state text-center">
                            <span class="badge badge-success">Diterima</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

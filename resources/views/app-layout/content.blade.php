@section('judul', 'Dashboard')

<section class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 text-center">
                    <br>
                    <h5><strong>TATA NASKAH MUSEUM PUSAT TNI AU DIRGANTARA MANDALA</strong></h5>
                    <h6>Sistem pengarsipan Surat Masuk</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $countsuratmasuk }}</h3>
                <p>Surat Masuk</p>
            </div>
            <div class="icon">
                <i class="ion ion-email"></i>
            </div>
            <a href="{{ route('suratmasuk') }}" class="small-box-footer">Lihat Info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $countditakahkan }}</h3>
                <p>Surat Ditakahkan</p>
            </div>
            <div class="icon">
                <i class=" ion ion-email"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $countsuratditerima }}</h3>
                <p>Surat Diterima</p>
            </div>
            <div class="icon">
                <i class="ion ion-email"></i>
            </div>
            <a href="{{ route('suratkeluar') }}" class="small-box-footer">Lihat Info <i
                    class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $countsuratditolak }}</h3>
                <p>Surat Ditolak</p>
            </div>
            <div class="icon">
                <i class="ion ion ion-email"></i>
            </div>
            <a href="#" class="small-box-footer">Lihat Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<section class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <br>
                    <h5><strong>Selamat datang, {{ auth()->user()->name }}</strong></h5>
                    <p>
                        Takah Museum merupakan aplikasi yang dapat digunakan untuk mengelola arsip dan dokumen
                        seperti surat masuk, surat keluar, arsip pegawa dan arsip organisasi. Menu yang di tampilkan
                        pada sistem ini hanya berfokus pada menu surat masuk atau surat kunjungan yang biasa
                        diberikan dari instansi, kelompok maupun individu yang ingin melakukan kunjungan ke Museum Pusat
                        TNI AU Dirgantara Mandala.
                        Sesuai dengan prosedur yang berlaku, surat masuk ditambahkan kemudian akan diberikan disposisi
                        oleh KAMUS (Kepala Museum), jika disposisi dari kamus di nyatakan diterima, maka pada menu
                        ditakahkan statusnya akan berubah menjadi hijau (Diterima).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

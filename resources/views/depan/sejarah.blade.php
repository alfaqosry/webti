<x-templates.depan>
    <x-slot name="appname">Sejarah Teknik Informatika Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">History of Teknik Informatika</x-slot>

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="fw-bold text-primary text-uppercase">Sejarah</h1>
                    </div>
                    <p class="mb-4" style="text-align: justify;">
                        Universitas Pahlawan Tuanku Tambusai (UP) yang berlokasi di Bangkinang, ibu kota Kabupaten Kampar Provinsi Riau, merupakan institusi pendidikan tinggi yang berada di bawah naungan Yayasan Pahlawan Tuanku Tambusai (YPTT) Riau. Kendatipun penyelenggaraan UP baru di mulai pada tahun 2017, sesuai SK Menteri Riset Teknologi dan Pendidikan Tinggi RI No. 97/KPT/I/2017 tertanggal  20  Januari, pada dasarnya UP merupakan penggabungan dua sekolah tinggi yaitu: Sekolah Tinggi Ilmu Kesehatan (STIKes) Tuanku Tambusai (berdiri pada 2006) dan Sekolah Tinggi Keguruan dan Ilmu Pendidikan (STKIP) Pahlawan Tuanku  Tambusai  (berdiri pada 2012).
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                        Sesuai dengan arah pengembangan YPTT untuk mendirikan sebuah universitas di Kabupaten Kampar, maka sejak awal tahun 2015, usulan pendirian universitas tersebut telah diajukan secara online ke DIKTI dengan Menggabungkan STIKes Tuanku Tambusai dengan 7 (tujuh) program studinya dan STKIP Pahlawan Tuanku Tambusai yang memiliki 4 (empat) program studi. Bersamaan dengan itu, diusulkan 6 (enam) program studi baru UP untuk jenjang sarjana (S1) yaitu: Teknik Informatika, Teknik Sipil, Teknik Industri, Pendidikan Jasmani, Hukum dan Peternakan. Terkecuali Program studi Peternakan, 5 (lima) program studi mendapatkan izin yang berbarengan dengan izin pendirian UP (Universitas Pahlawan). Pada saat ini, UP beroperasi dengan menyelenggarakan 1 (satu) Program Pasca Sarjana dan 7 (tujuh) Fakultas. Fakultas tersebut adalah Fakultas Ilmu Kesehatan (FIK), Fakultas Keguruan & Ilmu Pendidikan (FKIP), Fakultas Teknik (FT), Fakultas  Hukum (FH), Fakultas Ekonomi & Bisnis (FIB), Fakultas Ilmu Hayati (FIH), dan Fakultas Agama Islam (FAI).
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                        Fakultas Teknik UP (FTUP) menempati posisi strategis di institusi dimana harus tanggap akan kebutuhan masyarakat terutama dunia usaha/dunia industri terhadap perkembangan dan kemajuan teknologi. Di tambah pula dengan kebutuhan akan jenjang pendidikan terampil setingkat sarjana di bidang teknik yang tidak tersedia di Bangkinang sementara pendidikan kejuruan setingkat SMA (SMK) dan diploma sudah ada di Bangkinang. Oleh karena itu, kehadiran Program Studi (PS) Teknik Informatika dengan jenjang program sarjana menjadi solusi bagi para calon mahasiswa yang hendak mengambil gelar sarjana di bidang IT.
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                        Resmi beroperasi menyelenggarakan pendidikan pada tahun 2017, PS Teknik Informatika UP telah melaksanakan akreditasi pada tahun 2019. Akreditasi saat itu diselenggarakan oleh BAN PT dengan hasil yang baik (C) sesuai dengan SK Akreditasi nomor 2897/SK/BAN-PT/Akred/S/VIII/2019.
                    </p>

                    <p class="mb-4" style="text-align: justify;">
                         -
                    </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="{{ asset('depan/img/AKPER008.jpeg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="fw-bold text-primary text-uppercase">Team Leaders</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' . $rektor->image) }}" alt="">
                            {{-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ $rektor->nama }}</h4>
                            <p class="text-uppercase m-0">Rektor UP</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' . $dekan->image) }}" alt="">
                            {{-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ $dekan->nama }}</h4>
                            <p class="text-uppercase m-0">Dekan Sains & Teknologi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="min-height: 30em; max-height: 30em;" src="{{ asset('storage/' .  $kaprodi->image) }}" alt="">
                            {{-- <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{ $kaprodi->nama }}</h4>
                            <p class="text-uppercase m-0">Ketua Program Studi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

</x-templates.depan>
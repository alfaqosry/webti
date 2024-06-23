<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0  rounded-pill  ">
   
    <a href="{{ route('index') }}" class="navbar-brand p-0">
        <h1 class="m-0">
            <!-- Digital Bisnis -->
            <img src="{{ asset('depan/img/logo-qe-hd.png') }}" alt="Logo_QE" style="width: 150px; height: 52px;">
        </h1>
    </a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
                    <a href="{{ route('visi-misi') }}" class="dropdown-item">Visi & Misi</a>
                    <a href="{{ route('kemahasiswaan') }}" class="dropdown-item">Kemahasiswaan</a>
                    <a href="{{ route('struktur-organisasi') }}" class="dropdown-item">Struktur Organisasi</a>
                    <a href="{{ route('sambutan') }}" class="dropdown-item">Sambutan Ketua Prodi Teknik Informatika</a>
                    <a href="{{ route('dosen-staff') }}" class="dropdown-item">Staff & Dosen Pengajar</a>
                    <a href="{{ route('pendekatan-perkuliahan') }}" class="dropdown-item">Pendekatan Perkuliahan</a>

                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pendidikan</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('capaian-pembelajaran') }}" class="dropdown-item">Capaian Pembelajaran</a>
                    <a href="{{ route('kurikulum') }}" class="dropdown-item">Kurikulum Program Studi</a>
                    <a href="{{ route('dokumen-rps') }}" class="dropdown-item">RPS Mata Kuliah</a>
                    <a href="{{ route('kalender-akademik') }}" class="dropdown-item">Kalender Akademik</a>
                    <a href="{{ route('jadwal-kuliah') }}" class="dropdown-item">Jadwal Kuliah</a>
                    <!-- <a href="#" class="dropdown-item">Program MBKM</a> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                {{-- <a href="https://universitaspahlawan.ac.id/tentang-universitas-pahlawan-tuanku-tambusai/11697-2/"
                    target="_blank" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Fasilitas</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('fasilitas', 'Laboratoium Komputer') }}" class="dropdown-item">Laboratorium
                        Komputer</a>
                    <a href="{{ route('fasilitas', 'Ruang Kelas') }}" class="dropdown-item">Ruang Kelas</a>
                    <a href="{{ route('fasilitas', 'Perpustakaan') }}" class="dropdown-item">Perpustakaan</a>
                    <a href="{{ route('fasilitas', 'Laboratorium Bahasa') }}" class="dropdown-item">Laboratorium
                        Bahasa</a>
                    <a href="{{ route('fasilitas', 'Taman Digital') }}" class="dropdown-item">Taman Digital</a>
                    <a href="{{ route('fasilitas', 'Sarana Olahraga') }}" class="dropdown-item">Sarana Olahraga</a>
                </div> --}}
                <a href="{{route('fasilitasdepan')}}" class="nav-link">Fasilitas</a>

            </div>
            <a href="{{ route('ebook.index') }}" class="nav-item nav-link ">E-Book</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('berita-depan') }}" class="dropdown-item">Berita</a>
                    <a href="{{ route('pendaftaran') }}" class="dropdown-item">Pendaftaran</a>
                    <a href="{{ route('prospek-karir') }}" class="dropdown-item">Prospek Karir</a>
                    <a href="{{ route('akreditasi') }}" class="dropdown-item">Akreditasi</a>
                </div>
            </div>
            <div class="nav-item dropdown mr-4">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kerjasama</a>
                <div class="dropdown-menu m-0">
                    <a href="https://iro.universitaspahlawan.ac.id/interactive-maps/" target="_blank"
                        class="dropdown-item">Kerjasama Universitas Negeri</a>
                    <!-- <a href="#" class="dropdown-item">Kerjasama Industri</a> -->
                </div>
            </div>


        </div>

    </div>
    @if(isset(auth()->user()->name) )

    @if (Auth::user()->image == null)

    <div class="dropdown show d-none d-sm-block">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('belakang/assets/img/profile.jpg' ) }}" class="rounded-circle "
                style="width: 50px;margin-right: 10px;margin-left: 10px" alt="Avatar" />
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @if(auth()->user()->role == "admin")
            <a class="dropdown-item" href="{{route('home')}}">Dashboard Admin</a>
            
            @endif
            <a class="dropdown-item" href="#">Log Out</a>

        </div>
    </div>



    @else

    <img src="{{ asset('storage/'. Auth::user()->image ) }}" class="rounded-circle "
        style="width: 50px;margin-right: 10px;margin-left: 10px" alt="Avatar" />
    @endif


    {{-- <div class="text-dark ms-auto py-0 ml-2 d-none d-sm-block"> {{auth()->user()->name}} </div> --}}
    @else
    <div class="btn-group ml-4" style="margin-left: 10px" role=" group" aria-label="Basic example">
        
        <a href="{{route('auth.login')}}" class="btn btn-warning">Login</a>

    </div>

    @endif

</nav>
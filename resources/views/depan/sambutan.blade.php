<x-templates.depan>
    <x-slot name="appname">Kata Sambutan Ketua Program Studi Teknik Informatika Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">KATA SAMBUTAN</x-slot>

    <!-- Sambutan Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-0">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                        <h1 class="fw-bold text-primary text-uppercase">Kata Sambutan</h1>
                    </div>
                    <p class="mb-4" style="text-align: justify;">
                    Dengan bangga umumkan bahwa Universitas Pahlawan Tuanku Tambusai kini mempersembahkan Program Sarjana (S1) Teknik Informatika, yang disahkan melalui nomor SK 429/E/O/2021. Keberadaan program studi ini adalah tonggak sejarah bagi universitas pahlawan dalam mendukung visi yang berfokus pada Kualitas dan Berorientasi Kewirausahaan.
                    </p>
                    <p class="mb-4" style="text-align: justify;">
                    Teknik Informatika memegang peranan kunci dalam menghadapi tantangan global. Dengan kombinasi kompetensi dalam bidang teknologi dan informatika, berharap program studi ini mampu melahirkan lulusan yang tidak hanya kompetitif tetapi juga mampu memberikan kontribusi bernilai tambah di berbagai sektor bisnis. Selain itu, keberadaan program studi ini juga diharapkan dapat tetap adaptif terhadap perubahan lingkungan dan terus memanfaatkan kemajuan teknologi.
                    </p>
                    <p class="mb-4" style="text-align: justify;">
                    Bergabunglah dalam perjalanan pendidikan Teknik Informatika di Universitas Pahlawan. Bersama-sama, mari kita menjadi bagian dari perubahan dan kemajuan di dunia teknologi. Selamat bergabung!
                    </p>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                            <div class="team-item bg-light rounded wow zoomIn overflow-hidden" data-wow-delay="0.9s">
                                <div class="team-img position-relative overflow-hidden" >
                                    <img class="img-fluid w-100" style="max-height: 30em;" src="{{ asset('storage/' . $kaprodi->image) }}" alt="">
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
    </div>
    <!-- Sambutan End -->

</x-templates.depan>
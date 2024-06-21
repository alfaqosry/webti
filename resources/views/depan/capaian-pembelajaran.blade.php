<x-templates.depan>
    <x-slot name="appname">Capaian Pembelajaran Program Studi Teknik Informatika Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">CAPAIAN PEMBELAJARAN</x-slot>

    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <!-- <div class="col-lg-12 wow slideInUp table-responsive" data-wow-delay="0.6s">
                    {{-- Sikap Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">SIKAP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sikaps as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Sikap end --}}

                    {{-- Pengetahuan Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">PENGETAHUAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengetahuans as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Pengetahuan end --}}

                    {{-- Keterampilan Umum Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">KETERAMPILAN UMUM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ketums as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Keterampilan Umum end --}}

                    {{-- Keterampilan KHUSUS Start --}}
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th colspan="2">KETERAMPILAN KHUSUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ketkhus as $item)
                            <tr>
                                <td>{{ \Str::upper($item->kode_capaian ) }}</td>
                                <td>{{ $item->nama_capaian }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Keterampilan KHUSUS end --}}
                </div> -->

            <!-- Profil Lulusan Start -->
            <div class="tab-pane show table-responsive" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <h1 class="text-center">Profil Lulusan</h1>
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No.</th>
                            <th scope="col" class="text-center">Kode PL</th>
                            <th scope="col" class="text-center">Profil Lulusan (PL)</th>
                            <th scope="col" class="text-center">Aspek</th>
                            <th scope="col" class="text-center">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1.</td>
                            <td class="text-center">PL01</td>
                            <td>Lulusan memiliki kemampuan menganalisis persoalan <i>computing</i> serta menerapkan prinsip-prinsip <i>computing</i> dan disiplin ilmu relevan lainnya untuk mengidentifikasi solusi bagi organisasi.</td>
                        </tr>
                        <tr>
                            <td class="text-center">2.</td>
                            <td class="text-center">PL02</td>
                            <td>Lulusan memiliki kemampuan mendesain, mengimplementasi dan mengevaluasi solusi berbasis <i>computing</i> yang memenuhi kebutuhan pengguna dengan pendekatan yang sesuai.</td>
                        </tr>
                        <tr>
                            <td class="text-center">3.</td>
                            <td class="text-center">PL03</td>
                            <td>Lulusan menguasai <i>body of knowledge</i> informatika/ilmu komputer secara sistematis dan komprehensif yang dibutuhkan untuk karir profesional atau studi lanjut.</td>
                        </tr>
                        <tr>
                            <td class="text-center">4.</td>
                            <td class="text-center">PL04</td>
                            <td>Lulusan mampu berkomunikasi interpersonal secara lisan maupun tulisan dengan sikap toleran dan bertanggung jawab dalam tim multidisiplin.</td>
                        </tr>
                        <tr>
                            <td class="text-center">5.</td>
                            <td class="text-center">PL05</td>
                            <td>Lulusan memiliki jiwa enterpreneur dan mampu memilihara serta mengembangkan jaringan profesional.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Profil Lulusan End -->



                <!-- Capaian Pembelajaran Lulusan Start-->
                <div class="tab-pane fade show active table-responsive" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <h1 class="text-center mt-3">Capaian Pembelajaran Lulusan</h1>
                        <table class="table table-striped table-responsive">
                            <thead>
                              <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Kode CPL</th>
                                <th scope="col" class="text-center">Deskripsi CPL</th>
                              </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td class="text-center">CPL01</td>
                                        <td>Bertakwa kepada Tuhan Yang Maha Esa, taat hukum, dan disiplin dalam kehidupan bermasyarakat dan bernegara.</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-center">2.</td>
                                        <td class="text-center">CPL02</td>
                                        <td>Menunjukkan sikap profesionaldalam bentuk kepatuhan pada etika profesi, kemampuan bekerjasama dalam tim multidisiplin, pemahaman tentang pembelajaran sepanjang hayat, dan respon terhadap isu sosial dan perkembangan teknologi.</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">3.</td>
                                        <td class="text-center">CPL03</td>
                                        <td>Memeiliki pengetahuan yang memadai terkait dengan cara kerja sistem komputer dan mampu merancang dan mengembangkan berbagai algoritma / metode untuk memecahkan masalah pada suatu orginansi.</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">4.</td>
                                        <td class="text-center">CPL04</td>
                                        <td>Memiliki kemampuan menganalisis persoalan computin yang kompleks secara login, kritis, sistematis, inovatif serta menerapkan prinsip-prinsip computing dan disiplin ilmu relevan lainnya untuk mengidentifikasi soluis dengan mempertimbangkan wawasan perkembangna ilmu transdisiplin.</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">5.</td>
                                        <td class="text-center">CPL05</td>
                                        <td>Menguasai kompetensi analisis, desain, implementasi dan manajemen proyek untuk memecahkan masalah di dunia industri dengan mendekatan sistem cerdas menggunakan algoritma kompleks sesuai
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">6.</td>
                                        <td class="text-center">CPL06</td>
                                        <td>Memiliki kemampuan (pengelolaan) manajerial tim dan kerjasama (team work), manajeman diri, mampu berkomunikasi baik lisan maupun tertulis denga baik dan mampu melakukan presentasi.</td>
                                    </tr>

                                    <td class="text-center">7.</td>
                                        <td class="text-center">CPL07</td>
                                        <td>Menyusun deskripsi saintifik hasil kajian implikasi pengembangan atau implementasi ilmu pengetahuan teknologi dalam bentuk skripsi atau laporan tugas akhir atau artikel ilmiah.</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-center">8.</td>
                                        <td class="text-center">CPL08</td>
                                        <td >Mampu menganalisis, merancang, membuat dan mengevaluasi user interface dan aplikasi interaktif dengan mempertimbangkan kebutuhan dan pengalaman pengguna</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">9.</td>
                                        <td class="text-center">CPL09</td>
                                        <td > mempu merancang dan mengimplementasikan program komputer untuk mengoptimalkan kinerja jaringan komputer dan komunikasi pada sebuah organisasi.</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">10.</td>
                                        <td class="text-center">CPL10</td>
                                        <td >Mampu mendesain mengimplementasi dan mengevaluasi solusi berbasis computing yang memenuhi kebutuhan-kebutuhan computing pada sebuah disiplin program</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">11</td>
                                        <td class="text-center">CPL11</td>
                                        <td >Bekerja sama dengan memiliki kepekaan sosial dengan menghargai keanekaragaman budaya, pandangan agama dan kepercayaan serta pendapat dan temuan orisinal orang lain</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">12</td>
                                        <td class="text-center">CPL12</td>
                                        <td >Menunjukkan sikap bertanggung jawab atas pekerjaan di bidinag keahliannya secara mandiri dengan  menginternalisasi semangat kemandirian kejuangan dan kewirausahaan</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td class="text-center">13.</td>
                                        <td class="text-center">CPL13</td>
                                        <td >Mampu memelihara dan mengambangkan jaringan kerja dengan pembimbing kolega, sejawat baik di dalam maupun di luar lembaganya melaui komunikasi efektif dalam berbagai konteks profesional</td>
                                        
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Capaian Pembelajaran Lulusan End -->
            </div>
        </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->

</x-templates.depan>
<x-templates.depan>
    <x-slot name="appname">Akreditasi</x-slot>
    <x-slot name="title">AKREDITASI</x-slot>

     <!-- Testimonial Start -->
    <div class="container-fluid py-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-0">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Akreditasi</h5>
                <!-- <h1 class="mb-0">DOSEN & MAHASISWA</h1> -->
            </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="card shadow">
                            <div class="card-header">IZIN PT</div>
                            <div class="card-body">
                            <iframe width="100%" height="700px"
                                src="{{ asset('pdf/izinpt.pdf') }}">
                            </iframe>  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">SK INFORMATIKA</div>
                            <div class="card-body">
                                <iframe width="100%" height="700px"
                                src="{{ asset('pdf/skinformartika.pdf') }}">
                                </iframe>  
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- Testimonial End -->

</x-templates.depan>
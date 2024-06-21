<x-templates.depan>
    <x-slot name="appname">{{ $title }} Program Studi Teknik Informatika Universitas Pahlawan Tuanku Tambusai</x-slot>
    <x-slot name="title">{{ \Str::upper($title) }}</x-slot>

    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">

                @foreach ($images as $item)
                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->nama }}">
                        </div>
                    </div>
                </div>
                @endforeach

                @if (count($images) == 0)
                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('depan/img/up-dari-atas.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('depan/img/up-dari-atas.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('depan/img/up-dari-atas.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('depan/img/up-dari-atas.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('depan/img/up-dari-atas.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp py-5" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('depan/img/up-dari-atas.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
                @endif
                
            </div>
        </div>
    </div>

</x-templates.depan>
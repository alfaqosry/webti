<x-templates.ebook>
    <x-slot name="appname">Informasi Pendaftaran Program Studi Teknik Informatika Universitas Pahlawan Tuanku Tambusai
    </x-slot>
    <x-slot name="title">Perpustakaan Online</x-slot>

    <style>
        .card {
            border-radius: 4px;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);

            cursor: pointer;


        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
    <!-- Capaian Pembelajaran Plan Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            
             
               
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <form action="{{ route('ebook.caribuku') }}" enctype="multipart/form-data">
                             @csrf
                        <div class="input-group mb-3">
                          
                               
                            <input type="text" class="form-control" placeholder="Cari buku.... ketikan judul, penulis, tahun, dan penerbit" name="cari" >
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" >Cari</button>
                            </div>
                           
                        </div>
                    </div>
                </form>
                </div>
                <div class="row">
                    <h3>Terbaru </h3>

                    @foreach($buku as $item)

                    <div class="col-lg-2 col-6 d-flex align-items-stretch mb-4">
                        <div class="card shadow">
                            <img src=" {{ asset('storage/'.$item->foto_sampul) }}" alt=" {{ $item->judul_buku}}">

                            <div class="card-body">
                                <a href="{{ route('ebook.show', $item->id)}}" class="text-primary ">
                                    <div class="text-truncate">{{$item->judul_buku}}</div>
                                </a>
                                <small>{{ $item->penulis }}</small>
                            </div>

                        </div>
                    </div>

                    @endforeach

                 
                </div>
                <div class="row mt-4 justify-content-center">
                    {{$buku->links()}}
                </div>

              

                @if(isset($favorit ))
                <div class="row mt-4">
                    <h3>Favorit </h3>


                        @foreach($favorit as $item)

                    <div class="col-lg-2 col-6 d-flex align-items-stretch">
                        <div class="card shadow">
                            <img src=" {{ asset('storage/'.$item->foto_sampul) }}" alt=" {{ $item->judul_buku}}">

                            <div class="card-body">
                                <a href="{{ route('ebook.show', $item->buku_id)}}" class="text-primary ">
                                    <div class="text-truncate">{{$item->judul_buku}}</div>
                                </a>
                                <small>{{ $item->penulis }}</small>
                            </div>

                        </div>
                    </div>

                        @endforeach

                   

                    
                </div>
                @endif
            
        </div>
        <!-- Capaian Pembelajaran Plan End -->




</x-templates.ebook>
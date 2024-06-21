<x-templates.ebook>
  <x-slot name="appname">Perpustakaan Online</x-slot>
  <x-slot name="title">{{ $buku->judul_buku }}</x-slot>

  <!-- Capaian Pembelajaran Plan Start -->
  <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">

        </div>
        <div class="row">


          <div class="col-md-4">

            <div class="card">

              <img src="{{ asset('storage/'.$buku->foto_sampul) }}" alt="">
              {{-- <embed src="{{ Storage::url($buku->pdf_buku) }}" width="100%" height="600px" alt="pdf"
                type="application/pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"> --}}
            </div>
          </div>
          <div class="col-md-8 mt-4">

            <div class="card">
              <div class="card-header">
                Detail Buku
              </div>
              <div class="card-body">
                <table class="table table-striped">

                  <tbody>
                    <tr>
                      <th scope="row">Judul</th>
                      <td>{{$buku->judul_buku}}</td>

                    </tr>

                    <tr>
                      <th scope="row">Penulis</th>
                      <td>{{$buku->penulis}}</td>

                    </tr>
                    <tr>
                      <th scope="row">Tahun</th>
                      <td> {{ $buku->tahun_buku}} </td>

                    </tr>

                    <tr>
                      <th scope="row">Penerbit</th>
                      <td> {{ $buku->penerbit_buku}} </td>

                    </tr>

                    <tr>
                      <th scope="row">NISBN</th>
                      <td> {{ $buku->nisbn}} </td>

                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="mt-4">
              <a href="" class="btn btn-lg btn-primary mt-2"><i class="fa-solid fa-download"></i></a>
              <a href="{{route('ebook.bacaonline', $buku->id)}}" arget="_blank" class="btn btn-lg btn-warning mt-2">Baca
                Online</a>

              @if($bukucount == 1)


              <a href="{{route('ebook.removeFavorit', $bukufav->id)}}" class="btn btn-lg btn-warning mt-2"><i
                  class="fa-solid fa-star"></i></a>
              @else


              <a href="{{route('ebook.addFavorit', $buku->id)}}" class="btn btn-lg btn-warning mt-2"><i
                  class="fa-regular fa-star"></i></a>
              @endif


            </div>

          </div>

        </div>
      </div>
    </div>
    <!-- Capaian Pembelajaran Plan End -->




</x-templates.ebook>
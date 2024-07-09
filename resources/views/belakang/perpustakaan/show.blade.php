<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Perpustakaan</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ route('home') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('perpustakaan.index') }}">Daftar buku</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Buku
                    </li>
                </ul>
            </div>
            <x-partials.alert.alert />
            <div class="row">
                <div class="col-lg-6">


                    <div class="card">
                        <div class="card-header">

                        </div>
                        <iframe src="{{ asset('/laraview/#../storage/'.$buku->pdf_buku) }}" frameborder="0" width="100%" height="600px"></iframe>
                        {{-- <embed src='{{ asset("pdf/$buku->buku_pdf") }}' width="100%" height="600px" alt="pdf"
                            type="application/pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"> --}}


                    </div>
                </div>

                {{-- <div class="col-lg-6">


                    <div class="card">
                        <div class="card-header">

                        </div>
                        <iframe
                            src="https://docs.google.com/document/d/e/2PACX-1vQRlqj9Kdf0RjxyYiuVI1ec9OvRkxWuBOaaMErBxBQ14_IiO_actXDSLgEQPGWNiezU4-0625X5DzbN/pub?embedded=true"
                            width="100%" height="600px"></iframe>


                    </div>
                </div> --}}
                <div class="col-md-6">

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
                </div>

            </div>
        </div>
    </div>

    @push('js-tambahan')
    <script>
        $(document).ready(function() {
			// Add Row
			$('#add-row').DataTable({
				"pageLength": 10,
			});
		});
    </script>
    @endpush

</x-templates.belakang>
<x-templates.belakang>
        <div class="container">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Edit Buku {{$buku->judul_buku}} </h4>
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
                            <a href="{{ route('perpustakaan.index') }}">Buku</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            Edit Buku {{$buku->judul_buku}}
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"></div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('perpustakaan.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group has-validation">
                                <label for="judul_buku">Judul Buku</label>
                                <input type="text" class="form-control @error('judul_buku') is-invalid @enderror"
                                    id="judul_buku" name="judul_buku" value="{{$buku->judul_buku}}" >
    
                                @error('judul_buku')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group has-validation">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror " id="penulis"
                                    name="penulis" value="{{$buku->penulis}}">
                                @error('penulis')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                            <div class="form-group has-validation">
                                <label for="penerbit_buku">Penerbit</label>
                                <input type="text" class="form-control @error('penerbit_buku') is-invalid @enderror "
                                    id="penerbit_buku" name="penerbit_buku" value="{{$buku->penerbit_buku}}">
                                @error('penerbit_buku')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                            <div class="form-group has-validation">
                                <label for="kategoribuku">Kategori</label>
                                <select class="form-control @error('kategoribuku') is-invalid @enderror" id="kategoribuku"
                                    name="kategoribuku">
                                    <option>{{$kategoribuku->kategori_buku }}</option>
                                    @foreach($kategori as $kate)
                                    <option>{{$kate->kategori_buku }}</option>
                                    @endforeach
                                </select>
    
                                @error('kategoribuku')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                            <div class="form-group has-validation">
                                <label for="tahun_buku">Tahun Buku</label>
                                <input type="text" class="form-control @error('tahun_buku') is-invalid @enderror"
                                    id="tahun_buku" name="tahun_buku" value="{{$buku->tahun_buku}}">
                                @error('tahun_buku')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group has-validation">
                                <label for="nisbn">NISBN</label>
                                <input type="text" class="form-control @error('nisbn') is-invalid @enderror" id="nisbn"
                                    name="nisbn" value="{{$buku->nisbn}}">
                                @error('nisbn')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
                    
                            <div class="form-group">
                                <label for="pdf_buku">PDF Buku</label>
                                <input type="file" class="form-control-file" id="pdf_buku" name="pdf_buku">
                            </div>
    
                            <div class="form-group has-validation">
                                <div class="input-file input-file-image">
                                    <label>Foto Sampul</label>
                                    <img class="img-upload-preview" width="150"
                                        src="{{ asset('storage/'.$buku->foto_sampul) }}" alt="preview">
                                    <input type="file"
                                        class="form-control @error('foto_sampul') is-invalid @enderror form-control-file"
                                        id="uploadImg2" name="foto_sampul" accept="image/*"  >
                                    <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                        <span class="btn-label">
                                            <i class="fa fa-file-image"></i>
                                        </span>
                                        Upload a Gambar
                                    </label>
                                </div>
                                @error('foto_sampul')
                                <div id="bahanFeedback" class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
    
    
    
                            <div class="card-action text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        @push('js-tambahan')
        <script>
            $('#summernote').summernote({
                placeholder: 'Silahkan Isi Dengan Berita Atau Blog yang akan di tulis ...',
                tabsize: 2,
                height: 400
            });
    
            $('#kategoribuku').select2({
                theme: "bootstrap",
                tags: true
            });
        </script>
        @endpush
    </x-templates.belakang>
   
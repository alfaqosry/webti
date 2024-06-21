<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Sliders</h4>
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
                        <a href="{{ route('slider.index') }}">Daftar Sliders</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Edit Sliders
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Sliders</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('slider.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Nama</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="titile"
                                name="title" placeholder="Nama Slider" value="{{ old('title') ?? $data->title }}">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="aktif">Status</label>

                            @if ($data->aktif == 1)

                            @else

                            @endif
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="aktif" id="inlineRadio1"
                                    value="{{ old('aktif') ?? 1 }}">
                                <label class="form-check-label" for="inlineRadio1">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="aktif" id="inlineRadio2"
                                    value="{{ old('aktif') ?? 0 }}">
                                <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
                            </div>

                            @error('aktif')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-file input-file-image">
                                <label>Image</label>
                                <img class="img-upload-preview" width="150" src="{{ asset('storage/'.$data->path) ?? 'https://placehold.jp/150x150.png' }}"
                                    alt="preview">
                                <input type="file" class="form-control form-control-file" id="uploadImg2" name="path"
                                    accept="image/*">
                                <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                    <span class="btn-label">
                                        <i class="fa fa-file-image"></i>
                                    </span>
                                    Upload a Image
                                </label>
                            </div>
                        </div>

                        <div class="card-action text-center">
                            <button type="submit" class="btn btn-success" style="width: 30%;">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @push('js-tambahan')
    <script>
        var aktif = @json($data->aktif);
        if (aktif == 1) {
            document.getElementById('inlineRadio1').checked = true;
        } else {
            document.getElementById('inlineRadio2').checked = true;
        }
    </script>
    @endpush

</x-templates.belakang>
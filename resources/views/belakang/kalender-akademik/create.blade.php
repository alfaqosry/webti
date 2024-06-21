<x-templates.belakang>

    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Daftar Kalender Akademik</h4>
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
                        <a href="{{ route('kalender-akademik.index') }}">Daftar Kalender Akademik</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        Tambah Kalender Akademik
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Kalender Akademik</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kalender-akademik.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Judul Event" value="{{ old('title') }}">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="color" class="form-label">Color </label>
                            <input type="color"
                                class="form-control form-control-color @error('color') is-invalid @enderror" id="
                                color" name="color" value="{{old('color')}}" title="Pilih warna">

                            @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="start">Start</label>



                            <input type="date" class="form-control @error('start') is-invalid @enderror" id="start"
                                name="start" placeholder="Judul Event" value="{{date('Y-m-d')}}">

                            @error('start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="end">End</label>
                            <input type="date" class="form-control @error('end') is-invalid @enderror" id="end"
                                name="end" placeholder="Judul Event" value="{{ date('Y-m-d')}}">

                            @error('end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                                name="url" placeholder="Masukan url jika ada" value="{{ old('url') }}">

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
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

</x-templates.belakang>
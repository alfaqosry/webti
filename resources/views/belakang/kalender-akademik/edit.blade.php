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
                        Edit Kalender Akademik
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Kalender Akademik</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kalender-akademik.update',$kalender) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="Judul Event" value="{{$kalender->title}}">

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
                                color" name="color" value="{{$kalender->color}}" title="Pilih warna">

                            @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="start">Start</label>



                            <input type="date" class="form-control @error('start') is-invalid @enderror" id="start"
                                name="start" placeholder="Judul Event" value="{{$kalender->start}}">

                            @error('start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="end">End</label>
                            <input type="date" class="form-control @error('end') is-invalid @enderror" id="end"
                                name="end" placeholder="Judul Event" value="{{$kalender->end}}">

                            @error('end')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                                name="url" placeholder="Masukan url jika ada" value="{{$kalender->url}}">

                            @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>





                        <div class="card-action text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-templates.belakang>
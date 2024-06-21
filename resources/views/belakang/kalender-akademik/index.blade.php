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
                        <span>
                            Daftar Kalender Akademik
                        </span>
                    </li>
                </ul>
            </div>

            <x-partials.alert.alert />

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                {{-- <h4 class="card-title">Add Row</h4> --}}
                                <a href="{{ route('kalender-akademik.create') }}"
                                    class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Kalender Akademik
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Color</th>
                                            <th>Url</th>
                                            <th style="width: 20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kalenderAkademiks as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->start }}</td>
                                            <td>{{ $item->end }}</td>
                                            <td>{{ $item->color }}</td>
                                            <td>{{ $item->url }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="{{ route('kalender-akademik.edit', [$item]) }}"
                                                        data-toggle="tooltip" title=""
                                                        class="btn btn-link btn-primary btn-lg"
                                                        data-original-title="Edit Kalender Akademik">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                  

                                                        <a href="{{route('kalender-akademik.delete',$item->id)}}" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-danger" data-original-title="Hapus">
                                                            <i class="fa fa-times"></i>
                                                </a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

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
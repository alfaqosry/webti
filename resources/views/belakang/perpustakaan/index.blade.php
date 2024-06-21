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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                {{-- <h4 class="card-title">Add Row</h4> --}}
                                <a href="{{ route('perpustakaan.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Tambah Buku Baru
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Judul Buku</th>
                                            <th>Penulis</th>
                                            <th>Tahun</th>
                                            <th>Penerbit</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($databuku as $buku )
                                        <tr>
                                            <td> <img src="{{ asset('storage/'.$buku->foto_sampul) }}"
                                                    alt="{{ $buku->judul_buku }}" width="100"></td>
                                            <td>{{$buku->judul_buku}}</td>
                                            <td>{{$buku->penulis}}</td>
                                            <td> {{$buku->tahun_buku}} </td>
                                            <td>{{$buku->penerbit_buku}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{route('perpustakaan.show', $buku->id)}}"
                                                        class="btn btn-primary"> <i class="fas fa-book-open"></i></a>
                                                    <a href="{{route('perpustakaan.edit', $buku->id)}}" class="btn btn-success"><i class="fas fa-pencil"></i></a>
                                                    {{-- <a href="{{route('perpustakaan.delete',$buku->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a> --}}
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-id_buku="{{$buku->id}}" data-judul="{{$buku->judul}}"><i class="fas fa-trash"></i></button>
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

   

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Apakah anda yakin ingin menghapus buku ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="" class="btn btn-danger">Hapus</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(function(){
        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id_buku') 
  var judul = button.data('judul')
  var modal = $(this)
  modal.find('.modal-title').text('Menghapus buku' + judul)
 
  var url = "/home/perpustakan/delete/"+id;
  modal.find('.modal-body input').val(url)
  modal.find('.modal-footer a').attr('href',url )
//   $("a").attr("href", "http://www.google.com/")
})
});
    </script>

</x-templates.belakang>
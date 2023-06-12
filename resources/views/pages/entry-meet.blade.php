@extends('layouts.dashboard')

@section('title')
    Bagian Entry Meet
@endsection

@section('content-management')

<main class="content">
    @include('includes.nav-profile')
    <section class="px-5 py-2">
        <header>
            <h3>Tambah Entry Meet</h3>
            <p>Tambahkan Entry Meet untuk dikemudian hari </p>
        </header>

        <button class="btn btn-primary" id="btnBuatForm btn btn-success" onclick="toggleForm()">Tambahkan Meet</button>
        <span>
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#meetModal"> Buat Link Zoom/Meet</button>
        </span>

        <!-- Modal -->
        <div class="modal fade" id="meetModal" tabindex="-1" aria-labelledby="meetModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="meetModalLabel">Buat Meet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <a href="https://zoom.us/" class="btn btn-primary" terget="_blank" rel="noopener noreferrer">Zoom</a>
                    <a href="https://meet.google.com/" class="btn btn-success" terget="_blank" rel="noopener noreferrer">Google Meet</a>
                </div>
                
                </div>
            </div>
        </div>

        <div class="container demo">
            
            <form id="myForm" class="hidden" action="{{ route('save-meet') }}" enctype="multipart/form-data" method="post">
                @csrf
                <!-- Isi formulir di sini -->
                <div class="row">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="meet_name">Judul Meet</label>
                                <input class="form-control" type="text" id="meet_name" name="meet_name">
                                
                            </div>
                            
                            <div class="form-group mt-2">
                                <label for="meet_description">Deskripsi Meet</label>
                                
                                <textarea id="editor2" name="meet_description" cols="100%" rows="10" class="form-control"></textarea>
                                
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="meet_message">Pesan</label>
                                <textarea id="editor2" name="meet_message" id="meet_message" cols="100%" rows="5" class="form-control"></textarea>
                            </div>
                
                            <div class="form-group mt-2">
                                <label for="meet_date">Tanggal</label>
                                <input class="form-control" type="date" id="meet_date" name="meet_date">
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="meet_time">Waktu</label>
                                <input class="form-control" type="time" id="meet_time" name="meet_time">
                            </div>


                            <div class="form-group mt-2">
                                <label for="meet_link">Link Video Zoom/Meet</label>
                                <input class="form-control" type="text" id="text" name="meet_link">
                            
                            </div>

                            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                        </div>
                    </div>
                </div>  
            </form>
        </div>

        <div class="section-table">
            <table class="datatable table table-striped table-bordered mt-2" id="crudTable">
                <thead>
                    <tr>
                        <th>Judul Meet</th>
                        <th>Deskripsi judul</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meets as $meet)
                    <tr>
                        <td>{{ $meet->meet_name }}</td>
                        <td>{!! $meet->meet_description !!}</td>
                        <td>{!! $meet->meet_message !!}</td>
                        <td>{{ $meet->meet_date }}</td>
                        <td>{{ $meet->meet_time }}</td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    
    </section>

      
</main>
@endsection

@push('after-scripts')
<script>
    function toggleForm() {
      var form = document.getElementById("myForm");
      form.classList.toggle("hidden");
    }
</script>


<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor2' );
</script>

<script type="text/javascript">
  $(function () {
      
    var table = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('content-entry-meet') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'meet_name', name: 'meet_name'},
            {data: 'meet_description', name: 'meet_description'},
            {data: 'meet_message', name: 'meet_message'},
            {data: 'meet_link', name: 'meet_link'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
  });
</script>
@endpush
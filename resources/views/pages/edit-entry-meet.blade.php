@extends('layouts.dashboard')

@section('title')
    Bagian Entry Meet
@endsection

@section('content-management')

<main class="content">
    @include('includes.nav-profile')
    <section class="px-5 py-2">
        <header>
            <h3>Edit Entry Meet</h3>
            <p>Edit Entry Meet</p>
        </header>


        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('update-content-entry-meet', $meet->id) }}" enctype="multipart/form-data" method="post">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-body">
                        <div class="form-group ">
                                <label for="meet_name">Judul Meet</label>
                                <input class="form-control" type="text" id="meet_name" name="meet_name" value="{{ $meet->meet_name }}">
                                
                            </div>
                            
                            <div class="form-group mt-2">
                                <label for="meet_description">Deskripsi Meet</label>
                                
                                <textarea id="editor2" name="meet_description" cols="100%" rows="10" class="form-control">{{ $meet->meet_description }}</textarea>
                                
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="meet_message">Pesan</label>
                                <textarea id="editor2" name="meet_message" id="meet_message" cols="100%" rows="5" class="form-control">{{ $meet->meet_message }}<</textarea>
                            </div>
                
                            <div class="form-group mt-2">
                                <label for="meet_date">Tanggal</label>
                                <input class="form-control" type="date" id="meet_date" name="meet_date" value="{{ $meet->meet_date }}">
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="meet_time">Waktu</label>
                                <input class="form-control" type="time" id="meet_time" name="meet_time" value="{{ $meet->meet_time }}">
                            </div>


                            <div class="form-group mt-2">
                                <label for="meet_link">Link Video Zoom/Meet</label>
                                <input class="form-control" type="text" id="text" name="meet_link" value="{{ $meet->meet_link }}">
                            
                            </div>

                            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
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
@extends('layouts.dashboard')

@section('title')
    Bagian Entry Meet
@endsection

@section('content-management')

<main class="content">
    @include('includes.nav-profile')
    <section class="px-5 py-2">
        <header>
            <h3>Edit Laporan</h3>
            <p>Edit Laporan untuk disimpan</p>
        </header>

        <div class="row">
            <div class="col-md-12">
            <form action="{{ route('update-content-report', $report->id ) }}" enctype="multipart/form-data" method="post">

            @method('PUT')
            @csrf
            <!-- Isi formulir di sini -->
            <div class="row">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="col-md-12 col-md-6">
                            <div class="form-group ">
                                <label for="document_title">Judul Laporan</label>
                                <input class="form-control" type="text" id="document_title" name="document_title"
                                value="{{ $report->document_title }}">
                                
                            </div>
                
                            <div class="form-group mt-2">
                                <label for="created_date">Tanggal Diupload</label>
                                <input class="form-control" type="date" id="created_date" name="created_date"
                                value="{{ $report->created_date }}">
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="thumbnail">Thumbnail</label>
                                <input class="form-control" type="file" id="thumbnail" name="thumbnail"
                                value="{{ $report->thumbnail }}">
                            </div>


                            <div class="form-group mt-2">
                                <label for="document_file">File Dokumen</label>
                                <input class="form-control" type="file" id="document_file" name="document_file"
                                value="{{ $report->document_file}}">
                            
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                    </div>
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

@endpush
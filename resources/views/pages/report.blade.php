@extends('layouts.dashboard')

@section('title')
    Bagian Entry Meet
@endsection

@section('content-management')

<main class="content">
    @include('includes.nav-profile')
    <section class="px-5 py-2">
        <header>
            <h3>Tambah Laporan</h3>
            <p>Tambahkan Laporan untuk disimpan</p>
        </header>

        <button class="btn btn-primary" id="btnBuatForm btn btn-success" onclick="toggleForm()">Tambahkan Laporan</button>
   
        <div class="container demo">
            
            <form id="myForm" class="hidden" action="{{ route('save-report') }}" enctype="multipart/form-data" method="post">
                @csrf
                <!-- Isi formulir di sini -->
                <div class="row">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="form-group ">
                                <label for="document_title">Judul Laporan</label>
                                <input class="form-control" type="text" id="document_title" name="document_title">
                                
                            </div>
                
                            <div class="form-group mt-2">
                                <label for="created_date">Tanggal Diupload</label>
                                <input class="form-control" type="date" id="created_date" name="created_date">
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="thumbnail">Thumbnail</label>
                                <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                            </div>


                            <div class="form-group mt-2">
                                <label for="document_file">File Dokumen</label>
                                <input class="form-control" type="file" id="document_file" name="document_file">
                            
                            </div>

                            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                        </div>
                    </div>
                </div>  
            </form>
        </div>

        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <form action="/report" class="form" Method="GET">
                        <div class="form-group mt-2 ">
                            <input type="text" name="keyword" class="form-control w-75 d-inline" id="keyword" placeholder="Ketikkan keyword" value="{{ request('keyword') }}">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="row mt-4">
                @php $incrementReport = 0 @endphp
                @if(!empty($reports) && $reports->count())
                    @foreach($reports as $report)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="report-thumbnail">
                                        <img src="{{ 
                                            Storage::url($report->thumbnail) 
                                        }}" alt="" class="w-100">
                                    </div>
                                    <div class="report-text">
                                        <p class="report-text mt-3" style="font-weight:bold; font-size:16px;">
                                            {{ $report->document_title }}
                                        </p>
                                        <p class="report-text " style="font-weight:bold; font-size:14px;">
                                            {{ $report->created_date }}
                                        </p>
                                    </div>
                                    <div class="text-center ">
                                        <a href="" class="btn btn-success mt-2" >Download</a>
                                        <a href="" class="btn btn-primary mt-2" > Preview</a>
                                        <a href="" class="btn btn-danger mt-2" > Hapus</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        Tidak ada Report 
                    </div>
                @endif
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
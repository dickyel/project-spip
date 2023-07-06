@extends('layouts.dashboard')

@section('title')
    Bagian Surat Tugas
@endsection

@section('content-management')

<main class="content">
    @include('includes.nav-profile')
    <section class="px-5 py-2">
        <header>
            <h3>Tambah Surat Tugas</h3>
            <p>Tambahkan Surat Tugas untuk disimpan</p>
        </header>

        <button class="btn btn-primary" id="btnBuatForm btn btn-success" onclick="toggleForm()">Tambahkan Surat Tugas</button>
    
            <form id="myForm" class="hidden" action="{{ route('save-work-letter') }}" enctype="multipart/form-data" method="post">
                @csrf
                <!-- Isi formulir di sini -->
                <div class="row">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="col-md-12 col-md-6">
                                <div class="form-group ">
                                    <label for="document_title">Judul Surat Tugas</label>
                                    <input class="form-control" type="text" id="work_letter_title" name="work_letter_title">
                                    
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
                                    <input class="form-control" type="file" id="work_letter_file" name="work_letter_file">
                                
                                </div>
                            </div>
                            

                            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                        </div>
                    </div>
                </div>  
            </form>
            <div class="col-md-6">
                <form action="/report" class="form" Method="GET">
                    <div class="form-group mt-2 ">
                        <input type="text" name="keyword" class="form-control w-75 d-inline" id="keyword" placeholder="Ketikkan keyword" value="{{ request('keyword') }}">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form>
            </div>
        

        <div class="container">
            <div class="row mt-4">
                @php $incrementLetter = 0 @endphp
                @if(!empty($letters) && $letters->count())
                    @foreach($letters as $letter)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="report-thumbnail">
                                        <img src="{{ 
                                            Storage::url($letter->thumbnail) 
                                        }}" alt="" class="w-100">
                                    </div>
                                    <div class="report-text">
                                        <p class="report-text mt-3" style="font-weight:bold; font-size:16px;">
                                            {{ $letter->work_letter_title }}
                                        </p>
                                        <p class="report-text " style="font-weight:bold; font-size:14px;">
                                            {{ $letter->created_date }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('edit-content-work-letter',$letter->id) }}" class="btn btn-primary mt-2" >
                                            <img src="./assets/images/pen.svg" alt="" width="20px">
                                        </a>
                                        <span>
                                            <a href="{{ route('content-work-letter.delete', ['id' => $letter->id]) }}" class="btn btn-danger mt-2" onclick="event.preventDefault(); document.getElementById('delete-form{{ $letter->id }}').submit();"> 
                                            <img src="./assets/images/trash.svg" alt="" width="20px">
                                            </a>
                                            <form id="delete-form{{ $letter->id }}" action="{{ route('content-work-letter.delete', ['id' => $letter->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        </span>
                                        <span><a href="{{ route('content-work-letter.download', ['id' => $letter->id]) }}" class="btn btn-success mt-2" > 
                                            <img src="./assets/images/download.svg" alt="" width="20px">
                                        </a></span>

                                        
                                    </div>
                                  
                                </div>
                            
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        Tidak ada Surat Tugas
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
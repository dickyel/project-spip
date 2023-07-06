@extends('layouts.dashboard')


@section('title')
    Bagian Lain - lain 
@endsection

@section('content-management')
@include('sweetalert::alert')
    <main class="content">
        @include('includes.nav-profile')
      
        <section class="px-5 py-2">
        <header>
          <h3>Metodologi SPIP</h3>
          <p>Manage data Metodologi SPIP</p>
        </header>
        

        @include('includes.nav-menu-methodology')
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/images/guide.svg') }}" alt="profile" style="width: 80%; height: 80%px; border-radius: 30px;">
                </div>
                @forelse($methods as $method)
                <div class="col-md-6 align-items-center">
                 
                  <div class="card">
                      <div class="card-body">
                          <div class="profile-data py-3 px-1">
                            <form action="{{ route('update-method', $method->id) }}" method="post" enctype="multipart/form-data">
                              @method('put')
                              @csrf
                             
                              <div class="mb-3">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" placeholder="Masukkan deskripsi" id="editor" style="height: 100px" name="description">{{ $method->description }}</textarea>
                              </div>


                            <button type="submit" class="btn btn-primary">
                                Ubah Data
                            </button>
                            <span>
                              <a href="{{ route('delete-method', $method->id) }}" class="btn btn-danger">Hapus</a>
                            </span>
                          </div>
                      </div>
                      
                  </div>
                 
                </div>
                @empty
                  <div class="col-md-6 align-items-center">
                    <div class="card">
                      <div class="card-body">
                        <div class="profile-data py-3 px-1">
                              <form action="{{ route('save-method') }}" method="post" enctype="multipart/form-data">
                               
                                @csrf
                    
                                <div class="mb-3">
                                  <label for="">Deskripsi</label>
                                  <textarea class="form-control" placeholder="Masukkan deskripsi" id="editor" style="height: 100px" name="description"></textarea>
                                </div>


                              <button type="submit" class="btn btn-primary">
                                  Simpan Data
                              </button>
                            </div>
                        </div>
                    </div> 
                  </div>
                @endforelse
            </div>

            
        </div>
      </section>
    </main>
@endsection

@push('after-scripts')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endpush
@extends('layouts.dashboard')

@section('title')
    Ubah & Add Metodologi
@endsection

@section('content-management')
    <main class="content">
        @include('includes.nav-profile')
      
        <section class="p-2">
            <header>
                <h3>Metodologi SPIP</h3>
                <p>Manage data Metodologi SPIP</p>
            </header>
        
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Metodologi SPIP</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-guide-tab" data-bs-toggle="pill" data-bs-target="#pills-guide" type="button" role="tab" aria-controls="pills-guide" aria-selected="false">Pedoman SPIP</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Grafik / Tabel SPIP</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false">Lain - lain</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('content-methodology') }}" style="text-decoration: none; color:#000;">Metodologi Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Ubah Metodologi</li>
                                            </ol>
                                        </nav>
                                        <form action="{{ route('update-method', $method->id) }}" method="post" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf

                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Judul </label>
                                                <input type="text" class="form-control" id="judul" aria-describedby="judul" value="{{ $method->method_title }}" name="method_title">
                                                
                                                </div>
                                                <div class="mb-3">

                                                <label for="">Deskripsi</label>
                                                <textarea class="form-control" placeholder="Masukkan deskripsi" id="deskripsi" style="height: 100px" name="description">{{ $method->description }}</textarea>
                                            
                                            </div>
                                        
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="pills-guide" role="tabpanel" aria-labelledby="pills-guide-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('content-methodology') }}" style="text-decoration: none; color:#000;">Pedoman Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Ubah Pedoman</li>
                                        </ol>
                                    </nav>
                                    <form action="{{ route('update-guide', $guide->id) }}" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                        <label for="judul" class="form-label">Judul </label>
                                        <input type="text" class="form-control" id="judul" aria-describedby="judul" value="{{ $guide->guide_title }}" name="guide_title">
                                        
                                        </div>
                                        <div class="mb-3">

                                        <label for="">Deskripsi</label>
                                        <textarea class="form-control" placeholder="Masukkan deskripsi" id="deskripsi" style="height: 100px" name="description">{{ $guide->description }}</textarea>
                                        
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('content-methodology') }}" style="text-decoration: none; color:#000;">Lain - lain Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Ubah Lain - lain</li>
                                            </ol>
                                        </nav>
                                        <form>
                                            <div class="mb-3">
                                            <label for="judul" class="form-label">Judul </label>
                                            <input type="text" class="form-control" id="judul" aria-describedby="judul">
                                            
                                            </div>
                                            <div class="mb-3">

                                            <label for="">Deskripsi</label>
                                            <textarea class="form-control" placeholder="Masukkan deskripsi" id="deskripsi" style="height: 100px"></textarea>
                                            
                                            </div>
                                        
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@extends('layouts.dashboard')

@section('title')
 Bagian Profile
@endsection

@section('content-management')

    <main class="content">
        @include('includes.nav-profile')
      
        <section class="px-5 py-2">
            <header>
            <h3>Data Profile</h3>
            <p>Manage data profile anda</p>
            </header>
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/login.png" alt="profile" style="width: 80%; height: 80%px; border-radius: 30px;">
                </div>
                <div class="col-md-6 align-items-center">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-data py-5 px-3">
                        <ul class="list-unstyled">
                            <li>Nama <span>: <strong>Muhammad Dikky Purwanto</strong></span></li>
                            <li>Tempat, Tanggal Lahir <span>:  <strong>Cilegon, 6 Maret 2023</strong></span></li>
                            <li>Alamat <span>:  <strong>Kota Cilegon</strong></span></li>
                            <li>Unit <span>:  <strong>Seksi Internal</strong></span></li>
                            <li>Departemen <span>:  <strong>Bagian TI</strong></span></li>
                        </ul>
                        <a href="" class="btn btn-primary">
                            Ubah Data
                        </a>
                        </div>
                    </div>
                    
                </div>
                </div>
                
            </div>

            
            </div>
        
        </section>  
    </main>
@endsection
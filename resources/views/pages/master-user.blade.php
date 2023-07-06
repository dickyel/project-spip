@extends('layouts.dashboard')

@section('title')
    Bagian Master User
@endsection

@section('content-management')

<main class="content">
    @include('includes.nav-profile')
    <section class="px-5 py-2">
        <header>
            <h3>Master User</h3>
            <p>Tambahkan User</p>
        </header>

        <button class="btn btn-primary" id="btnBuatForm btn btn-success" onclick="toggleForm()">Tambahkan User</button>

        <div class="container demo">
            
            <form id="myForm" class="hidden" action="" enctype="multipart/form-data" method="post">
                @csrf
                <!-- Isi formulir di sini -->
                <div class="row">
                    <div class="card mt-2">
                        <div class="card-body">
                            <!-- <div class="photo d-flex">
                                <div class="position-relative me-20">
                                    <img src="../assets/images/avatar.jpg" width="90" height="90" class="avatar img-fluid" />
                                    <div
                                        class="avatar-overlay position-absolute top-0 d-flex justify-content-center align-items-center">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 6H5H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M14 11V17" stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M10 11V17" stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="image-upload">
                                    <label for="avatar">
                                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="45" cy="45" r="45" fill="#E7EAF5" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M45 39.375C42.7981 39.375 40.9679 40.7216 40.3127 42.5332C40.1693 42.9297 39.8162 43.2128 39.398 43.2665C37.4362 43.5183 36 45.1013 36 46.9286C36 48.919 37.7105 50.625 39.9375 50.625C40.5588 50.625 41.0625 51.1287 41.0625 51.75C41.0625 52.3713 40.5588 52.875 39.9375 52.875C36.5726 52.875 33.75 50.2638 33.75 46.9286C33.75 44.0997 35.7853 41.7878 38.4536 41.1547C39.5996 38.7573 42.1173 37.125 45 37.125C48.5711 37.125 51.6055 39.6452 52.1224 43.0137C54.4461 43.4763 56.25 45.4474 56.25 47.8929C56.25 50.6955 53.8807 52.875 51.075 52.875C50.4537 52.875 49.95 52.3713 49.95 51.75C49.95 51.1287 50.4537 50.625 51.075 50.625C52.7428 50.625 54 49.3507 54 47.8929C54 46.435 52.7428 45.1607 51.075 45.1607C50.4537 45.1607 49.95 44.657 49.95 44.0357C49.95 41.5128 47.7862 39.375 45 39.375Z"
                                                fill="#0C145A" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M45 52.875C44.3787 52.875 43.875 52.3713 43.875 51.75V45C43.875 44.3787 44.3787 43.875 45 43.875C45.6213 43.875 46.125 44.3787 46.125 45V51.75C46.125 52.3713 45.6213 52.875 45 52.875Z"
                                                fill="#0C145A" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M41.9545 48.0455C41.5152 47.6062 41.5152 46.8938 41.9545 46.4545L44.2045 44.2045C44.6438 43.7652 45.3562 43.7652 45.7955 44.2045C46.2348 44.6438 46.2348 45.3562 45.7955 45.7955L43.5455 48.0455C43.1062 48.4848 42.3938 48.4848 41.9545 48.0455Z"
                                                fill="#0C145A" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M44.2045 44.2045C44.6438 43.7652 45.3562 43.7652 45.7955 44.2045L48.0455 46.4545C48.4848 46.8938 48.4848 47.6062 48.0455 48.0455C47.6062 48.4848 46.8938 48.4848 46.4545 48.0455L44.2045 45.7955C43.7652 45.3562 43.7652 44.6438 44.2045 44.2045Z"
                                                fill="#0C145A" />
                                        </svg>
                                    </label>
                                    <input id="avatar" type="file" name="avatar" accept="image/png, image/jpeg" />
                                </div>
                            </div> -->
                            <div class="form-group ">
                                <label for="name">Nama Lengkap</label>
                                <input class="form-control" type="text" id="name" name="name">
                                
                            </div>
                            
                            <div class="form-group mt-2">
                                <label for="nomor_pokok">Nomor Pokok</label>
                                
                                <input class="form-control" type="text" id="nomor_pokok" name="nomor_pokok">
                                
                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Email</label>
                                
                                <input class="form-control" type="text" id="email" name="email">
                                
                            
                            </div>
                
                            <div class="form-group mt-2">
                                <label for="password">Password</label>
                                
                                <input class="form-control" type="text" id="password" name="password">
                                <div class="input-group-append">
                                <button class="btn btn-outline-danger" type="button" onclick="generatePassword()">Generate</button>
                            </div>
                            
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
                        <th>Nama User</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>No Pokok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                 
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
<script>
    function generatePassword() {
        var length = 8; // panjang password yang diinginkan
        var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$!*";
        var password = "";
        for (var i = 0, n = charset.length; i < length; ++i) {
            password += charset.charAt(Math.floor(Math.random() * n));
        }
        document.getElementById("password").value = password;
    }
</script>
<!-- 
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
</script> -->
@endpush
@extends('layouts.dashboard')


@section('title')
    Bagian Metodologi
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
                
        
        
      </section>
    </main>
@endsection

@push('after-scripts')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endpush
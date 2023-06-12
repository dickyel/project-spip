<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div>
        <button
            class="sidebarCollapseDefault btn p-0 border-0 d-none d-md-block"
            aria-label="Hamburger Button"
        >
            <i class="fa-solid fa-bars"></i>
        </button>
        <button
            data-bs-toggle="offcanvas"
            data-bs-target=".sidebar"
            aria-controls="sidebar"
            aria-label="Hamburger Button"
            class="sidebarCollapseMobile btn p-0 border-0 d-block d-md-none"
        >
            <i class="fa-solid fa-bars"></i>
        </button>
        </div>
        <div class="d-flex align-items-center justify-content-end gap-4">
        Hallo , Muhammad Dikky Purwanto 
        <a href="{{ route('content-profile') }}">
            <img
                src="{{ asset('./assets/images/avatar.jpg') }}"
                alt="Photo Profile"
                class="avatar"
                
            />
        </a> 
        

        </div>
    </div>
</nav>
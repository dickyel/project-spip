<nav
class="sidebar offcanvas-md offcanvas-start"
data-bs-scroll="true"
data-bs-backdrop="false"
>

    <div class="d-flex justify-content-end m-3 d-block d-md-none" >
        <button
            aria-label="Close"
            data-bs-dismiss="offcanvas"
            data-bs-target=".sidebar"
            class="btn p-0 border-0 fs-4"
        >
            <i class="fas fa-close"></i>
        </button>
    </div>
    <div class="d-flex justify-content-center mt-md-5 mb-5">
        <img
            src="{{ asset('./dashboard/assets/images/peruri-logo.png') }}"
            alt="Logo"
            width="140px"
            height="40px"
        />
    </div>

    <div class="pt-2 d-flex flex-column gap-5"> 

    
        <div class="menu p-0" style="max-height: calc(100vh - 200px); overflow-y: auto;">
            <p>Main Menu </p>
            <ul class="list-unstyled mb-4">
                <li>
                    <a href="{{ route('content-dashboard') }}" class="item-menu {{ (request()->is('content-dashboard')) ? 'active' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('content-methodology') }}" class="item-menu" class="item-menu ">
                        Metodologi SPIP
                    </a>
                    
                </li>
                <li>
                    <a href="#assesMenu " data-bs-toggle="collapse" aria-expanded="false" class="item-menu dropdown-toggle">
                
                        Asessment SPIP
                    </a>
                    <ul class="collapse list-unstyled" id="assesMenu">
                        <li>
                            <a href="#assesMenu2" class="item-menu" data-bs-toggle="collapse" aria-expanded="false" class="item-menu dropdown-toggle">Menu All Divisi</a>
                            <ul class="collapse list-unstyled" id="assesMenu2">
                            <li>
                                <a href="" class="item-menu">Kuesioner</a>
                            </li>
                            <li>
                                <a href="" class="item-menu">Status</a>
                            </li>
                            <li>
                                <a href="" class="item-menu">Skor Card</a>
                            </li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('content-work-letter') }}" class="item-menu ">
                    
                        Surat Tugas 
                    </a>
                </li>
                <li>
                    <a href="#" class="item-menu">
                    
                        Sampel Divisi
                    </a>
                </li>
                <li>
                    <a href="{{ route('content-entry-meet') }}" class="item-menu">
                    
                        Entry Meet
                    </a>
                </li>
                <li>
                    <a href="#kuesioner" data-bs-toggle="collapse" aria-expanded="false" class="item-menu dropdown-toggle">
                    
                        Internal Control Quisioner
                    </a>
                    <ul class="collapse list-unstyled" id="kuesioner">
                        <li>
                        <a href="#" class="item-menu">Lembar</a>
                        </li>
                        <li>
                        <a href="#" class="item-menu">Upload Data</a>
                        </li>
                        <li>
                        <a href="#" class="item-menu">Permintaan Dokumen</a>
                        </li>
                        <li>
                        <a href="#" class="item-menu">Expose Meet & Exit Meet</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('content-report') }}" class="item-menu">
                    
                        Laporan
                    </a>
                </li>
                <li>
                    <a href="{{ route('content-master-user') }}" class="item-menu">
                    
                        Master Data Pegawai
                    </a>
                </li>
            </ul>
        </div>
    
    
    </div>


</nav>
<ul class="nav nav-pills nav-fill mb-4">
    <li class="nav-item">
    <a class="nav-link {{ (request()->is('content-method*')) ? 'active' : '' }}" href="{{ route('content-methodology') }}">Master Metodologi SPIP</a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ (request()->is('content-guide*')) ? 'active' : '' }}" href="{{ route('content-guide') }}">Master Pedoman SPIP</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Grafik & Table</a>
    </li>
    <li class="nav-item">
    <a class="nav-link {{ (request()->is('content-other*')) ? 'active' : '' }}" href="{{ route('content-other') }}" >Lain - lain</a>
    </li>
</ul>
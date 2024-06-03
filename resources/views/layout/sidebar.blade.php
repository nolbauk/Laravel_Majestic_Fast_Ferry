<div class="sidebar">
    <div class="logo-details">
        <img src="{{asset('assets/majestic.png')}}" alt="" width="60" />
        <span class="logo_name"> Majestic</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/admin" class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="" >
                <i class="bx bx-box"></i>
                <span class="links_name">Jadwal</span>
            </a>
        </li>
        <li>
            <a href="{{ route('tujuanindex') }}" class="{{ Route::currentRouteName() == 'tujuanindex' ? 'active' : '' }}">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Tujuan</span>
            </a>
        </li>
    </ul>
</div>

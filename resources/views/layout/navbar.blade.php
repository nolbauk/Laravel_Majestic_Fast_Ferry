<nav>
    <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
    </div>
    <div class="profile-details">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Logout</span>
        </a>
    </div>
</nav>

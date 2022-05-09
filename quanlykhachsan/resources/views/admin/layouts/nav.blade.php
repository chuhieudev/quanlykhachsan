<nav class="main-header navbar navbar-expand navbar-info">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="mr-3" style="margin: auto;">
            Admin
        </li>
        <li class="nav-item mr-2">
            <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>

<style scoped>
.navbar {
    position: fixed;
    width: calc(100% - 250px);
}
</style>
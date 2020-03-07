<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
       
        <div>
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item px-3 {{ Request::is('/') ? 'active': ''}}">
                <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item px-3 {{ Request::is('vaccinations') ? 'active': ''}}">
                    <a class="nav-link" href="/vaccinations">Vaccinations</a>
                </li>
                <li class="nav-item px-3 {{ Request::is('profile') ? 'active': ''}}">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item px-3 {{ Request::is('about') ? 'active': ''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item px-3 {{ Request::is('analytics') ? 'active': ''}}"> 
                    <a class="nav-link" href="/analytics">Analytics</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
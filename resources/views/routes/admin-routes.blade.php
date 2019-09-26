<li class="nav-item">
    <a class="nav-link {{ Request::is('/admin/services*') ? 'active' : '' }}" href="#navbar-insiders" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
        <i class="ni ni-single-copy-04 text-primary"></i>
        <span class="nav-link-text">Services</span>
    </a>
    <div class="collapse {{ Request::is('/admin/services*') ? 'show' : '' }}" id="navbar-insiders">
        <ul class="nav nav-sm flex-column">
            <li class="nav-item">
                <a href="/admin/services/create" class="nav-link">Add</a>
            </li>
            <li class="nav-item">
                <a href="/admin/services" class="nav-link">Manage</a>
            </li>
        </ul>
    </div>
</li>

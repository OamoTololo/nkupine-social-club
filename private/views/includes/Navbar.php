<nav class="navbar navbar-expand-lg bg-body-tertiary p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="<?=ROOT?>/assets/images/Nkupine-logo.jpeg" class="border border-dark rounded" alt="Nkupine Logo" style="width: 50px;">Nkupine Social Club
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?=ROOT?>/HomeController">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/AdminController">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/MemberController">Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=ROOT?>/StuffController">Stuff</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<!--                        --><?php //= Auth::user() ? : 'Guest'; ?>
                        <i class="fas fa-cog ms-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="ProfileController">Profile</a></li>
                        <li><a class="dropdown-item" href="HomeController">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="LogoutController">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
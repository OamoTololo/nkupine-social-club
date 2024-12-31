<?php
$this->view('includes/Header');
?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-2">
        <div class="container-fluid d-flex align-items-center">
            <!-- Logo on the far left -->
            <a class="navbar-brand" href="/">
                <img src="<?=ROOT?>/assets/images/Nkupine-logo.png" class="border border-dark rounded-circle" alt="Nkupine Logo"
                     style="width: 65px;">
            </a>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <!-- Centered Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=ROOT?>/HomeController">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/AdminController">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/MemberController">Contribution</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/StuffController">Loans</a>
                    </li
                </ul>
            </div>

            <!-- Right-aligned dropdown -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog ms-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="LogoutController">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

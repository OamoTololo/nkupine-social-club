<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php
        $this->view('includes/BreadCrumbs');
        ?>
        <div class="row mt-3">
            <div class="col-sm-4 col-md-3">
                <img src="<?=ASSETS?>/images/user-logo.jpg" class="img-fluid border border-primary d-block mx-auto rounded"
                     alt="Nkupine Logo">
                <h3 class="text-center">Oamogetswe Mgidi</h3>
            </div>
            <div class="col-sm-8 col-md-9 bg-light p-2">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <tr><th>Name: </th><td>Oamogetswe</td></tr>
                        <tr><th>Surname: </th><td>Mgidi</td></tr>
                        <tr><th>Email: </th><td>oamotebogomgidi@gmail.com</td></tr>
                        <tr><th>Phone No: </th><td>0751435335</td></tr>
                        <tr><th>Bank: </th><td>Capitec</td></tr>
                        <tr><th>Account No: </th><td>00000000000000</td></tr>
                        <tr><th>Joined: </th><td>31-12-2024</td></tr>
                        <tr><th>Status: </th><td>Inactive</td></tr>
                    </table>
                </div>
                <!-- Edit Profile Button -->
                <div class="text-end mt-3">
                    <a href="/MemberController/editProfile" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="nav-link active">Profile</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Contributions</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Loans</a></li>
                    <li class="nav-item"><a href="" class="nav-link disabled">Social Contributions</a></li>
                </ul>

                <nav class="navbar bg-light">
                    <form action="" class="form-check-inline">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid
                                fa-search"></i>&nbsp</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                   aria-describedby="basic-addon1">
                        </div>
                    </form>
                </nav>
            </div>
        </div>
    </div>
<?php
$this->view('includes/Footer');
?>
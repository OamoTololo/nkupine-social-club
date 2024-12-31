<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php
        $this->view('includes/BreadCrumbs');
        ?>
        <div class="row">
            <div class="col-4">
                <img src="<?=ASSETS?>/images/user-logo.jpg" class="border border-primary d-block mx-auto rounded"
                     alt="Nkupine Logo"
                     style="width: 150px;">
            </div>
            <div class="col-8 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>Name: </th><td>Oamogetswe</td></tr>
                    <tr><th>Surname: </th><td>Mgidi</td></tr>
                    <tr><th>Email: </th><td>oamotebogomgidi@gmail.com</td></tr>
                    <tr><th>Phone No: </th><td>0751435335</td></tr>
                    <tr><th>Joined: </th><td>31-12-2024</td></tr>
                    <tr><th>Status: </th><td>Inactive</td></tr>
                </table>
            </div>
        </div>
        <div class="">

        </div>
    </div>

<?php
$this->view('includes/Footer');
?>
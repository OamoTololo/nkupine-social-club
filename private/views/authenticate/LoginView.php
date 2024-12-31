<?php
$this->view('includes/Header');
?>
    <div class="container-fluid">
        <div class="p-5 mt-5 mx-auto border border-dark shadow rounded" style="width: 100%; max-width: 340px;">
            <img class="border border-dark d-block mx-auto img-fluid rounded-circle" style="width: 200px; height: 190px;"
                 src="<?=ROOT?>/assets/images/Nkupine-logo.png" alt="Nkupine Logo">

            <form method="POST">
                <br>
                <h3 class="text-center">Login</h3>
                <input class="form-control" type="email" name="email" placeholder="Email" autofocus autocomplete="OFF"
                       required>
                <br>
                <input class="form-control" type="password" name="password" placeholder="Password" required>
                <br>
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
        </div>
    </div>
<?php
$this->view('includes/Footer');
?>

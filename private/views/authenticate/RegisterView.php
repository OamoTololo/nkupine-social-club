<?php
$this->view('includes/Header');
?>
<div class="container-fluid">
    <div class="p-5 mt-5 mx-auto border border-dark shadow rounded" style="width: 100%; max-width: 340px;">
        <img class="border border-primary d-block mx-auto img-fluid rounded-circle" style="width: 300px; height: 250px;"
             src="<?=ROOT?>/assets/images/Nkupine-logo.jpeg" alt="Nkupine Logo">

        <form method="POST">
            <h3 class="text-center">Login</h3>
            <input class="form-control" type="text" name="name" placeholder="Name" autofocus autocomplete="OFF" required>
            <br>
            <input class="form-control" type="text" name="surname" placeholder="Surname" autofocus autocomplete="OFF" required>
            <br>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
            <br>
            <input class="form-control" type="" name="password" placeholder="Password" required>
            <br>
            <button type="submit" class="btn btn-success w-100">Login</button>
        </form>
    </div>
</div>
<?php
$this->view('includes/Footer');
?>

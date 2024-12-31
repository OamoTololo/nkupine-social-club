<?php
$this->view('includes/Header');
?>
<div class="container-fluid">
    <div class="p-5 mt-5 mx-auto border border-dark shadow rounded" style="width: 100%; max-width: 340px;">
        <img class="border border-dark d-block mx-auto img-fluid rounded-circle" style="width: 200px; height: 190px;"
             src="<?=ROOT?>/assets/images/Nkupine-logo.png" alt="Nkupine Logo">

        <form method="POST">
            <h3 class="text-center"><i class="fa-solid fa-plus"></i> Add Member</h3>
            <input class="form-control" type="text" name="name" placeholder="Name" autofocus autocomplete="OFF" required>
            <br>
            <input class="form-control" type="text" name="surname" placeholder="Surname" autofocus autocomplete="OFF" required>
            <br>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
            <br>
            <input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number" required>
            <br>
            <input class="form-control" type="date" name="joiningDate" placeholder="Date" required>
            <br>
            <select class="form-control" name="status" id="status">
                <option value="inactive">Inactive</option>
                <option value="active">Active</option>
            </select>
            <br>
            <button type="submit" class="btn btn-success w-100">Add</button>
        </form>
    </div>
</div>
<?php
$this->view('includes/Footer');
?>

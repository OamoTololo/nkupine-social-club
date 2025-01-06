<?php
$this->view('includes/Header');
$this->view('includes/Navbar');
?>
    <div class="container-fluid">
        <h1><i class="fa-solid fa-plus"></i> Home</h1>
    </div>

<?php
    echo "<pre>";
    print_r($rows);
?>

<?php
$this->view('includes/Footer');
?>
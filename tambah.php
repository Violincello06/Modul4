<!DOCTYPE html>
<html lang="en">
<!-- INI ADALAH HALAMAN HEAD -->
<?php include ("partials/head.php"); ?>

<body>
    <div id="app">
        <!-- INI ADALAH SIDEBAR -->
        <?php include ("partials/sidebar.php"); ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
             <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Alat</td>
                <td><input type="text" name="nama_alat"></td>
            </tr>
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="merek"></td>
            </tr>
             <tr> 
                <td>Lokasi</td>
                <td><input type="text" name="lokasi"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_alat= $_POST['nama_alat'];
        $tahun = $_POST['tahun'];
        $merek= $_POST['merek'];
        $lokasi = $_POST['lokasi'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO alat(nama_alat,tahun,merek,lokasi) VALUES('$nama_alat','$tahun','$merek','$lokasi')");

        // Show message when user added
        echo "User added successfully. <a href='alat.php'>View Alat</a>";
    }
    ?>
                </section>
            </div>

            
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>
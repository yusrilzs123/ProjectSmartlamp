<?php
include 'koneksi.php';
    if (isset($_GET['status'])){
        $status = $_GET['status'];
        if ($status == 'ON1' || $status == 'offA') {
            $id_lmp = '1';
        }elseif ($status == 'ON2' || $status == 'offB') {
            $id_lmp = '2';
        }elseif ($status == 'ON3' || $status == 'offC') {
            $id_lmp = '3';
        }elseif ($status == 'ON4' || $status == 'offD') {
            $id_lmp = '4';
        }elseif ($status == 'ON5' || $status == 'offE') {
            $id_lmp = '5';
        }


        $updt = "UPDATE `lampu` SET `status` = '$status' WHERE `lampu`.`id_lampu` = '$id_lmp'";
        $query_sql = mysqli_query($conn, $updt);

            //Data berhasil ditambahkan
            if ($query_sql) {
                header('Location: controllamp.php');
            } else {
                header('Location: controllamp.php');
            }
        $conn-> close();
    }

?>

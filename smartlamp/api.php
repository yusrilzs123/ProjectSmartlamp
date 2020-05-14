<?php
    include 'koneksi.php';

    $command = "SELECT * FROM lampu";
    $query_sql = mysqli_query($conn, $command) or die(mysqli_error($conn));

            while ($data = mysqli_fetch_array($query_sql)) {
                $dataContainer[] =
                    array(
                            'id_lampu' => $data['id_lampu'],
                            'nama_lampu' => $data['nama_lampu'],
                            'status' => $data['status']
                        );
                }

            $strJsonFormat_with_space = json_encode(array("result" => $dataContainer));
            print $strJsonFormat_with_space;
?>

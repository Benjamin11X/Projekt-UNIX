<?php
    session_start();
    include 'connect.php';

    if(!empty($_GET['file'])){
        $filename = basename($_GET['file']);
        $file_and_path_name = $_GET['file'];

        header("Cache-Control: public");
        header("Content-Description: File transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");
        
        readfile($file_and_path_name);
        header("Location: account.php");
    }
?>
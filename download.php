<?php 

if(isset($_GET['key']) && $_GET['key']=='surya'){
    header('Content-Disposition: attachment; filename="peakpx.jpg"');
    header('Content-Type : image/jpeg');
    readfile(__DIR__. '/file/peakpx.jpg');
    exit();
    // echo "Sukses";
} else {
    echo "LINK INVALID";
}
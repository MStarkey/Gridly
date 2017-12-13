<?php
if(isset($_GET['grid'])){
    $grid = $_GET['grid'];
    $dir = 'files/grid'.$grid.'/modules';
    if (! is_dir($dir)) {
        exit('Invalid diretory path');
    }
    include('grid'.$grid.'/header.php');
    foreach (scandir($dir) as $file) {
        if ($file == '..' || $file == '.' || substr($file, -strlen(".DS_Store")) === ".DS_Store") continue;
        include_once($dir.'/'.$file);
        echo'<hr><h3 class="temp">&uparrow; Module '.$file.'</h3><hr>';
    }
    include('grid'.$grid.'/footer.php');
}
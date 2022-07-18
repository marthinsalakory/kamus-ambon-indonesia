<?php
include 'fungsi.php';

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $bahasa1 = $_POST['bahasa1'];
    $bahasa2 = $_POST['bahasa2'];
    // $input = 'beta nama';    
    $input = explode(' ', $input);
    if ($bahasa1 == 'ambon') {
        for ($i = 0; $i < count($input); $i++) {
            if (isset(first('kosakata', $bahasa1, $input[$i])->indonesia) && first('kosakata', $bahasa1, $input[$i])->indonesia != 'not yet defined') {
                $data[$i] = first('kosakata', $bahasa1, $input[$i])->indonesia;
            } else {
                $data[$i] = $input[$i];
            }
        }
    } else {
        for ($i = 0; $i < count($input); $i++) {
            if (isset(first('kosakata', $bahasa1, $input[$i])->ambon) && first('kosakata', $bahasa1, $input[$i])->ambon != 'not yet defined') {
                $data[$i] = first('kosakata', $bahasa1, $input[$i])->ambon;
            } else {
                $data[$i] = $input[$i];
            }
        }
    }
    $output = implode(' ', $data);
    echo $output;
} else {
    header("Location: terjemahkan_otomatis.php");
}

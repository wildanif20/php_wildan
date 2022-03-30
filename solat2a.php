<?php
function  formInput(){
    echo '<script type="text/javascript"> ';
    echo 'var inputname = prompt("Nama Anda :", "");';
    echo 'var inputage = prompt("Umur Anda :", "");';
    echo 'var inputhobby = prompt("Hobi Anda :", "");';
    echo 'alert(inputname+"\n"+inputage+"\n"+inputhobby);';
    echo '</script>';
}
formInput();
?>
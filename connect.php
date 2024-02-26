<?php
$dsn = "mysql:host=localhost;dbname=jsok8821_lhernandez;charset=utf8mb4";
try {
  $connection = new PDO($dsn, 'jsok8821_general', 'mTK{cdwIi-v+');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>
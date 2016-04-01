<?php
  $output = shell_exec('git pull');
  echo 'pulled! message: ' . $output;
?>

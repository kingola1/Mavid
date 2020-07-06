<?php
    ob_start();
    session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set ("display_errors", 1);
?>

        <?php
          $msg = '';

          if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

            if ($_POST['username'] == 'example' && $_POST['password'] == '1234') {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'example';

                echo 'You have entered valid username and password';
            }else {
                $msg = 'Wrong username or password';
            }

          }

          header("location: form.html")
        ?>

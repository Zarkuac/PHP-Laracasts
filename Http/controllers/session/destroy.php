<?php


use Core\Authenticator;

// logout user

(new Authenticator)->logout();


header('location: /');
exit();

?>
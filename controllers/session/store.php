<?php 

use Core\Validator;
use Core\App;
use Core\Database;


// log in user 

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide  a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password';
}

if(!empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

//dametchva psUser
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {

    if(password_verify($password, $user['password'])) {

        login([
            'email' => $email
        ]);
    
        header('location: /');
        exit();
    }

}


return view('session/create.view.php', [
    'errors' => [
        'email' => "No Matching account found for that email address and password."
    ]
]);
<?php
 
function login() {
        // validasi
    // $missingParameters = array();
    // if (!isset($_POST['username'])) {
    //     array_push($missingParameters, 'username');
    // }
    // if (!isset($_POST['password'])) {
    //     array_push($missingParameters, 'password');
    // }
    // reportMissingParameters($missingParameters);
    //     // logic
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    //         // response
    // Flight::json(array(
    //     "code"=>0,
    //     "message"=>"Succeed",
    //     "data"=>array(
    //         "username"=>$username,
    //         "realname"=>"Amri Shodiq"
    //     )
    // ));
    // die(var_dump($missingParameters));
    Flight::route('/', function(){
  echo 'hello world!';
});
}
 
// function reportMissingParameters($missingParameters) {
//     $parameters = implode(", ", $missingParameters);
//     Flight::json(array(
//         "code"=>1,
//         "message"=>"Missing parameter: ".$parameters.".",
//         "data"=>null
//     ));
//     exit();
// }
 
?>
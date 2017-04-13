<? 
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$text = @ trim ($_POST['text']);


#Send data
mail ("mail@mail.ru", //Enter your E-Mail
      "Theme mail", // Theme your E-Mail
      " Name:$name \n Email:$email \n Message: $text", //E-Mail included
      "Content-type:text/plain; charset=utf-8");

header ("Location: /thanks.html");
?>
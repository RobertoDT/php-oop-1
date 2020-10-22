<?php

//creo la classe
class User{
  public $username;
  public $email;
  public $password;
  public $id;
  public $name;
  public $lastname;

  // nel costruttore vanno i campi più importanti
  public function __construct($_username, $_email, $_password, $_id){

    $this->username = $_username;
    $this->email = $_email;
    $this->password = $_password;
    $this->id = $_id;

  }

}

//creo oggetti passando come parametri gli stessi parametri del costruttore e assegno valori non presenti nel costruttore
$user1 = new User("RobertDT", "robertodeltoro93@gmail.com", "123456789", 1);
$user1->name = "Roberto";
$user1->lastname = "Del Toro";

$user2 = new User("picopallo", "pinco.pallo@live.it", "987654321", 2);
$user2->name = "Pinco";
$user2->lastname = "Pallo";

$user3 = new User("pippo", "pippo@gmail.com", "ciao", 3);
$user3->name = "Pippo";
$user3->lastname = "Pippi";

$user4 = new User("pluto", "pluto@hotmail.it", "atutti", 4);
$user4->name = "Pluto";
$user4->lastname = "Pluti";

$user5 = new User("paperino", "paperino@libero.it", "nonsocosascrivere", 5);
$user5->name = "Paperino";
$user5->lastname = "Blabla";

//ragguppo gli oggetti in un array generale per poterli passare all'html
$utenti = [$user1, $user2, $user3, $user4, $user5];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Utenti</title>
  </head>
  <body>
    <div class="title">
      <h1>Lista utenti</h1>
    </div>
    <div class="wrapper">
      <?php foreach ($utenti as $user): ?>
        <div class="utente">
          <p><strong>ID: </strong><?php echo $user->id ?></p>
          <p><strong>Name: </strong><?php echo $user->name ?></p>
          <p><strong>Lastname: </strong><?php echo $user->lastname ?></p>
          <p><strong>Username: </strong><?php echo $user->username ?></p>
          <p><strong>Email: </strong><?php echo $user->email ?></p>
          <p><strong>Password: </strong><?php echo $user->password ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </body>
</html>

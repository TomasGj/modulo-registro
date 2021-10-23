<?php

include('db.php');

if (isset($_POST['save_task'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $profesor = $_POST['profesor']; //modificacion de codigo
  $query = "INSERT INTO task(title, description , profesor) VALUES ('$title', '$description', '$profesor')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Registro Guardado con exito';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>

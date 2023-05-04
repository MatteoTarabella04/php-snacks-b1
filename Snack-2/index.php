<!-- 
   ## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php

/* var_dump($_GET); */

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];


if ((strlen($name) > 3) && (str_contains($mail, '%40') || (str_contains($mail, '.'))) && (is_numeric($age))) {
   echo 'Accesso riuscito';
} else {
   echo 'Accesso negato';
}


?>

<!DOCTYPE html>
<html lang='en'>

<head>
   <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
      integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>

   <title>Snack-2</title>
</head>

<body>


   <div class="container">
      <div class="card m-auto col-6 rounded-0 shadow">
         <div class="card-header">
            Info
         </div>
         <div class="card-body">
            <form>
               <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="mail" class="form-label">E-Mail</label>
                  <input type="text" name="mail" id="mail" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="age" class="form-label">Age</label>
                  <input type="number" name="age" id="age" class="form-control">
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
   </div>


</body>

</html>
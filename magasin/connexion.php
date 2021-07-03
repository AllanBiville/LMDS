<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magasin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/36d8ba31b1.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
 crossorigin="anonymous"></script> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
 integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
 crossorigin="anonymous"></script>
 <link rel="stylesheet" href="style-magasin.css">  
 <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<body class="text-center"> 
<main class="form-signin">
  <form action="connexion2.php" method="POST">
    <img class="mb-4" src="../images/logo.png" alt="" width="72">
    <h1 class="h3 mb-3 fw-normal">Interface Magasin<br/>Connectez-vous !</h1>

    <div class="form-floating">
      <input autofocus="autofocus" type="username" name="username" class="form-control" id="floatingInput" placeholder=" ">
      <label for="floatingInput">Nom d'utilisateur</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder=" ">
      <label for="floatingPassword">Mot de passe</label>
    </div>
    <br/><br/>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
  </form>
</main>
</body>
</html>
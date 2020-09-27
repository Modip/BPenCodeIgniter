<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Codeigniter 4 users List Example - Tutsmake.com</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
   <H3>Bienvenue a la Banque du Peuple</H3>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('welcome_message') ?>"> Accueil </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Ajout Client Moral </a>
      </li>
    </ul>
  </div>
</nav>
   <div class="container mt-5">
      <form action="<?php echo base_url('Clientmoral/store'); ?>" method="POST">

         <div class="form-group">
            <label for="formGroupExampleInput"> Nom </label>
            <input type="text" name="nom" class="form-control" id="formGroupExampleInput">
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput"> Raison Social </label>
            <input type="text" name="raisonsocial" class="form-control" id="formGroupExampleInput">
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput"> Adresse </label>
            <input type="text" name="adresse" class="form-control" id="formGroupExampleInput">
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput"> Telephone </label>
            <input type="text" name="telephone" class="form-control" id="formGroupExampleInput" require>
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput"> E-mail </label>
            <input type="text" name="email" class="form-control" id="formGroupExampleInput">
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput"> Login </label>
            <input type="text" name="login" class="form-control" id="formGroupExampleInput">
         </div>
         <div class="form-group">
            <label for="formGroupExampleInput"> Password </label>
            <input type="password" name="password" class="form-control" id="formGroupExampleInput">
         </div>
         <button type="submit" class="btn btn-success mb-2"> Envoyer </button>
      </form>
   </div>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

   <script>
      $(document).ready(function() {
         $('#clientmoral').DataTable();
      });
   </script>
</body>

</html>
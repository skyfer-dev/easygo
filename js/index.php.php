<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
       <div class="col-md3">

       </div>
       <div class="col-md-6">
         <form role="form" class="form-horizontal" action="connexion.php" method="post">
           <legend>
             <img src="userpngimage15189.png" alt="image" id="img">
           </legend>
           <div class="form-group">
              <input type="text" name="pseudo" placeholder="Entrer votre nom " id="pseudo">
           </div>
           <div class="form-group">
              <input type="password" name="password" placeholder="Entrer votre mot de passe" id="password">
           </div>
           <div class="form-group">
             <input type="date" name="date">
             <!-- <span class="fa fa-calendar fa-2x "></span> -->
           </div>
           <div class="row">
             <div class="col-md-6">
               <button type="submit" name="buttonsubmit" class="btn btn-primary submit" >Valider</button>
             </div>
             <div class="col-md-6">
               <button type="reset" name="buttonreset" class="btn btn-danger">Annuler</button>
             </div>
           </div>
         </form>
         <div class="animated zoomInUp slower erreur" id="erreur">

         </div>
       </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="java2.js"></script>
    <script type="text/javascript">

    </script>
  </body>
</html>

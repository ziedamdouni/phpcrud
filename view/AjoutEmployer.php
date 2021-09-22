
<?php
include "../controller/employerC.php";
if(isset ($_POST ["submit"])){
$employer=new EmplyerController() ;
    // déclaration
    $cin=$_POST['cin'];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $nbHeures=$_POST["nbHeures"];
    $tarifHoraire=$_POST["tarifHoraire"];

    $employer->AjoutEmployer($cin,$nom,$prenom,$nbHeures,$tarifHoraire);
   ?>
<div class="container">
<div class="row justify-content-center">
    <table class="table">
        <thead>
    <tr>
    <th>Cin</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>NbHeures</th>
    <th>tarifHoraire</th>
    <th colspan="2">Action</th>
    </tr>
    </thead>


  
    <tr>
    <td><?php echo $cin ;  ?> </td>
    <td> <?php echo $nom ;  ?></td>
    <td><?php echo $prenom ;  ?></td>
    <td><?php echo $nbHeures ;  ?></td>
    <td><?php echo $tarifHoraire ;  ?></td>
    <td>
    <a href="AjoutEmployer.php?edit=<?php echo $row['id']; ?>"
    class="btn btn-info">Edit</a>
    <a href="employerC.php?delete=<?php echo $row['id']; ?>"
    class="btn btn-danger">Delete</a>
    </td>
    
    </tr>
    </table>
    </div>
   <?php   
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud_php</title>
     <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <body>
         
     
    
<!-- Formulaire -->

<form method="POST" action="">
<div class="label">CIN</div>
        <div class="champ">
<input type="number" name="cin" placeholder="enter cin...">
<div class="label">Nom</div>
        <div class="champ">
<input type="text" name="nom" placeholder="enter nom..." >
<div class="label">Prénom</div>
        <div class="champ">
<input type="text" name="prenom" placeholder="enter prenom..." >
<div class="label">NbHeures</div>
        <div class="champ">
<input type="number" name="nbHeures" placeholder="enter nbHeures ..." >
<div class="label">TarifHoraire</div>
        <div class="champ">
<input type="number" name="tarifHoraire" placeholder="enter tarifHoraire ..." >
<div class="but">
<button name="submit" class="btn btn-primary" type="submit"> Submit</button>
<button type="reset"  class ="btn btn-primary"> annuler</button>
</form>
</body>
</html>
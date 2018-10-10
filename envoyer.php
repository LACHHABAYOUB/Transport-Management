<?php
     $bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=easyloc' , 'root' , '');
         session_start();

?>
      
<?php
$login= $_SESSION['login'];

$req0=$bdd->query("select * from client where login='$login' ");
$donnees0=$req0->fetch();

$id_client=$donnees0['id_client'];
$nom_client=$donnees0['nom_client'];
$prenom=$donnees0['prenom'];
$adresse=$donnees0['adresse'];
$ville=$donnees0['ville'];
$cin=$donnees0['cin'];
	 ?>   

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet"  href="bootstrap-3.3.7/dist/css/bootstrap.min.css">

</head>
<style type="text/css">
	body {
    margin-top: 20px;
}
</style>
<body>
<?php 
    $date_tarif = date('d-m-Y H:i');


if(($_POST['nb_camions'] > 0 or $_POST['nb_nivelleuse']>0 or $_POST['nb_tractopelle']>0  or $_POST['nb_grue']>0  or $_POST['nb_pelle']	>0) and $_POST['prix_total']>0 and $_POST['nb_hours']>0 ){

    $nb_camions = $_POST['nb_camions'];
    $nb_nivelleuse = $_POST['nb_nivelleuse'];
    $nb_tractopelle = $_POST['nb_tractopelle'];
    $nb_grue = $_POST['nb_grue'];
    $nb_pelle = $_POST['nb_pelle'];

    $prix_total = $_POST['prix_total'];
    $nb_hours = $_POST['nb_hours'];


}else{
header("Location: " . $_SERVER["HTTP_REFERER"]);
}
?>


	<div class="container">
    <div class="row">
        <div class="well col-xs-11 col-sm-11 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>EasyLoc</strong>
                        <br>
                        2135 Ain Sbaa
                        <br>
                        Casablanca, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (212) 522-909090
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo $date_tarif; ?></em>
                    </p>
                    <p>
                        <em>Id client #: <?php echo $id_client;?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Reçu</h1>
                </div>
                <div style="margin-left: 10px">
                	<h4><b>Livré(e) à : </b></h4>
                	<span><b>Nom</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:   <?php echo $nom_client;?></span><br>
                	<span><b>Prénom</b> &nbsp;: <?php echo $prenom;?></span><br>
                	<span><b>Email</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <?php echo $adresse;?></span><br>
                	<span><b>Ville</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $ville;?></span><br>
                	<span><b>CIN</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:  <?php echo $cin;?></span><br>

                </div>
                 <hr style="border: 1px solid #ccc">
                  <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-md-6">Type vehicule</th>
                            <th class="text-center">#</th>
                            <th class="text-center">Prix / 1h</th>
                            <th class="text-center">Total / 1h</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        
                        <?php if($nb_camions >0){?>
	                        <td class="col-md-6"><em>Camion</em></h4></td>
	                        <td class="col-md-2" style="text-align: center"><?php echo $nb_camions; ?></td>
	                        <td class="col-md-2 text-center">1000 DH</td>
	                        <td class="col-md-2 text-center"><?php echo $nb_camions*1000; ?> DH</td>
                        </tr>
                        <?php }?>


                        <?php if($nb_nivelleuse >0){?>
                        <tr>
                            <td class="col-md-6"><em>Nivelleuse</em></h4></td>
	                        <td class="col-md-2" style="text-align: center"><?php echo $nb_nivelleuse; ?></td>
                            <td class="col-md-2 text-center">4000 DH</td>
                        <td class="col-md-2 text-center"><?php echo $nb_nivelleuse*4000; ?> DH</td>
                        </tr>
                        <?php }?>


                        <?php if($nb_tractopelle >0){?>
                        <tr>
                            <td class="col-md-6"><em>Tractopelle</em></h4></td>
                            <td class="col-md-2" style="text-align: center"><?php echo $nb_tractopelle; ?></td>
                            <td class="col-md-2 text-center">2200 DH</td>
                            <td class="col-md-2 text-center"><?php echo $nb_tractopelle*2200; ?> DH</td>
                        </tr>
                        <?php }?>


                        <?php if($nb_grue >0){?>
                         <tr>
                            <td class="col-md-6"><em>Grue</em></h4></td>
                            <td class="col-md-2" style="text-align: center"><?php echo $nb_grue; ?></td>
                            <td class="col-md-2 text-center">1800 DH</td>
                            <td class="col-md-2 text-center"><?php echo $nb_grue*1800; ?> DH</td>
                        </tr>
                        <?php }?>

                        
                        <?php if($nb_pelle >0){?>
                        <tr>
                            <td class="col-md-6"><em>Pelle hydraulique</em></h4></td>
                            <td class="col-md-2" style="text-align: center"><?php echo $nb_pelle; ?></td>
                            <td class="col-md-2 text-center">2800 DH</td>
                            <td class="col-md-2 text-center"><?php echo $nb_pelle*2800; ?> DH</td>
                        </tr>
                        <?php }?>
                        
                            
                         
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Nb heures: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php echo $nb_hours ; ?> h</strong></h4></td>
                        </tr>

                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php echo $prix_total ; ?> DH</strong></h4></td>
                        </tr>

                    </tbody>
                </table>
                <form >
                <a href="send.php" type="submit" onclick="validate();"> <button type="button" class="btn btn-success btn-lg btn-block">
                    Valider<span class="glyphicon glyphicon-chevron-right"></span>
                </button></a></td>
                <?php

                    $req = $bdd->prepare('INSERT INTO tarif(prix_total,id_clt,date_tarif) VALUES(?,?,?)');
                    $req->execute(array($_POST['prix_total'], $id_client, $date_tarif));
                 ?>
                </form>

                
            </div>
        </div>
    </div>


			<marquee><h4>Votre demande sera enregistée, nous vous invitons à imprimer le reçu et à nous visiter à notre magasin pour terminer votre demande. Si vous dépassez 3 jours votre demande de réservation sera automatiquement annulée</h4></marquee>
		  

</body>
</html> 
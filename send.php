<?php
     $bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=easyloc' , 'root' , '');
     session_start();
/*if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['adresse']) && isset($_GET['ville']) && isset($_GET['cin'])) {
	# code...

        $nom = $_GET['nom'];    
        $prenom = $_GET['prenom'];    
        $adresse = $_GET['adresse'];    
        $ville = $_GET['ville'];    
        $cin = $_GET['cin'];    


     	$req = $bdd->prepare('INSERT INTO client(nom_client,prenom,adresse,ville,cin) VALUES(?,?,?,?,?)');
        $req->execute(array($nom, $prenom, $adresse, $ville, $cin));
}*/
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
 <meta charset="utf-8" />

<link rel="stylesheet"  href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="nav.css" rel="stylesheet">


</head>
 <body background="1234.jpg"  style="background-size:cover"> 


<div id="flipkart-navbar">
    <div class="container">
        
        

        <div class="row row2">
            <div class="col-sm-5">

            	<?php 
                $date_tarif = date('d-m-Y H:i');
            	$login= $_SESSION['login'];
 			
				
				$req=$bdd->query("select * from client where login='$login' ");
				$data=$req->fetch();

				$nom_client=$data['nom_client'];
				$prenom=$data['prenom'];

				?>
				<h3><b><span style="color:#000; ;margin:20px;" class="largenav"><?php echo $date_tarif;?></span></b></h3>
                <h2><span style="margin:20px;" class="largenav">Bonjour : <b><?php echo $prenom." ".$nom_client; ?></b></span></h2>
            </div>
            
             <div style="margin-top: 20px" class="cart largenav col-sm-1">
              	 <a href="send.php" class="btn btn-success">
                   Accueil
                </a>
            </div>
            <div  style="margin-top: 20px" class="cart largenav col-sm-5">
              	 <a href="factures.php" class="btn btn-success">
                   Mes factures
                </a>
            </div>

            <div style="margin-top: 20px" class="cart largenav col-sm-1">
                <a href="deconnect.php" class="btn btn-danger">
                   Déconnexion
                </a>
            </div>
        </div>
    </div>
</div>
    
</div>
<div class="row">
		<div class="container">

      

          <img style="margin-top: 20px" src="12000.jpg" width="1200px" height="400px" >
         


  <table  style="margin-left:50px" CELLPADDING="200" CELLSPACING="200" WIDTH="90%" class="table table-striped table-condensed">
	
    <tbody>

	 <thead>
      <tr>
      	<th style="color: black"> Type vehicule </th>
        <th style="color: black">Camion</th>
        <th style="color: black">Nivelleuse </th>
        <th style="color: black">Tractopelle</th>
        <th style="color: black">Grue</th>
        <th style="color: black">Pelle hydraulique </th>
      </tr>
	  <tr>
        <th style="color: black">Prix par heure</th>
        <td>1000 DH </td>
        <td>4000 DH</td>
        <td>2200 DH</td>
        <td>1800 DH </td>
        <td>2800 DH </td>
      </tr>
    </thead>
                                   <h3><b>Vous souhaitez réserver :</b></h3>

        <section>    
            
                <div class="panel panel-default" id="reservation" style="border: 5px solid black">
                    <fieldset>
							<div style="border:0px solid black; margin-left:1px; margin-right:1px">
							
	<form method="POST" action="envoyer.php">
	
	<span hidden="true">$v = function lol(); $w = function hello();</span>
	
            
<div align="center">
	<input name="nb_camions" type="number" ID="id1" style="width:60px; height:20px ;margin-left:25px" value="0" min="0"  /> <label for="Un_chalet">Camion(s)</label>
<input name="nb_nivelleuse" type="number" ID="id2" style="width:60px; height:20px ;margin-left:25px" value="0" min="0"  /> <label for="Deux_chalets">Nivelleuse(s)</label>

<input name="nb_tractopelle" type="number" ID="id3" style="width:60px; height:20px ;margin-left:25px" value="0" min="0"  /> <label for="Un_chalet">Tractopelle(s)</label>
<input name="nb_grue" type="number" ID="id4" style="width:60px; height:20px ;margin-left:25px" value="0" min="0"  /> <label for="Deux_chalets">Grue(s)</label>


<input name="nb_pelle" type="number" ID="id5" style="width:60px; height:20px ;margin-left:25px" value="0" min ="0"  /> <label for="Deux_chalets">Pelle hydraulique(s)</label></div>
          
        </div>
								<p>
                                <label  for="date_debut">Date début</label>
                                <select name="jour" id="jourdebut">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
									<option value="05">05</option>
                                    <option value="06">06</option>
									<option value="07">07</option>
                                    <option value="08">08</option>
									<option value="09">09</option>
                                    <option value="10">10</option>
									<option value="11">11</option>
                                    <option value="12">12</option>
									<option value="13">13</option>
                                    <option value="14">14</option>
									<option value="15">15</option>
                                    <option value="16">16</option>
									<option value="17">17</option>
                                    <option value="18">18</option>
									<option value="19">19</option>
                                    <option value="20">20</option>
									<option value="21">21</option>
                                    <option value="22">22</option>
									<option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
									<option value="27">27</option>
                                    <option value="28">28</option>
									<option value="29">29</option>
                                    <option value="30">30</option>
									<option value="31">31</option>
                                </select>

								<?php /* //autre méthode
								 <label  for="date_debut">Date début</label>
                                <select name="jour" id="jourdebut">
                                    <?php 
									for ($i=1; $i<=31 ; $i++) { 
										echo "<option value=".$i.">".$i."</option>";

									}
									
                               
                                </select>*/?>

                                <select name="mois" id="moisdebut">
                                    <option value="01">Janvier</option>
                                    <option value="02">Fevrier</option>
									<option value="03">Mars</option>
                                    <option value="04">Avril</option>
									<option value="05">Mai</option>
                                    <option value="06">juin</option>
									<option value="07">Juillet</option>
                                    <option value="08">Aout</option>
									<option value="09">Septembre</option>
                                    <option value="10">octobre</option>
									<option value="11">Novembre</option>
                                    <option value="12">Decembre</option>
                                </select>

                                <select name="annee" id="anneedebut">
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
									<option value="2020">2020</option>
								    <option value="2021">2021</option>
                                </select>
                               
								<select name="heure debut" id="heuredebut">
									<option value="1">1h.00</option>
									<option value="2">2h.00</option>
									<option value="3">3h.00</option>
									<option value="4">4h.00</option>
									<option value="5">5h.00</option>
									<option value="6">6h.00</option>
									<option value="7">7h.00</option>
									<option value="8">8h.00</option>
                                    <option value="9">9h.00</option>
                                    <option value="10">10h.00</option>
									<option value="11">11h.00</option>	
								    <option value="12">12h.00</option>
									<option value="13">13h.00</option>
									<option value="14">14h.00</option>
									<option value="15">15h.00</option>
									<option value="16">16h.00</option>
									<option value="17">17h.00</option>
									<option value="18">18h.00</option>
									<option value="19">19h.00</option>
									<option value="20">20h.00</option>
									<option value="21">21h.00</option>
									<option value="22">22h.00</option>
									<option value="23">23h.00</option>
									<option value="0">00h.00</option>
                                </select>
                                </p>
								

								<p>
                                <label style="margin-right: 20px" for="date_fin">Date fin</label>

                                <select name="jour" id="jourfin">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
									<option value="05">05</option>
                                    <option value="06">06</option>
									<option value="07">07</option>
                                    <option value="08">08</option>
									<option value="09">09</option>
                                    <option value="10">10</option>
									<option value="11">11</option>
                                    <option value="12">12</option>
									<option value="13">13</option>
                                    <option value="14">14</option>
									<option value="15">15</option>
                                    <option value="16">16</option>
									<option value="17">17</option>
                                    <option value="18">18</option>
									<option value="19">19</option>
                                    <option value="20">20</option>
									<option value="21">21</option>
                                    <option value="22">22</option>
									<option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
									<option value="27">27</option>
                                    <option value="28">28</option>
									<option value="29">29</option>
                                    <option value="30">30</option>
									<option value="31">31</option>
                                </select>

                                <select name="mois" id="moisfin">
                                    <option value="01">Janvier</option>
                                    <option value="02">Fevrier</option>
									<option value="03">Mars</option>
                                    <option value="04">Avril</option>
									<option value="05">Mai</option>
                                    <option value="06">juin</option>
									<option value="07">Juillet</option>
                                    <option value="08">Aout</option>
									<option value="09">Septembre</option>
                                    <option value="10">octobre</option>
									<option value="11">Novembre</option>
                                    <option value="12">Decembre</option>
                                </select>

                                <select name="annee" id="anneefin">
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
									<option value="2020">2020</option>	
								    <option value="2021">2021</option>
                                </select>

								
								<select style="margin-left: 125px" name="heure fin " id="heurefin">
									<option value="1">1h.00</option>
									<option value="2">2h.00</option>
									<option value="3">3h.00</option>
									<option value="4">4h.00</option>
									<option value="5">5h.00</option>
									<option value="6">6h.00</option>
									<option value="7">7h.00</option>
									<option value="8">8h.00</option>
                                    <option value="9">9h.00</option>
                                    <option value="10">10h.00</option>
									<option value="11">11h.00</option>	
								    <option value="12">12h.00</option>
									<option value="13">13h.00</option>
									<option value="14">14h.00</option>
									<option value="15">15h.00</option>
									<option value="16">16h.00</option>
									<option value="17">17h.00</option>
									<option value="18">18h.00</option>
									<option value="19">19h.00</option>
									<option value="20">20h.00</option>
									<option value="21">21h.00</option>
									<option value="22">22h.00</option>
									<option value="23">23h.00</option>
									<option value="0">00h.00</option>
                                </select>
                                </p>
							
						<br>


    </tbody>
	
  </table>
                    </fieldset>  
                
			<input name="prix_total" min="0" TYPE="number" ID="id6" style=" margin-left : 170px ; width:100px;"  value="0" />
			<input class="btn btn-danger" type="button" onClick="lol();" value="Avoir le prix Total de Votre Reservation	" />	
			
			<input style=" margin-left : 100px;  width:50px" id="id0"  name="nb_hours" min="0" value="0" /> Heures	

			<br><br><br>
    <div align="center">
     
	 

	<a href="envoyer.php"><input id="buttonValidation" class="btn btn-success" style="width: 30%; font-color:white"  type="submit" value="Envoyer votre réservation" /></a>
           </div> </form>    
   
	    </section>
    </body>
</html>	

	<script type="text/javascript">
						function lol(){
							var a = document.getElementById('id1').value ;
							var b = document.getElementById('id2').value ;
							var c = document.getElementById('id3').value ;
							var d = document.getElementById('id4').value ;
							var z = document.getElementById('id5').value ;
							var e = document.getElementById('jourdebut').value ;
							var f = document.getElementById('moisdebut').value ;
							var g = document.getElementById('anneedebut').value ;
							var h = document.getElementById('heuredebut').value ;
							var i = document.getElementById('jourfin').value ;
							var j = document.getElementById('moisfin').value ;
							var k = document.getElementById('anneefin').value ;
							var l = document.getElementById('heurefin').value ;
						
	
  document.getElementById('id6').value =  

							(
											(

((parseFloat(k)-parseFloat(g)) * 8640)+ ((parseFloat(j)-parseFloat(f)) * 720)+ ((parseFloat(i)-parseFloat(e))	*24)
+ (parseFloat(l)-parseFloat(h)))
											*
										(
								 parseFloat(a)*1000 + parseFloat(b)*4000 + parseFloat(c)*2200 + parseFloat(d)*1800 + parseFloat(z)*2800
										)
							);


document.getElementById('id0').value =((

((parseFloat(k)-parseFloat(g)) * 8640)+ ((parseFloat(j)-parseFloat(f)) * 720)+ ((parseFloat(i)-parseFloat(e))	*24)
+ (parseFloat(l)-parseFloat(h)))*1);
};

	</script>
	<script type="text/javascript">
		/*var buttonValidation = document.getElementById('buttonValidation');
		var prixTotal = document.getElementById('id6').value;

		if(prixTotal >0){
			buttonValidation.prop('disabled', false); 
		}
		*/
		</script>

    <script>
    function check(input) {
      if (input.value != document.getElementById('email_addr').value) {
        input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
      } else {
        // le champ est valide : on réinitialise le message d'erreur
        input.setCustomValidity('');
      }
    }
</script>
<script type="text/javascript">
	<script type="text/javascript">
 var date = new Date();
 var heure =date.getHours();
 var minute=date.getMinutes();
 var seconde=date.getSeconds();
var f = function() {
if(seconde<59)
seconde++;
else
{minute++;seconde=00;}
if(minute>59)
{heure++;minute=0;}
document.getElementById("horloge").textContent=heure+":"+minute+":"+seconde;
 setTimeout(ff, 1000);
}
 setTimeout(f, 1000);
</script>
</script>


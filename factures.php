<?php
     $bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=easyloc' , 'root' , '');
         session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"  href="bootstrap-3.3.7/dist/css/bootstrap.min.css">

	<style type="text/css">
		.points_table thead {
	width: 100%;
}

.points_table tbody {
	height: 562px;
	overflow-y: auto;
	width: 100%;
}

.points_table thead tr{
	width: 99%;
}

 .points_table tr{
 	width: 100%;
 }

.points_table thead, .points_table tbody, .points_table tr, .points_table td, .points_table th{
	display: inline-block;
}

.points_table thead{
	background: #d91f2d;
	color: #fff;
}

.points_table tbody td, .points_table thead > tr> th{
	float: left;
	border-bottom-width: 0;
}

.points_table>tbody>tr>td, .points_table>tbody>tr>th, .points_table>tfoot>tr>td, .points_table>tfoot>tr>th, .points_table>thead>tr>td, .points_table>thead>tr>th{
	padding: 8px;
	height: 50px;
	text-align: center;
	line-height: 32px;
}

.odd {
	background: #ffffff;
	color: #000;
}

.even {
	background: #efefef;
	color: #000;
}

.points_table_scrollbar{
	height: 612px;
	overflow-y: scroll;
}

.points_table_scrollbar::-webkit-scrollbar-track{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.9);
	border-radius: 10px;
	background-color: #444444;
}

.points_table_scrollbar::-webkit-scrollbar{
	width: 1%;
	min-width: 5px;
	background-color: #F5F5F5;
}

.points_table_scrollbar::-webkit-scrollbar-thumb{
	border-radius: 10px;
	background-color: #D62929;
	background-image: -webkit-linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.4) 50%, transparent, transparent)
}

	</style>
</head>
<body>
	<div id="flipkart-navbar">
    <div class="container">
        
        

        <div class="row row2">
            
             <div style="margin-top: 20px" class="cart largenav col-md-offset-5 col-sm-1">
              	 <a href="send.php" class="btn btn-success">
                   Accueil
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
	<div class="row">
		<h2>Mes factures</h2>
		



            	<?php 
	            	$login= $_SESSION['login'];

					//recuperer id client
					$req=$bdd->query("select * from client where login='$login' ");
					$data=$req->fetch();
					$id_client=$data['id_client'];
					

					$req2=$bdd->query("select * from tarif where id_clt='$id_client' ");
						
								
				?>   
		<table class="points_table">
			<thead>
				<tr>
					<th class="col-xs-1">Facture N°</th>
					<th class="col-xs-6">Prix total</th>
					<th class="col-xs-5">Date</th>
				</tr>
			</thead>

			<tbody class="">
				<?php 
				while($data2=$req2->fetch()){	?>
				<tr class="odd">
					<td class="col-xs-1"><?php echo $data2['id_facture'];?></td>					
					<td class="col-xs-6"><?php echo $data2['prix_total']; ?> DH</td>
					<td class="col-xs-5"><?php echo $data2['date_tarif']; ?></td>
				</tr>
				<?php }?>

			
			



			</tbody>
		</table>
	</div>
</div>
</body>
</html>

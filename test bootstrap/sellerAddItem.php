<!DOCTYPE html>
<html lang="en">
<head>
	<!-- All includes-->
	<meta charset="utf-8">   
	<meta name="viewport" content="width =device-width , initial-scale = 1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="index.css" type="text/css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">  

</head>
<body style="padding:0;margin:0;">
<header>
	<div class="container-fluid bg-light align-items-center py-2 ">
		<div class="d-flex col-10 mx-auto align-items-center justify-content-between">
			<a class="navbar-brand align-self-center" style="height: 30px;" href="index.php">Yourmarket</a>
		</div>
	</div>
</header>


<div class="d-flex justify-content-between bg-secondary col-10 mx-auto p-0 m-0" style="height:45px;">
		
			<div class="d-flex flex-wrap">
				<?php 
	          if(isset($_GET["id"])) {
	          	echo "<a href='seller.php?id=".$_GET['id']."&seller' role='button' class='btn btn-secondary pt-3 fs-4 border-start border-end border-1 text-center'>Home</a>";
	            echo "<a href='sellerAddItem.php?id=".$_GET['id']."&seller' role='button' class='btn btn-dark pt-3 fs-4 border-start border-end border-1 text-center'>Add an item</a>";
	            echo "<a href='sellerDeleteItem.php?id=".$_GET['id']."&seller' role='button' class='btn btn-secondary pt-3 fs-4 border-start border-end border-1 text-center'>Delete an item</a>";
	          }

	        ?>
				

			</div>


			
			
			
		</div>


<h1 class="d-flex col-2  mx-auto text-center" style="margin-top: 10%">Add an item in the market:</h1><br>



	<form class="d-flex col-6  mx-auto my-3" action="<?php echo('adminAddItem.php?id='.$_GET['id'].'&seller')?>" method="post" enctype="multipart/form-data">

	<div class="d-flex flex-column col-6 px-auto border-start border-end border-2 justify-content-center align-items-center">
			<div>Email of the seller: <input style="width:150px;height: 25px; " type="text" name="email" value=<?php echo("'".$_GET['id']."'"." readonly='readonly'"); ?>  >    <br><br><br></div>
			<div>Name: <input style="width:150px;height: 25px;" type="text" name="name"><br><br><br></div>
			<div>Description: <textarea name="description"></textarea></div><br><br><br>
			<div>Date of Publication: <input style="width:150px;height: 25px; " type="Date" name="date"></div><br><br><br>
			<div>Condition: <input style="width:150px;height: 25px; " type="text" name="condition"></div><br><br><br>
			
			


	</div>


	<div class=" d-flex flex-column col-6 px-auto border-start border-end border-2 justify-content-center align-items-center ">
		Select Image File:<div><input type="file" name="image"></div><br>
		<div>Select a Category:&emsp;&emsp;

				
				  <input type="radio" id="Components" name="Category" value="1"
				         checked onclick="SubCategory()">
				  <label for="huComponentsey">Components</label>
				  <input type="radio" id="Devices" name="Category" value="2" onclick="SubCategory()">
				  <label for="Devices">Devices</label>
			</div>	<br><br>


			<div>Select a SubCategory :&emsp;&emsp;

				
				  <input type="radio" id="GraphicCard" name="SubCategory1" value="1" checked>
				  <label for="GraphicCard">GraphicCard</label>
				  <input type="radio" id="MotherBoard" name="SubCategory1" value="2">
				  <label for="MotherBoard">MotherBoard</label>
				  <input type="radio" id="Processor" name="SubCategory1" value="3">
				  <label for="Processor">Processor</label>
			</div>	<br><br>

			<div>Select a SubCategory :&emsp;&emsp;

				
				  <input type="radio" id="keyboard" name="SubCategory2" value="1"checked disabled="true">
				  <label for="keyboard">keyboard</label>
				  <input type="radio" id="mouse" name="SubCategory2" value="2"disabled="true">
				  <label for="mouse">Mouse</label>
				  <input type="radio" id="headset" name="SubCategory2" value="3"disabled="true">
				  <label for="Headset">Headset</label>
			</div>	<br><br>

			<div>Select a Category of Purchase:&emsp;&emsp;

				
				  <input type="radio" id="Buy It now" name="PurchaseCategory" value="2"checked>
				  <label for="Buy It now">Buy It now</label>
				  <input type="radio" id="Bid" name="PurchaseCategory" value="1">
				  <label for="Bid">Bid</label>
				  <input type="radio" id="Offer" name="PurchaseCategory" value="3">
				  <label for="Offer">Offer</label>
			</div>	<br><br>

			<div>Set the price: <input style="width:150px;height: 25px; " type="text" name="price"><br><br><br></div>

			<script type="text/javascript">
				function SubCategory()
				{
					if (document.getElementById("Components").checked) {
						document.getElementById("GraphicCard").disabled=false;
						document.getElementById("MotherBoard").disabled=false;
						document.getElementById("Processor").disabled=false;
						document.getElementById("keyboard").disabled=true;
						document.getElementById("mouse").disabled=true;
						document.getElementById("headset").disabled=true;
					}
					if (document.getElementById("Devices").checked) {
						document.getElementById("GraphicCard").disabled=true;
						document.getElementById("MotherBoard").disabled=true;
						document.getElementById("Processor").disabled=true;
						document.getElementById("keyboard").disabled=false;
						document.getElementById("mouse").disabled=false;
						document.getElementById("headset").disabled=false;
					}
				}
			</script>

		
		<input class="btn btn-primary" style="  height: 30px; width: 100px" type="submit" name="submit" id="submit">
	</div>

	</form>

	


</body>
</html>
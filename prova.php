<html>
<head>
<link rel="icon" href="icon.jpg" type="image/x-icon" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">	
</head>

<body background="fundo.jpg">
<form class="form-horizontal" action = "avalia.php" method = "post">

<!-- Form Name -->
<br><font face="courier" color="white" size=20><center><b>Simulado</b></center></font>

<div class="container">

<?php include ("questoes.php");

?>

<!-- Grupo de botões de radio -->

<div class="panel panel-info">
	
				<div class="panel-body">
						<h4>
							<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
							<?php 
								echo $variavel[0];
							?>
						</h4>
					</div>
					
					
				<div class="panel-footer">	
					
					<div class="radio">
					<label for="radios-0">
						<input name="radios" id="radios-0" value="1" type="radio">
						<?php  echo $variavel{1}; ?>
		</label>
		</div>
		
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      <?php  echo $variavel{2}; ?>
    </label>
	</div>
	
	
  <div class="radio">
    <label for="radios-2">
      <input name="radios" id="radios-2" value="3" type="radio">
      <?php  echo $variavel{3}; ?>
    </label>
	</div>
	
	
  <div class="radio">
    <label for="radios-3">
      <input name="radios" id="radios-3" value="4" type="radio">
      <?php  echo $variavel{4}; ?>
    </label>
	</div>

					
					
					</div>
</div>
									
<div class="panel panel-info">

				<div class="panel-body">
						<h4>
							<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
							<?php 
								echo $vard[0];
							?>
						</h4>
					</div>
					
					
				<div class="panel-footer">	
					
					
		
    <div class="radio">
    <label for="radios-0">
      <input name="radios1" id="radios-0" value="1" type="radio">
      <?php  echo $vard{1}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios1" id="radios-1" value="2" type="radio">
      <?php  echo $vard{2}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input name="radios1" id="radios-2" value="3" type="radio">
      <?php  echo $vard{3}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-3">
      <input name="radios1" id="radios-3" value="4" type="radio">
      <?php  echo $vard{4}; ?>
    </label>
	</div>

					
					
					</div>
</div>

<div class="panel panel-info">

				<div class="panel-body">
						<h4>
							<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
							<?php 
								echo $vart[0];
							?>
						</h4>
					</div>
					
					
				<div class="panel-footer">	
					
					
		
    <div class="radio">
    <label for="radios-0">
      <input name="radios2" id="radios-0" value="1" type="radio">
      <?php  echo $vart{1}; ?>
	  
	  
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios2" id="radios-1" value="2" type="radio">
      <?php  echo $vart{2}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input name="radios2" id="radios-2" value="3" type="radio">
      <?php  echo $vart{3}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-3">
      <input name="radios2" id="radios-3" value="4" type="radio">
      <?php  echo $vart{4}; ?>
	  
    </label>
	</div>

					
					
					</div>
</div>

<div class="panel panel-info">
				<div class="panel-body">
						<h4>
							<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
							<?php 
								echo $varqa[0];
							?>
						</h4>
					</div>
					
					
				<div class="panel-footer">	
					
					  <div class="radio">
						<label for="radios-0">
						<input name="radios3" id="radios-0" value="1" type="radio">
						<?php  echo $varqa{1}; ?>
				</label>
					</div>
					
  <div class="radio">
    <label for="radios-1">
      <input name="radios3" id="radios-1" value="2" type="radio">
      <?php  echo $varqa{2}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input name="radios3" id="radios-2" value="3" type="radio">
      <?php  echo $varqa{3}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-3">
      <input name="radios3" id="radios-3" value="4" type="radio">
      <?php  echo $varqa{4}; ?>
	  
    </label>
	</div>

					
					
					</div>
</div>

<div class="panel panel-info">
				<div class="panel-body">
						<h4>
							<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
							<?php 
								echo $varq[0];
							?>
						</h4>
					</div>
					
					
				<div class="panel-footer">	
					
					
		
   <div class="radio">
    <label for="radios-0">
      <input name="radios4" id="radios-0" value="1" type="radio">
      <?php  echo $varq{1}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios4" id="radios-1" value="2" type="radio">
      <?php  echo $varq{2}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input name="radios4" id="radios-2" value="3" type="radio">
     <?php  echo $varq{3}; ?>
    </label>
	</div>
  <div class="radio">
    <label for="radios-3">
      <input name="radios4" id="radios-3" value="4" type="radio">
     <?php  echo $varq{4}; ?>
	  
    </label>
	</div>

					
					
					</div>
</div>


<!-- Grupo de botões de radio -->

<input type = "hidden" name = "certas1" value = "<?php echo $altc[1];?>">
<input type = "hidden" name = "certas2" value = "<?php echo $altc[2];?>">
<input type = "hidden" name = "certas3" value = "<?php echo $altc[3];?>">
<input type = "hidden" name = "certas4" value = "<?php echo $altc[4];?>">
<input type = "hidden" name = "certas5" value = "<?php echo $altc[5];?>">
<input type = "submit" value = "Corrigir" <div id="preview" class="previewDiv" style="font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 15px; line-height: normal; font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; color: rgb(255, 255, 255); text-shadow: rgb(34, 34, 34) 0px -1px 1px; border: 0px inset rgb(255, 255, 255); box-shadow: rgb(0, 0, 0) 7px 6px 2px; border-radius: 0px 30px; padding: 11px 13px; cursor: pointer; background: rgb(21, 162, 219);">
</form>

</div>
</body>
</html>


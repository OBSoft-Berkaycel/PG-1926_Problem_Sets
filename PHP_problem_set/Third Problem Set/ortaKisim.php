
<?php 
if (isset($_POST["check"])) {
	
	checkNum($_POST["sayi_input"]);

} else {
	
 ?>
<form action="?" method="post">
	<input type="number"  class="input" name="sayi_input" id="sayi" autocomplete="off" placeholder="Sayi Giriniz...">
	<button type="submit" name="check" class="button">Check</button>	
</form>
	<?php 
		}
	 ?>	
<div id="block">
	
</div>
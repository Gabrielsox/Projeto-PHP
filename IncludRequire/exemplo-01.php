
<form>
	<input type="text" name="nome">
	<input type="text" name="sobrenome">
	<input type="date" name="nascimento">
	<input type="submit" name="ok">
</form>

<?php

if(isset($GET)) {

	foreach ($GET as $key => $value) {
		echo $key .": ".$value ." ". ;
	}
}

?>
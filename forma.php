<?php
if (isset($_POST['name']))
{
	echo $_POST['name'];
}
?>
<form method="post">

<input type="text" name="name"/>
<input type="submit" value="submit">
</form>


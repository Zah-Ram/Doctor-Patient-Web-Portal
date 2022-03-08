<?php
session_start();
session_destroy();
header('Location: index.php');


?>

<html>
<head>

</head>
<body>
<script type="text / javascript">
function preventBack(){
	
	window.history.forward();
	
}
setTimeout("preventBack()", 0);
window.onunload = function() {null};
</script>
</body>
</html>
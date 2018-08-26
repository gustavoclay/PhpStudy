<?php
//SESSÃO
session_start();
if(isset($_SESSION['mensagem'])):
?>
<script>
	//mensagem de sucesso ou não sucesso
	window.onload = function () {
		M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
	}

</script>

<?php
endif;
session_unset();

?>

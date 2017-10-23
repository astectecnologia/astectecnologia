

<style>
	#bg{
		width: 100%;
		height: 100%;
		position: fixed;
		top: 0;
		left: 0;
		background: rgba(0, 0, 0, 0.5);
		z-index: 6;

	}

	.modal-email{
		background: white;
		box-shadow: 0px 0px 1px 1px #ccc;
		position: absolute;
		z-index: 11;
		border: none;
		border-radius: 3px;
		font-family: arial, sans-serif;
		font-weight: 300;
		text-align: center;
		position: fixed;

	}
	.modal-header, 
	.modal-email-content,
	.modal-footer{
		width: 100%;
		height: auto;
		padding: 20px;
	
	}
	



	.modal-content{
		margin: 20px;
	}
	.modal-footer button{
		border: none;
		background: none;
		margin: auto;
		padding: 5px;
		width: 90%;

	}
	.modal-footer button:hover{
		background: #ddd;
		padding: 5px;
	}
	

	@media only screen and (min-width: 768px){
	.modal-email{
		left: 24%;

	}


</style>

<div id="bg"></div>

<div class="modal-email col-md-6 col-xm-8 col-sm-12">
	
	<div class="modal-header">
		
	</div>

	<div class="modal-email-content">
		<?php 
			if ($_SESSION['sent'] == "success") {
				echo "<p style='color: green;'>
							Email enviado com sucesso!
						</p>";
				unset($_SESSION['sent']);

			}elseif ($_SESSION['sent'] == 'fail') {
				echo "<p style='color: red;'>
							Ocorreu um erro ao eniar a mensagem! Tente novamente mais tarde..
						</p>";
				unset($_SESSION['sent']);
			}
		 ?>
	</div>

	<div class="modal-footer">
		<button onclick="closeModal()">Fechar</button>
	</div>

</div>


<script>
	function closeModal() {
		$('#bg').slideUp('slow');
		$('.modal-email').slideUp();
	}
</script>
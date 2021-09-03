<?php require_once "header.php"; ?>
		
		<div id="container-principal">
		
			<a class="container-blocks" href="reol">
				<img src="img/album/reol.jpg"/>
				<div class="container-block-text">
					REOL
				</div>
			</a>
			<?php
				foreach($dados as $dado){
					echo '
					<a class="container-blocks" href="./user/'.$dado['id'].'">
						<img src="./img/'.$dado['id'].'"/>
						<div class="container-block-text">
							'.$dado['nome'].'
						</div>
					</a>
					';
				}
				
			?>
			
		</div>
		<?php require_once "footer.php" ?>
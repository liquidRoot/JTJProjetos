<?php
include "includeHeader.php";
?>


<section id="formularioAtualizarSolucao">

<h1>Atualizar Solução</h1>

	<form id="atualizarSolucao" name="atualizarSolucao" class="slucao" method="post" action="atualizarSolucao.php">
		
		<p>
			<label>Solução a ser Atualizado</label>
			<input id="newSolucao" name="newSolucao" type="text" placeholder="Solucão a Atualizar" required="required"/>
    	</p>

		<p>
			<label>Nova Solução Encontrada</label>
			<textarea id="novaDescr" name="novaDescr" type="text" placeholder="Nova descrição da solução" required="required"> </textarea>
		</p>
    	    	
    	<p>
			<label>Situação</label>
			<select id="situacaoNova" name="situacaoNova">
				<option value="aberto">Em Aberto</option>
				<option value="fechado">Finalizado</option>
			</select>

			</p>
	
		<p>
			<label>Nova Descrição da Situação</label>
			<textarea id="novaSituacao" name="novaSituacao" type="text" placeholder="Nova Descrição da Situação"> </textarea>
				</p>
	
		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>
		


	</form>

</section>



<?php
include "includeFooter.php";
?>
<?php
include "includeHeader.php";
?>


<section id="formularioUsuario">

<h1>Cadastrar Solução</h1>

	<form id="includeSolucao" name="includeSolucao" class="usuario" method="post" action="includeSolucao.php">
		
		<p>
			<label>Numero do Chamado</label>
			<input id="numChamadoSolucao" name="numChamadoSolucao" type="text" placeholder="Número do Chamado Solucionado" required="required"/>
		</p>

		<p>
			<label>Descrição da Solução</label>
			<textarea id="descr_solucao" name="descr_solucao" type="text" placeholder="Descreva a Solução encontrada" required="required"></textarea>
    	</p>
    	    	
    	<p>
			<label>Situação</label>
			<select id="situacao" name="situacao">
				<option value="aberto">Em Aberto</option>
				<option value="fechado">Finalizado</option>
			</select>

			</p>
	
		<p>
			<label>Descrição da Situação</label>
			<textarea id="descr_situacao" name="descr_situacao" type="text" placeholder="Descreva a Situação Atual" required="required"></textarea>
    	</p>
	
	<p>
			<label>Numero do Atendimento</label>
			<input id="numAtendeSolucao" name="numAtendeSolucao" type="text" placeholder="Número do Atendimento Solucionado" required="required"/>
		</p>
				<p>


				

			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>
		


	</form>

</section>



<?php
include "includeFooter.php";
?>
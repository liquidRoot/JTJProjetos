<?php
include "includeHeader.php";
?>


<section id="formularioAtendimento">

<h1>Atualizar Atendimento</h1>

	<form id="suporteAtendimento" name="suporteAtendimento" class="atendimento" method="post" action="atualizarAtendimento.php">
		
		<p>
			<label>Atendimento a Ser Atualizado</label>
			<input id="num_atendimento" name="num_atendimento" type="text" placeholder="Numero do Atendimento" required="required"/>
		</p>

		<p>
			<label>Tipo do Problema</label>
			<select id="modulo_sistema" name="modulo_sistema" required="required">

				<option value="software">Software</option>
				<option value="hardware">Hardware</option>
			</select>
    	</p>
    	    	
    		
		<p>
			<label>Situação</label>
			<select id="situacao" name="situacao">
				<option value="aberto">Em Aberto</option>
				<option value="fechado">Finalizado</option>
			</select>

			</p>
	
		<p>
			<label>Assunto</label>
			<input id="assunto" name="assunto" type="text" placeholder="Assunto especifico do chamado"> 
				</p>
	
<p>
			<label>Descrição do Atendimento</label>
			<textarea id="descr_atendimento" name="descr_atendimento" rows="8" cols="1" placeholder="Descreva Como esta o atendimento" required="required" maxlenght="250"/></textarea>
    	</p>

<p>
			<label>Data Encerramento</label>
			<input id="data_encerramento" name="data_encerramento" type="text" placeholder="Exemplo: 2014-06-08"> 
				</p>

			<label>Prioridade</label>
			<select id="prioridade" name="prioridade">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
		<p>	

			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>
		


	</form>

</section>



<?php
include "includeFooter.php";
?>
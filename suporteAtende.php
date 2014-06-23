<?php
include "includeHeader.php";
?>


<section id="formularioAtendimento" class="formulario">

	<h1>Atender Chamado</h1>

	<form id="suporteAtendimento" name="suporteAtendimento" class="atendimento" method="post" action="includeAtendimento.php">
		
		<p>
			<label>Chamado a Ser Atendido</label></br>
			<input id="num_chamado" name="num_chamado" type="text" placeholder="Numero do Chamado" required="required"/>
		</p>

		<p>
			<label>Assunto</label></br>
			<input id="assunto" name="assunto" type="text" placeholder="Assunto especifico do chamado" checked="checked"/> 
		</p>

		<p>
			<div id="formSelect">
				<label>Tipo do Problema </label></br>
				<select id="modulo_sistema" name="modulo_sistema" required="required">
					<option value="software">Software</option>
					<option value="hardware">Hardware</option>
				</select>
			</div>
			<div id="formSelect">
				<label>Situação </label></br>
				<select id="situacao" name="situacao">
					<option value="aberto">Em Aberto</option>
					<option value="fechado">Finalizado</option>
				</select>
			</div>
			<div id="formSelect">
				<label>Prioridade </label></br>
				<select id="prioridade" name="prioridade">
					<option value="1">baixa</option>
					<option value="2">media</option>
					<option value="3">alta</option>
				</select>
			</div>
		</p>
		
		<p>
			<label>Descrição do Atendimento</label></br>
			<textarea id="descr_atendimento" name="descr_atendimento" rows="8" cols="1" placeholder="Descreva Como esta o atendimento" required="required" checked="checked" maxlenght="250"/></textarea>
		</p>

		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>		

	</form>

</section>



<?php
include "includeFooter.php";
?>
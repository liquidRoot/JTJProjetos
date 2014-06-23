<section id="formulario">

	<h1>Chamado</h1>

	<form id="chamado" class="chamado" method="post" action="criarChamado.php" accept-charset="UTF-8">
		
		<p id="Assunto">
			<label>Assunto</label>
			<input id="assunto" name="assunto" type="text" placeholder="Digite o porque esta criando esse chamado" required="required"/>
		</p>
		
		<p id="prioridade">
			<label id="prioridade">Prioridade</label><br/>
			<select unselectable=" " >
				<option>Baixa</option>
				<option>Media</option>
				<option>Alta</option>
				<option>Critica</option>
				<option>Todas as Alternativas</option>
			</select>
		</p>

		
		<p id="descricaoChamado">
			<label>Descrição do Chamado</label>
			<textarea id="descricaoChamado" name="descricaoChamado" rows="8" cols="1" placeholder="Descreva qual é o motivo do seu chamado, da forma mais clara possivel" required="required" maxlenght="250"/></textarea>
		</p>
		
		<p id="">
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>


	</form>

</section>
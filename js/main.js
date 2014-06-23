$(function(){
	$("#data").datepicker();
	
	//manter 'select' limpos
	$('<option selected> ------ </option>').prependTo('select');

	//funções de mascara - js/jquery.maskedinput.js
	$('#telefone').mask("(99) 99999-9999");
	
	$('#dialog').dialog({
		autoOpen: false;
		width: 30%;
		modal: true;
		resizable: false;
		buttons: {
			"OK": function(){
				document.submit();
			}
			"Cancelar": function() {
				$(this).dialog("close");
			}
		};

	});
	
	$('#msgErro').dialog({
		autoOpen: false;
		width: 30%;
		modal: true;
		resizable: false;
		buttons: {
			"OK" : function(){
				//implementar o redirecionamento aqui 
			}
		}
	});

	$('#msgErroLogin').dialog({
		autoOpen: false;
		width: 30%;
		modal: true;
		resizable: false;
		buttons: {
			"OK": function(){
				//implementar o redirecionamento aqui 
		}
	};

});

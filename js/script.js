const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
	e.preventDefault();
})

$(document).ready(function(){

	$("#btnEnviar").click(function(){
		var autor = $("#autor").val();
		var fonte = $("#fonte").val();
		var titulo = $("#titulo").val();
		var conteudo = $("#conteudo").val();

		if(autor == '' || fonte == '' || titulo == '' || conteudo == ''){
			alert('Não foi possível cadastrar a notícia!');
			location.reload();
		}
		else{
			$.ajax({
				url : "create.php",
				type : 'post',
				data : {
					 autor,
					 fonte,
					 titulo,
					 conteudo
				}
		   })
		   .done(function(msg){
				alert("Notícia cadastrada!");
				location.reload();
		   })
		   .fail(function(jqXHR, textStatus, msg){
				alert(msg);
		   });
		}

	})
	
})
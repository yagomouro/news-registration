$(document).ready(function(){

	$("#buttonSub").click(function(){

		$.ajax({
		     url : "create.php", //Arquivo que receberá os dados
		     type : 'post', //Método
		     data : {
		          nome : txt_nome//dados a serem processados pelo arquivo
		     },
		     beforeSend : function(){
		          $("#resultado").html("ENVIANDO..."); //Gif de processando
		     }
		})
		.done(function(msg){
		     $("#resultado").load("ler.php"); //Exibindo os dados com sucesso
		})
		.fail(function(jqXHR, textStatus, msg){
		     alert(msg); //Caso nada acima funcione...(erro)
		});

	})
	
})
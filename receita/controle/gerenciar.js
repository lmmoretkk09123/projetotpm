$(document).ready(function(){
$('tbody').empty();
var url="gerenciar.php";
$.ajax({
type:'POST',
dataType:'json',
url: url,
async: true,
success:function(dados){
for(var i = 0; i< dados.length; i++){
	let gerenciar = `
	<tr>
	<td>` + dados[i].Nomedareceita+`</td>
	<td>` + dados[i].Ingredientes+`</td>
	<td>` + dados[i].Modo de preparo +`</td>
	<td>` + dados[i].Tempo+`</td>
	<td>` + dados[i].Rendimento+`</td>

	<td class="text center"><button class="btn btn-sucess"><i class="mdi mdi-eye-outline mdi-10px" title="Visualizar"></i></button>
	<button class="btn btn-warning"><i class="mdi-border-color mdi-10px" title="Alterar"></i></button>
	<button class="btn btn-danger"><i class="mdi-trash-can-outline mdi-10px" title="Excluir"></i></button></td>
	</tr>
	`;
	$('tbody').append(gerenciar);
}
}
});
});
$(document).ready(function(){
$(".btn-add").click(function(e){
e.preventDefault();
var url="formprof.php";
var dados=$('#formprof').serialize();


$.ajax({
type:'POST',
dataType:'json',
url: url,
async: true,
data: dados,
success:function(dados){
	swal("SisInfo Informa:", formprof.return, "success");
}
});
});
});
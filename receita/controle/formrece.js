$(document).ready(function(){

    $(".leticia").click(function(e){
    
    e.preventDefault();
    
    var url="formrece.php";
    var dados=$('#formrece').serialize();
    
    
    $.ajax({
    type:'POST',
    dataType:'json',
    url: url,
    async: true,
    data: dados,
    success:function(dados){
        swal("Receita Informa:", dados.return, "success");
    }
    });
    });
    });
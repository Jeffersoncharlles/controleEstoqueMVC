var buscar = document.getElementById("busca").focus();



/*jquery mask*/
$(function(){
    //selecionar campo
    $('input[name=price]').mask("#.##0,00", {reverse: true});
});
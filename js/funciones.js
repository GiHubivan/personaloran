function saludo(){
    alert("hola");
    
}
function elimina_persona(id){
if (confirm("desea eliminar los datos completamente")){
 location.href='eliminar.php?id='+id+'';
}
}
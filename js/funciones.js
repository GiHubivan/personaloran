function saludo(){
    alert("hola");
    
}
function elimina_persona(id,apellido){
if (confirm("desea eliminar los datos de : "+apellido+" completamente")){
 location.href='eliminar.php?id='+id+'';
}
}
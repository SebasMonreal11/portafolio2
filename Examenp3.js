
  $('#fecha_nac').on('change', function(){
  $('#edad').val(Calcular_Edad());
});

var edad = $("#edad").val();
  if (edad == fecha_Actual) {
    document.getElementById("Felicidades obtienes un descuento!").innerHTML;
  }
 
function Calcular_Edad()
{
  var fecha_seleccionada = $('#fecha_nac').val();
  var fecha_nacimiento = new Date(fecha_seleccionada);
  var fecha_Actual = new Date();
  var edad = (parseInt((fecha_Actual - fecha_nacimiento) / (1000*60*60*24*365)));
  return edad;

}

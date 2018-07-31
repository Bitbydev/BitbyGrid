$(document).ready(function(){
  $('#blanco').click(function(){
    $('body').css('background-color', '#FFFFFF');
    $('h2').css('color', '#000000');
  });

  $('#negro').click(function(){
    $('body').css('background-color', '#000000');
    $('h2').css('color', '#FFFFFF');
  });

  var valor = 0;
  var val = "";
  $('#progresoPlus').click(function () {
    valor += 5;
    if (valor > 100) {
      valor = 100;
    }
    val = String(valor) + '%';
    $('.bar').css('width', val);
  });
  $('#progresoMinus').click(function () {
    valor -= 5;
    if (valor < 0) {
      valor = 0;
    }
    val = String(valor) + '%';
    $('.bar').css('width', val);
  });
});

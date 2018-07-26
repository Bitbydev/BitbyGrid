$(document).ready(function(){
  $('#blanco').click(function(){
    $('body').css('background-color', '#FFFFFF');
    $('h2').css('color', '#000000');
  });

  $('#negro').click(function(){
    $('body').css('background-color', '#000000');
    $('h2').css('color', '#FFFFFF');
  });
});

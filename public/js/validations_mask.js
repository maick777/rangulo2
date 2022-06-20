/*var telefono = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
  options = {
    onKeyPress: function (val, e, field, options) {
      field.mask(telefono.apply({}, arguments), options);
    }
  };


var celular = function (val) {
  return val.replace(/\D/g, '').length === 9 ? '000-000-000' : '000-0000-009';
},
  options = {
    onKeyPress: function (val, e, field, options) {
      field.mask(celular.apply({}, arguments), options);
    }
  };

$('.val_phone').mask(telefono, options);
$('.val_cell_phone').mask(celular, options);

*/

/*
document.getElementById('input-celular').addEventListener('input', function (e) {
  var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})/);
  e.target.value = !x[2] ? x[1] : x[1] + '-' + x[2] + (x[3] ? '-' + x[3] : '');
});
*/


$('.val-phone').mask('000-000-000');

$('.val-ruc').mask('00000000000');

$('.val-money').mask('000,000,000.00', {reverse: true});

$('.val-metros').mask('000,000', {reverse: true});

$('.val-date').mask('99/99/9999');

$(".val-decimal").mask("000.000.000.000", {reverse: true});

$(".val-year").mask("0000");

$(".val-dig-5").mask("00000");

$(".val-dig-3").mask("000");

$(".val-dig-2").mask("00");

$(".val-dig-1").mask("0");

$(".val-email").mask("aaaaa@gmail.com");

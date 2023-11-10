var line = 1;
function addInput(divName) {
  var newdiv = document.createElement('div');
  newdiv.innerHTML  = '['+line +']';
  newdiv.innerHTML += '<input type="text" name="text'+line +'_1" id="text'+line +'_1">';
  newdiv.innerHTML += '<input type="text" name="text'+line +'_2" id="text'+line +'_2">';
  document.getElementById(divName).appendChild(newdiv);
  line++;
}

addInput('lines');
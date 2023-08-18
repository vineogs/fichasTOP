/* ZONA DE TESTE / Atributos brutos (Sem uso de DB)*/
var forc = 3;
var vig = 2;
var agi = 1;
var int = 2;
var pre = 4;

var forc_bonus = 5;
var vig_bonus = 5;
var agi_bonus = 5;
var int_bonus = 0;
var pre_bonus = 0;

var pericia_bonus = 0;

document.addEventListener('DOMContentLoaded', function() {
    var el = document.querySelector('.tabs');
    var instance = M.Tabs.init(el);
});

function rolagem(lados, quantidade, bonus){
    var rolagens = [];
    for (var i = 0; i < quantidade; i++){
        var roll = Math.floor(Math.random() * lados) + 1;
        rolagens.push(roll);
    }
    
    var resultado = Math.max(...rolagens);
    var total = resultado + bonus;

    if(bonus > 0){
        alert(`Resultado: ${resultado} + ${bonus} = ${total}\nDados Rolados: ${rolagens}`);
    }else{
        alert(`Resultado: ${resultado}\nDados Rolados: ${rolagens}`);
    }
}
var caixalogin = document.getElementById('container-login');
var login = document.getElementById('login');
login.addEventListener("click",abrir);

function abrir(){
    caixalogin.style.display = "flex"
}

var caixaexcluir = document.getElementById('container-excluir');
var exclusao = document.getElementById('exclusao');
exclusao.addEventListener("click",excluir)

function excluir(){
    caixaexcluir.style.display = "flex";
}

AOS.init()
$('#fone').mask('(00) 00000-0000');





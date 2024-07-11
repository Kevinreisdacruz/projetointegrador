function mostrarsenha(){
    var inputpass = document.getElementById('senha')
    var btnshowpass = document.getElementById('btn-senha')

    if(inputpass.type === 'password'){
        inputpass.setAttribute('type','text')
        btnshowpass.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }else{
        inputpass.setAttribute('type','password')

        btnshowpass.classList.replace('bi-eye-slash-fill','bi-eye-fill')
    }

}
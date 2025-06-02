function logar(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    
    if(login == "laysa@gmail.com" && senha == "1234"){
        alert('sucesso');
        location.href = "index.php";
    } else{
        alert("email ou senha incorretos");
    }

}
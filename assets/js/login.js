// VALIDAR USUARIO
var pessoas =[
	{
		nome:"Davi",
		usuario: "davi@gmail.com",
		senha: "1234"
	},
	{
		nome:"Andressa",
		usuario: "andressa@gmail.com",
		senha: "1234"
	},
	{
		nome:"Raphael",
		usuario: "raphael@gmail.com",
		senha: "1234"
	}
]

function validar(form){
	const cpf = form.cpf.value;
	const senha = form.senha.value;
	for(i= 0 ;i<pessoas.length; i++){
		if(cpf == pessoas[i].usuario && senha == pessoas[i].senha){
			alert("Bem Vindo" + " "+pessoas[i].nome)
            window.open("atendimento.html");
		}break
	}
	for(i= 0 ;i<pessoas.length; i++){
		if(cpf != pessoas[i].usuario ){
			alert("Usuario Incorreto")
		}break
	}
	for(i= 0 ;i<pessoas.length; i++){
		if(senha != pessoas[i].senha ){
			alert("Senha Incorreta")
		}break	
	}	
}
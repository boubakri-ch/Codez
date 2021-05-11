function connex() {
	var login=f.login.value;
	var pwd= f.pwd.value;
	if (login =="" || pwd=="") {
		alert("verifier vos champs");
	}
	else {
		if (pwd.length < 8)
		{ alert ("le mot de passe doit etre superieur à 8");
		}
}
}
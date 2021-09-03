function LoginKanBang(){
	let dataLogin = {
		username: document.querySelector('input[name="username"]').value,
		password: document.querySelector('input[name="password"]').value
	}

	if(dataLogin.username == "" || dataLogin.password == ""){
		if(dataLogin.username == ""){
			document.querySelector('#check-username').textContent = "Username wajib di isi"
		}else if(dataLogin.password == ""){
			document.querySelector('#check-password').textContent = "Password wajib di isi"
		}
	}else{
		ValidationLogin(dataLogin)
	}

}


function ValidationLogin(data){
	const fakes = [
		{id: 1, username: 'admin', password: 'admin123'},
		{id: 2, username: 'user', password: 'user123'}
	]

	const validation = fakes.some(d => d.username === data.username)

	if(validation){
		const checkPassword = fakes.some(p => p.password === data.password)
		if(checkPassword){
			alert(`Selamat datang ${data.username}`)
			const token = generateToken(200)
			console.log(token)
			const saveUser = {
				username: localStorage.setItem('username', data.username),
				token: localStorage.setItem('token', token)
			}
			document.location.href="user.html"
		}else{
			alert("Dek abang kan sudah bilang lelah tadi")
		}
	}else{
		alert("Dek kita kan belum resmi ke k.u.a")
	}

}

const generateToken = (length)=> {
	return Math.random().toString(20).substr(2, length)
}


function UserLogin(token){
	if(token){
		location.href="user.html"
	}
}
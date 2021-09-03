async function checkLogin(data){
	const check = await data.token ? true : false
	// console.log(check)
	return check
}

const domElement = (data) => {
	console.log(data)
	const title = document.getElementById('username-title')
	const body = document.getElementById('username-body')
	title.textContent = `Halaman - ${data.username}`
	body.textContent = `Halaman - ${data.username}`
}

const LogOut = () => {
	confirm = confirm("Yakin mau logout bang ? ")
	if(confirm){
		alert(`Selamat tinggal bang ${localStorage.getItem('username')}`)
		localStorage.removeItem('username')
		localStorage.removeItem('token')
		document.location.href="index.html"
	}
	alert("Ok lah!")
}

const keyword = document.querySelector('input[name="keyword"]')
const hasil = document.getElementById('hasil')

function BangNgojekGakBang(){
	hasil.innerHTML = ''
	const loading = document.createElement('img')
	loading.textContent="oh iya loading yah bang !"
	loading.src = 'https://bigtalent.id/style_bigtalent/images/loader.gif'

	const q = keyword.value.replace(" ", "")
	if(q !== ""){
		CariVideoYoutube(q)
		.then(response => response.json())
		.then(res => {
			const embeds = res.data.items
			keyword.value = ''
			document.getElementById('loading').appendChild(loading)
			let list = ''
			embeds.map(m => list+=EmbedList(m))
			setTimeout(()=>{
				hasil.innerHTML = list
				document.getElementById('loading').innerHTML=''
			}, 2500)
		})
		.catch(err => console.log(err.response))
	}else{
		alert("Isi dulu dong bang dompetnya")
		hasil.innerHTML = `
			<h1>Saya bilang juga apa bang </h1>
		`
	}
}


function EmbedList(m){
	console.log(m)
	return `

		<h1>${m.snippet.title}</h1>
		<br/>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/${m.id.videoId}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


	`
}
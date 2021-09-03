async function VideoYoutube(id){
	const video = await fetch(`https://app.evoush.com/api/evoush/youtube/video/${id}`)
	return video
}

async function CariVideoYoutube(q){
	const results = await fetch(`https://app.evoush.com/api/evoush/youtube/cari/video/${q}`)
	return results
}

// const input = document.getElementById('video_id')
// const id = '5B5vKepF2hM'
// const loading = document.getElementById('loading')
// const result = document.getElementById('result')

// input.addEventListener('keyup', function(){
// 	const value = this.value

// 	VideoYoutube(value)
// 	.then(response =>  response.json())
// 	.then(response => {
// 		// console.log(response)
// 		const videos = response.data.items[0]
// 	})
// 	.catch(err => console.log(err.response))

// })

// function CariVideo(e){
// 	const id = document.getElementById('video_id').value
// 	VideoYoutube(id)
// 	.then(response => response.json())
// 	.then(res => {
// 		const LoadingImage = document.createElement('img')
// 		const video = res.data.items[0]

// 		LoadingImage.src = 'https://img.pikbest.com/58pic/35/39/61/62K58PICb88i68HEwVnm5_PIC2018.gif!w340'
// 		document.getElementById('loading').appendChild(LoadingImage)

// 		setTimeout(function(){
// 			const newIframe = document.createElement('div')
// 			newIframe.innerHTML = `${video.player.embedHtml}`
// 			document.getElementById('result').appendChild(newIframe)

// 			document.getElementById('loading').innerHTML=''

// 		}, 2500)
// 	})
// }



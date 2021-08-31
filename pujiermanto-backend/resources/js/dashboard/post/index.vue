<template>
	<div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-xs-12 col-sm-12">
					<h4 class="title">List of Post</h4>
					<PostTable/>

					<div v-for="post in posts">
						{{ post.title }}
					</div>
				</div>
			</div>
		</div>
	</div>
</template>


<script>
	import PostTable from '../../components/dashboard/post/table-post'

	export default{
		components: {
			PostTable
		},

		data(){
			return {
				posts: []
			}
		},
		mounted(){
			this.getAllPostData()
		},
		methods: {
			getAllPostData(){
				this.axios
				.get('/api/all-post')
				.then(res => {
					this.posts = res.data.data
					console.log(res.data.data)
				})
			}
		}
	}

</script>
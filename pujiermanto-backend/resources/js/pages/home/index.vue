<template>
	<div>
		<div class="container">
			<div class="d-flex justify-content-center">
				<div class="col-lg-12 col-xs-12 col-sm-12">
					<h1 class="text-info">
						{{ title }}
					</h1>
					<blockquote class="blockquote-footer">
						{{ quotes }}
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</template>


<script>
	export default{
		data(){
			return {
				title: 'Whatssappp Everybody !',
				quotes: 'Script Again Coffee Again'
			}
		}
	}
</script>
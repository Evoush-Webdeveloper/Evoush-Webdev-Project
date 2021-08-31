<template>
	<div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 col-xs-12 col-sm-12">
					<h3>Users Data</h3>

					<div class="table-responsive">
						<table class="table table-condesed">
							<thead>
								<th>Name</th>
								<th>Email</th>
								<th>Username</th>
								<th>Phone</th>
								<th>Options</th>
							</thead>
							<tbody>
								<tr v-for="user in users">
									<td>{{ user.name }}</td>
									<td>{{ user.email }}</td>
									<td>{{ user.username }}</td>
									<td>{{ user.phone }}</td>
									<td>
										<a href="" class="mb-2 btn btn-sm btn-primary">Detail</a>
										<a href="" class="mb-2 btn btn-sm btn-success">Edit</a>
										<a href="" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</template>


<script>
	export default{
		data(){
			return{
				users: []
			}
		},

		mounted(){
			this.getUsers()
		},

		methods: {
			getUsers(){
				this.axios('/user')
				.then(res => {
					this.users = res.data.data.data
				})
			}
		}
	}
</script>
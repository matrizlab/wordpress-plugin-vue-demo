Vue.component('users-component-service', {
	data(){
		return {
			users: undefined,
		};
	},
	methods: {
		fetchUsers(){
			fetch('https://jsonplaceholder.typicode.com/users')
				.then((res) => res.json())
				.then((res) => {
					this.users = res;
				})
		},
	},
	mounted() {
		this.fetchUsers();
	},
	template: `<table class="table table-striped table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Company</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in users" :key="item.id">
                      <th scope="row">{{ item.id }}</th>
                      <td>{{ item.name }}</td>
                      <td>{{ item.email }}</td>
                      <td>{{ item.phone }}</td>
                      <td>{{ item.company.name }}</td>
                    </tr>
                  </tbody>
                </table>`
})

var vm = new Vue({
	el: '#app',
});

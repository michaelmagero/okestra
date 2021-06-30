<template>
    <div>
        <div>

        </div>
    </div>
</template>

<style scoped>
	.navbar {
		position: absolute !important;
	}

	nav ul {
		margin: 0;
		float: right;
	}

	.logo {
		width: 150px;
		height: 40px;
	}

	.nav-item {
		padding: 0 10px 0 10px;
	}

	.nav-link {
		color: #fff;
	}

	.nav-link:hover {
		color: #fece00;
	}

	.login-btn {
		margin: 0 5px 0 5px;
		background-color: #fff;
		color: #262228;
		border-radius: 20px;
		padding: 0 10px 0 10px;
		font-weight: bold;
	}

	.login-btn:hover {
		margin: 0 5px 0 5px;
		background-color: #fece00;
		border-radius: 20px;
		padding: 0 10px 0 10px;
		font-weight: bold;
	}

	.login-btn a {
		font-size: 15px;
	}

	.login-btn a:hover {
		font-size: 15px;
		color: #262228;
	}

	.signup-btn {
		margin: 0 5px 0 5px;
		background-color: #fece00;
		color: #262228;
		border-radius: 20px;
		padding: 0 10px 0 10px;
		font-weight: bold;
	}

	.signup-btn:hover {
		margin: 0 5px 0 5px;
		background-color: #fff;
		color: #262228;
		border-radius: 20px;
		padding: 0 10px 0 10px;
		font-weight: bold;
	}

	.signup-btn a {
		font-size: 15px;
	}
</style>

<script>
	export default {
		data() {
			return {};
		},

		computed: {
			logo() {
				let logo = "../images/logo.jpg";
				return logo;
			},
		},

		methods: {},
	};
</script>

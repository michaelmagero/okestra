<template>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg pt-4">
            <div class="container">

                <a class="navbar-brand" href="/">
                    <img :src="logo" class="logo" alt="kommute-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" v-bind:style="{ 'background-image': 'url(' + toggler + ')' }"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/products" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cars" class="nav-link">Cars</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About Us</a>
                        </li>
                        <li class="login-btn">
                            <a href="/login" class="btn btn-lg font-weight-bold">Login</a>
                        </li>
                        <li class="signup-btn">
                            <a href="#" class="btn btn-lg font-weight-bold"><i class="fas fa-phone"></i>  0768825914 / 0790363195</a>
                        </li>
                    </ul>
                </div>
                <!-- <router-view></router-view> -->
            </div>
        </nav>
    </div>
</template>

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
			toggler() {
				let toggler =
					"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E";
				return toggler;
			},
		},

		methods: {},
	};
</script>

<template>
    <div>
        <nav class="navbar navbar-expand-lg">
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
                            <a href="/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="/support" class="nav-link">Support</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="btn font-weight-bold login-btn">Our Portal</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn font-weight-bold signup-btn">Signup</a>
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
				let logo = "./images/logo.png";
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

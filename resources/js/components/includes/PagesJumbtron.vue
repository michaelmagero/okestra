<template>
    <div>
        <div class="jumbotron rounded-0 text-white" v-bind:style="{ 'background-image': 'url(' + carousel_image + ')' }">
            <div id="content" class="container">
                <div class="col-md-8">
                    <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
	.jumbotron {
		height: 320px;
		background-size: cover;
		-moz-background-size: cover;
		-webkit-background-size: cover;
		-o-webkit-background-size: cover;
		position: relative;
	}
	.jumbotron #content {
		padding: 100px 0 0 0;
	}

	#cta .jumbotron {
		height: 300px;
	}

	.jumbotron .btn:hover {
		background-color: #262228;
		color: #ffffff;
	}
</style>

<script>
	export default {
		computed: {
			carousel_image() {
				let carousel_image = "../images/vehicles1.jpeg";
				return carousel_image;
			},
		},
	};
</script>

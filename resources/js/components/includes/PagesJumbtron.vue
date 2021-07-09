<template>
    <div>
        <div class="pages-jumbotron rounded-0 text-white" v-bind:style="{ 'background-image': 'url(' + carousel_image + ')' }">
            <div id="content" class="container">
                <div class="col-md-8">
                    <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                </div>
            </div>
        </div>
    </div>
</template>


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

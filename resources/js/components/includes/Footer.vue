<template>
    <div>
        <div id="footer" class="text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img :src="logo" class="footer-logo" alt="">
                        <p class="pt-3">Kenyas Leading Paperless Financing</p>
                        <ul class="list-group list-group-horizontal">
                            <li class="icons list-group-item"><a href="#"><i class="fa fa-facebook font-weight-bold"></i></a></li>
                            <li class="icons list-group-item"><a href="https://www.instagram.com/kommutefinance/" target="_blank"><i class="fa fa-instagram font-weight-bold"></i></a></li>
                        </ul>
                        <h6 class="mt-3">&copy; {{ new Date().getFullYear() }} Kommute.</h6>
                    </div>
                    <div class="col-md-3">
                        <ul id="office-time">
                            <h6 class="text-muted font-weight-bold">Office Hours</h6>
                            <li><a href="#">Mon - Thur : 9AM to 5AM</a></li>
                            <li><a href="#">Friday: 9AM to 3PM</a></li>
                            <li><a href="#">Sat - Half Day</a></li>
                            <li><a href="#">Sun: Closed</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul id="office-time">
                            <h6 class="text-muted font-weight-bold">Visit Us</h6>
                            <li><a href="#">Rosslyn Riviera Mall</a></li>
                            <li><a href="#">Limuru Rd, Nairobi</a></li>
                            <li><a href="#">Kenya</a></li><br>

                            <li><a href="#" class="text-muted font-weight-bold">Mail:</a></li>
                            <li><a href="#">info@kommute.co.ke</a></li>
                            <li><a href="#">Tel: 0768825914 / 0790363195</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul id="office-time">
                            <h6 class="text-muted font-weight-bold">Links</h6>
                            <li><a href="#">Terms and Conditiions</a></li>
                            <li><a href="https://docs.google.com/document/d/1U8_EWHuhtVRo8ZXI88q5h3HXA4NnGXMVVaRVFuK94Xw/edit?usp=sharing" target="_blank">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Calculate Installments</a></li>
                            <li><a href="#">Do not sell my information</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
	#footer {
		padding: 100px 0 100px;
		background: #262228;
	}

	#footer .footer-logo {
		width: 150px;
		height: 40px;
	}

	#footer a {
		color: #fece00;
	}

	#footer a:hover {
		color: #fff;
	}

	#footer .fa {
		font-size: 20px;
	}

	#footer .icons {
		background: none;
		border: none;
		padding: 0 10px 0 10px;
	}

	#office-time li {
		list-style: none;
		padding: 5px 0 5px 0;
	}

	#office-time li a {
		color: #fff;
	}

	#office-time li a:hover {
		text-decoration: none;
	}
</style>

<script>
	export default {
		computed: {
			logo() {
				let logo = "../images/logo.jpg";
				return logo;
			},
		},
	};
</script>

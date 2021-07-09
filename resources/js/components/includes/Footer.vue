<template>
    <div>
        <div id="footer" class="text-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3" id="footer-socials">
                        <img :src="logo" class="footer-logo" alt="">
                        <ul id="office-time" class="list-group list-group-horizontal">
                            <li class="icons list-group-item"><a href="https://www.facebook.com/kommuteofficial"><i class="fa fa-facebook font-weight-bold"></i></a></li>
                            <li class="icons list-group-item"><a href="https://www.instagram.com/kommutefinance/" target="_blank"><i class="fa fa-instagram font-weight-bold"></i></a></li>
                            <li class="icons list-group-item"><a href="https://twitter.com/Kommute_" target="_blank"><i class="fa fa-twitter font-weight-bold"></i></a></li>
                            <li class="icons list-group-item"><a href="https://www.linkedin.com/company/kommutefinance/" target="_blank"><i class="fa fa-linkedin font-weight-bold"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <ul id="office-time">
                            <h6 class="text-muted font-weight-bold">Office Hours</h6>
                            <li><a href="#">Mon - Thur : 9AM to 5AM</a></li>
                            <li><a href="#">Friday: 9AM to 3PM</a></li>
                            <li><a href="#">Sat - Half Day</a></li>
                            <li><a href="#">Sun: Closed</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3">
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

                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <ul id="office-time">
                            <h6 class="text-muted font-weight-bold">Links</h6>
                            <li><a target="_blank" href="../documents/Terms and Conditions.pdf">Terms and Conditiions</a></li>
                            <li><a target="_blank" href="../documents/Privacy Policy.pdf">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Calculate Installments</a></li>
                            <li><a href="#">Do not sell my information</a></li>
                        </ul>
                    </div>

                </div>

                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p class="copyright-tag">&copy; {{ new Date().getFullYear() }} Kommute. | Platform Developed by <a type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="makemywebapp12@gmail.com | +254769907166">Studio 12</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


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

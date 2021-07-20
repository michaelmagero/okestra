<template>
    <div>
        <div id="footer" class="text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/okestra logo white.png" alt="" width="150" height="150">

                        <address>
                            <strong>Building 1</strong><br>
                            1234 Example Street<br>
                            Antartica, Example 0987<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                            <abbr title="Email">E:</abbr> info@okestra.com
                        </address><br>

                        <ul class="footer-links list-group list-group-horizontal">
                            <li><a href="#"><i class="fa fa-facebook "></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram "></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin "></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter "></i></a></li>
                        </ul>

                    </div>
                    <div class="col-md-8">
                        <div class="disclaimer">
                            <p>Okestra is not a bank, depository institution, custodian or fiduciary and the assets in your Celsius account are not insured by any private or governmental insurance plan (including FDIC or SIPC), nor are they covered by any compensation scheme (including FSCS).</p>

                            <p>Holding, trading or using crypto assets carry significant risks, please carefully read our Risk Disclosure page. Okestra  does not provide any financial, legal or tax advice, nor should this website be viewed as an offer or inducement to make any financial decisions.</p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p class="copyright-tag">&copy; {{ new Date().getFullYear() }} Okestra. All rights reserved. | Platform Developed by <a href="#" class="site-link" data-bs-toggle="tooltip" data-bs-placement="top" title="makemywebapp12@gmail.com | +254769907166">Studio 12</a></p>
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

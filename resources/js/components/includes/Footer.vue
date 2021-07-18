<template>
    <div>
        <div id="footer" class="text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/carfinancing.jpeg" alt="">

                        <address>
                            <strong>Building 1</strong><br>
                            1234 Example Street<br>
                            Antartica, Example 0987<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                            <abbr title="Email">E:</abbr> info@okestra.com
                        </address><br>

                        <ul class="inline-style">
                            <li><i class="fa fa-2x fa-facebook "></i></li>
                            <li><i class="fa fa-2x fa-instagram "></i></li>
                            <li><i class="fa fa-2x fa-linkedin "></i></li>
                            <li><i class="fa fa-2x fa-twitter "></i></li>
                        </ul>

                    </div>
                    <div class="col-md-8">
                        <p>Okestra is not a bank, depository institution, custodian or fiduciary and the assets in your Celsius account are not insured by any private or governmental insurance plan (including FDIC or SIPC), nor are they covered by any compensation scheme (including FSCS).</p>

                        <p>Holding, trading or using crypto assets carry significant risks, please carefully read our Risk Disclosure page. Okestra  does not provide any financial, legal or tax advice, nor should this website be viewed as an offer or inducement to make any financial decisions.</p>
                    </div>
                </div>

                <hr>

                <div class="row text-center">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p class="copyright-tag">&copy; {{ new Date().getFullYear() }} Okestra. All rights reserved. | Platform Developed by <a type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="makemywebapp12@gmail.com | +254769907166">Studio 12</a></p>
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

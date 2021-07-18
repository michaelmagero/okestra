<template>
    <div>
        <Navbar />

        <div class="products-jumbotron rounded-0">
            <div id="content" class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-5">Borrow at 2% with your crypto as collateral.</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fa fa-check"></i>
                                <span>No hidden charges</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-check"></i>
                                <span>No credit checks</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fa fa-check"></i>
                                <span>Low interest rates</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-check"></i>
                                <span>Short approval time</span>
                            </div>
                        </div>
                        <a class="btn btn-lg landing-btn" href="/">Get Started </a>
                    </div>

                    <div class="col-md-6">
                        <img src="/images/carfinancing.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-assets">
            <div class="container">
                <div class="row">
                    <h1>Okestra supported assets</h1>
                    <p>Select from a wide array of assets that okestra accepts as collateral and assets you can pay back with.</p>
                    <div class="col-md-6">
                        <i class="fa fa-3x fa-bitcoin"></i>
                        <span>Bitcoin</span>
                    </div>
                    <div class="col-md-6">
                        <i class="fa fa-3x fa-bitcoin"></i>
                        <span>Etherium</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-calculator">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>

        <div id="access-cash-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1>Access cash in 4 easy steps</h1>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                 Access Okestra Portal
                                 <span>to apply for instant loan</span>
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                 Verify yourself
                                 <span>get registered with okestra</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                 Transfer your crypto
                                 <span>as collateral for loan</span>
                            </li>
                            <li>
                                <i class="fa fa-credit-card"></i>
                                 Get Paid
                                 <span>get cash into your account</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul>
                            <li>Visit Portal</li>
                            <li>Learn more</li>
                            <li>Learn more</li>
                            <li>Get Started</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="newsletter-signup-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h1>Use Okestra</h1>
                        <p>Keep ownership of your crypto and get cash at your convenience.</p>
                        <div class="row">
                            <form class="form-inline">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="email" class="form-control" id="inputPassword2" placeholder="Email">
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Sign up Today</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <Footer />



    </div>
</template>

<script>
	import Navbar from "../includes/Header.vue";
	import Footer from "../includes/Footer.vue";

	export default {
		data() {
			return {};
		},

		components: {
			Navbar,
			Footer,
		},
	};
</script>

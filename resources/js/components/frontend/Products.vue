<template>
    <div>
        <Navbar />

        <div class="products-jumbotron rounded-0">
            <div id="content" class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="display-5">Borrow at 2% with your crypto as collateral.</h1>
                        <div class="row">
                            <div class="col-md-6 pt-4 pb-4">
                                <i class="far fa-2x fa-check-circle pr-2"></i>
                                <span class="intro-text font-weight-bold">No hidden charges</span>
                            </div>
                            <div class="col-md-6 pt-4 pb-4">
                                <i class="far fa-2x fa-check-circle pr-2"></i>
                                <span class="intro-text font-weight-bold">No credit checks</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pt-4 pb-4">
                                <i class="far fa-2x fa-check-circle pr-2"></i>
                                <span class="intro-text font-weight-bold">Low interest rates</span>
                            </div>
                            <div class="col-md-6 pt-4 pb-4">
                                <i class="far fa-2x fa-check-circle pr-2"></i>
                                <span class="intro-text font-weight-bold">Short approval time</span>
                            </div>
                        </div>
                        <a class="btn btn-lg landing-btn" href="/">Get Started </a>
                    </div>

                    <div class="col-md-6">
                        <img src="/images/product-img.jpeg" alt="" width="550" height="400">
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-assets">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Okestra supported assets</h1>
                        <p>Select from a wide array of assets that okestra accepts as collateral and assets you can pay back with.</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <span><i class="fa fa-3x fa-bitcoin"></i><span class="asset-name">&nbsp; Bitcoin </span></span>
                    </div>
                    <div class="col-md-3">
                        <span><i class="fa fa-3x fa-bitcoin"></i><span class="asset-name">&nbsp; Etherium </span></span>
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-calculator">
            <div class="container">
                <div class="row">
                    <h2 class="highlighted-text">Calculate what you can borrow</h2>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="col-md-8 card-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Total Loan Amount</h5>
                                        <input type="text" class="form-control mt-3">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-4">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Collateral</h5><br>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Interest rate</h5><br>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Loan Term</h5><br>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-2">
                                <div class="row">
                                    <h5>Loan Term</h5><br>
                                    <input type="text" class="form-control">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="access-cash-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1>Access cash in 4 easy steps</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="steps-list">
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-2x fa-mobile pr-3"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="steps-title">Access Okestra Portal</span><br>
                                        <span class="title-description">to apply for instant loan</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-2x fa-user-check pr-3"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="steps-title">Verify yourself</span><br>
                                        <span class="title-description">get registered with okestra</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-2x fa-exchange pr-3"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="steps-title">Transfer your crypto</span><br>
                                        <span class="title-description">as collateral for loan</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-2x fa-credit-card pr-3"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="steps-title">Get Paid</span><br>
                                        <span class="title-description">get cash into your account</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="steps-links">
                            <li><a href="#"> Visit Portal <i class="fa fa-arrow-right"></i> </a> </li>
                            <li><a href="#"> Learn more <i class="fa fa-arrow-right"></i> </a> </li>
                            <li><a href="#"> Learn more <i class="fa fa-arrow-right"></i> </a> </li>
                            <li><a href="#"> Get Started <i class="fa fa-arrow-right"></i> </a> </li>
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

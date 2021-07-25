<template>
    <div>
        <div id="header">
            <Navbar />

            <div class="jumbotron rounded-0 text-white">
                <div id="content" class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h1 class="display-5">Hassle free crypto cash loans at your comfort</h1>
                            <p class="lead">With Okestra you can get instant cash loans using your crypto with seamless payout and competitive
                                market rates. Its easy as signup, send crypto and get cash.</p><br>
                            <a class="btn btn-lg landing-btn" href="/">See Our Rates <span><i class="fa fa-arrow-right"></i></span> </a>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="card mb-5 shadow rounded-0 border-0">
                                <div class="card pt-0 pb-0" style="background-color: #E8E8ED; padding: 0 !important; margin: 0 !important;">
                                    <div class="row mt-4 pl-5">
                                        <div class="col-md-6">
                                            <h6 class="font-weight-bold">Total Loan Amount</h6>
                                            <input type="text" class="form-control border-0 pt-4 pb-4">
                                        </div>
                                        <div class="col-md-6"></div>
                                        <!-- <div class="col-md-6">
                                            <select name="" id="">
                                                <option value="">USDC</option>
                                                <option value="">USDC</option>
                                            </select>
                                        </div> -->
                                    </div>

                                    <div class="row mt-3 pl-5">
                                        <div class="col-md-5">
                                            <h6 class="font-weight-bold">Collateral</h6>
                                            <input type="text" class="form-control border-0 pt-4 pb-4">
                                        </div>
                                        <div class="col-md-3 mt-4 pt-2">
                                            <select name="" id="" class="form-control border-0 rounded collaterals">
                                                <option value="">BTC</option>
                                                <option value="">ETH</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-3 pl-5">
                                        <div class="col-md-12">
                                            <h6 class="font-weight-bold">Interest Rate</h6>
                                            <ul class="nav nav-tabs rounded-0 text-dark" role="tablist" id="faq-nav">
                                                <li class="nav-item">
                                                    <a class=" nav-link active text-uppercase font-weight-bold " data-toggle="tab" href="#home">1%</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class=" nav-link text-uppercase font-weight-bold " data-toggle="tab" href="#menu1">6%</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class=" nav-link text-uppercase font-weight-bold " data-toggle="tab" href="#menu2">8%</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row mt-1 pl-5">
                                        <div class="col-md-4 mt-2 pt-2">
                                            <h6 class="font-weight-bold">Loan Term</h6>
                                            <select name="" id="" class="form-control border-0">
                                                <option value="">1 year</option>
                                                <option value="">2 year</option>
                                                <option value="">3 year</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mt-2 pl-5">
                                        <div class="col-md-4 mt-2 pt-2">
                                            <h6 class="font-weight-bold">Total Loan</h6>
                                            <h1>$ <span>1000</span></h1>
                                        </div>
                                    </div>


                                    <div class="row mt-2 pl-5">
                                        <div class="col-md-4 mt-2 pt-2">
                                            <h6 class="font-weight-bold">Monthly Interest</h6>
                                            <h3>$ <span>1000</span></h3>
                                        </div>
                                        <div class="col-md-4 mt-2 pt-2">
                                            <h6 class="font-weight-bold">Total Interest</h6>
                                            <h3>$ <span>1000</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Low rates borrowing <span class="highlighted-text"> using your crypto </span></h1>
                        <p class="mt-3">In moments when you are stuck and need quick cash let your cryptocurrency help you access cash quick.
                            Deposit your crypto as collateral with Okestra and borrow funds against them this guarantees you the best
                            market rates and you still get to keep your cryptos!
                        </p>
                        <a href="#" class="btn btn-primary mt-3">Learn More</a>
                    </div>
                    <div class="col-md-4">
                        <img src="/images/about.jpeg" alt="" width="300" height="500">
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-stats">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>$10m+</h2>
                        <p>in community assets</p>
                    </div>
                    <div class="col-md-3">
                        <h2>2k+</h2>
                        <p>Okestra users</p>
                    </div>
                    <div class="col-md-3">
                        <h2>$4m+</h2>
                        <p>paid in last year</p>
                    </div>
                    <div class="col-md-3">
                        <h2>80k+</h2>
                        <p>in community crypto</p>
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
                    <div class="col-md-6">
                        <div class="card pt-0 pb-0" style="background-color: #E8E8ED; padding: 0 !important; margin: 0 !important; width: 570px;">
                            <div class="row mt-5 pl-5">
                                <div class="col-md-6">
                                    <h6 class="font-weight-bold">Total Loan Amount</h6>
                                    <input type="text" class="form-control border-0 pt-4 pb-4">
                                </div>
                                <div class="col-md-6"></div>
                                <!-- <div class="col-md-6">
                                    <select name="" id="">
                                        <option value="">USDC</option>
                                        <option value="">USDC</option>
                                    </select>
                                </div> -->
                            </div>

                            <div class="row mt-5 pl-5">
                                <div class="col-md-5">
                                    <h6 class="font-weight-bold">Collateral</h6>
                                    <input type="text" class="form-control border-0 pt-4 pb-4">
                                </div>
                                <div class="col-md-3 mt-4 pt-2">
                                    <select name="" id="" class="form-control border-0 rounded collaterals">
                                        <option value="" class="font-weight-bold">BTC</option>
                                        <option value="" class="font-weight-bold">ETH</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-5 pl-5">
                                <div class="col-md-12">
                                    <h6 class="font-weight-bold">Interest Rate</h6>
                                    <ul class="nav nav-tabs rounded-0 text-dark" role="tablist" id="faq-nav">
                                        <li class="nav-item">
                                            <a class=" nav-link active text-uppercase font-weight-bold " data-toggle="tab" href="#home">1%</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class=" nav-link text-uppercase font-weight-bold " data-toggle="tab" href="#menu1">6%</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class=" nav-link text-uppercase font-weight-bold " data-toggle="tab" href="#menu2">8%</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mt-2 pl-5">
                                <div class="col-md-4 mt-4 pt-2">
                                    <h6 class="font-weight-bold">Loan Term</h6>
                                    <select name="" id="" class="form-control border-0">
                                        <option value="">1 year</option>
                                        <option value="">2 year</option>
                                        <option value="">3 year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card pt-0 pb-0 text-white" style="background-color: #BD2380; padding: 0 !important; margin: 0 !important; width: 350px;">
                            <div class="row mt-2 pl-5">
                                <div class="col-md-6 mt-4 pt-2">
                                    <h5>Total Loan</h5>
                                    <h1>$ <span>1000</span></h1>
                                </div>
                            </div>


                            <div class="row mt-2 pl-5">
                                <div class="col-md-6 mt-4 pt-2">
                                    <h6>Monthly Interest</h6>
                                    <h3>$ <span>0.8</span></h3>
                                </div>
                                <div class="col-md-6 mt-4 pt-2">
                                    <h6>Total Interest</h6>
                                    <h3>$  <span>8.0</span></h3>
                                </div>
                            </div>


                            <div class="row mt-2 pl-5">
                                <div class="col-md-12 mt-4 pt-2">
                                    <button type="submit" class="btn btn-primary calculator-btn font-weight-bold">Apply Today</button>
                                </div>
                            </div>

                            <div class="row mt-2 pl-5">
                                <div class="col-md-10 mt-4 pt-2">
                                    <p>Interest payments are made on a monthly basis, principal amount returned at the end of  the loan term. Interest rates very depending on your choice of LTV (Loan to Value). Minimum loan term is 6 months. If you repay your loan prior to the lapse of 6 months, you will be charged with the interest payable for the first full 6 months. Okestra Terms of Use Apply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
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

        <div id="hidden-charges-cta">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h1>No <span class="highlighted-text">hidden</span> charges</h1>
                        <p class="mt-3">In our quest to offer loans on crypto we aim to achieve a no hidden fees on transactions approach, we only charge
                            the rates that apply on the collateral cryptos.
                        </p>
                        <a href="#" class="btn btn-primary mt-3">Learn More</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div id="okestra-news">
            <div class="container">
                <div class="row">
                    <h1 class="ml-3">News from crypto circles</h1>
                </div><br>

                <div class="row">
                    <div class="col-md-6 main-story">
                        <img src="/images/bitcoin1.jpeg" alt="">
                        <h3 class="pt-3">Crypto News title one</h3>
                        <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci optio laborum hic officia velit distinctio tenetur, perferendis qui in. Blanditiis.</p>
                        <a href="#">Learn More <i class="fa fa-arrow-right"></i></a>
                    </div>

                    <div class="col-md-6">
                        <div id="news2">
                            <img src="/images/bitcoin3.jpeg" alt="">
                            <h3>Crypto news title two</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ducimus ad corrupti facere eligendi eveniet.</p>
                            <a href="#">Learn More <i class="fa fa-arrow-right"></i></a>
                        </div>

                        <div id="news3">
                            <img src="/images/bitcoin2.jpeg" alt="">
                            <h3>Crypto news title two</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum ducimus ad corrupti facere eligendi eveniet.</p>
                            <a href="#">Learn More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="okestra-faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Frequently asked questions</h1>
                        <ul class="nav nav-tabs rounded-0 text-dark" role="tablist" id="faq-nav">
                            <li class="nav-item">
                                <a class=" nav-link active text-uppercase font-weight-bold " data-toggle="tab" href="#home">General</a>
                            </li>
                            <li class="nav-item">
                                <a class=" nav-link text-uppercase font-weight-bold " data-toggle="tab" href="#menu1">Security</a>
                            </li>
                            <li class="nav-item">
                                <a class=" nav-link text-uppercase font-weight-bold " data-toggle="tab" href="#menu2">Signup</a>
                            </li>
                        </ul>


                        <div class="tab-content">
                            <div id="home" class="container tab-pane active mt-5 mb-5"><br>
                                <div class="row mb-5">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <button class="faq-titles btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">

                                                    <i class="fa fa-plus "></i>
                                                    How can you transfer coins to Okestra?
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <button class="faq-titles btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="fa fa-plus "></i>
                                                    How do i register with Okestra?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Some placeholder content for the second accordion panel. This panel is hidden by default.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <button class="faq-titles btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-plus "></i>
                                                    How do i make sure my Okestra account is secure?
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-titles btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-plus "></i>
                                                How do i withdraw my loan from Okestra?
                                                </button>
                                            </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-titles btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fa fa-plus "></i>
                                                How much cryptocurrency do i need to get cash with Okestra?
                                                </button>
                                            </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="menu1" class="container tab-pane fade mt-5 mb-5"><br>
                                <div class="row mb-5">

                                </div>
                            </div>

                            <div id="menu2" class="container tab-pane fade mt-5 mb-5"><br>
                                <div class="row mb-5">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="" class="faq-btn btn btn-primary">read more questionnaires >></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="newsletter-signup-cta">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h1>Use <span class="highlighted-text">Okestra</span></h1>
                        <p class="pt-3">Keep ownership of your crypto and get cash at your convenience.</p>
                        <form class="form-inline pt-3">
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="email" class="form-control" id="inputPassword2" placeholder="Email Address">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Sign up Today</button>
                        </form>
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
	import axios from "axios";

	export default {
		data() {
			return {
				vehicles: [],

				calculator: {
					monthlypayment: "",
					carprice: "",
					paymentperiod: "",
					deposit: "",
				},

				paymentperiod: [
					{ text: "6 months", value: 6 },
					{ text: "12 months", value: 12 },
					{ text: "18 months", value: 18 },
					{ text: "24 months", value: 24 },
				],
			};
		},

		components: {
			Navbar,
			Footer,
		},

		computed: {},

		mounted: function () {
			axios
				.get("/vehicles")
				.then((res) => {
					this.vehicles = res.data;
				})
				.catch((err) => {
					console.error(err);
				});
		},

		methods: {
			formatInput(event) {
				let val = event.target.value.trim();

				if (/^[1-9]\d*$|^$/.test(val)) {
					"KES" + " " + Number(this.calculator.carprice).toLocaleString();
				} else {
					event.target.value = Number(this.calculator.carprice);
				}
			},

			change(event) {
				let val = event.target.value.trim();
				// It can only be positive integer or empty, and the rule can be modified according to the requirement.
				if (/^[1-9]\d*$|^$/.test(val)) {
					this.calculator.carprice = "KES" + " " + Number(val).toLocaleString();
				} else {
					event.target.value = this.calculator.carprice;
				}
			},

			calculateInstallments() {
				//deposit payable (50% car value + tracking fees + insurance + handling fees)
				this.calculator.deposit =
					"KES" + " " + (Number(this.calculator.carprice) * 0.5).toLocaleString();

				//loan principle
				let loan_principle = this.calculator.carprice - this.calculator.deposit;

				//interest (25 percent divided by 12months)
				let monthly_interest = (2.08 / 100) * (this.calculator.carprice * 0.5);

				if (this.calculator.paymentperiod == "") {
					this.calculator.monthlypayment == " ";
				} else {
					//monthly payment
					this.calculator.monthlypayment =
						"KES" +
						" " +
						Math.round(
							(monthly_interest * this.calculator.paymentperiod +
								this.calculator.carprice * 0.5) /
								this.calculator.paymentperiod
						).toLocaleString();
				}
			},
		},
	};
</script>

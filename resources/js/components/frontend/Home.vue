<template>
    <div>
        <div id="header">
            <Navbar />

            <div class="jumbotron rounded-0 text-white" v-bind:style="{ 'background-image': 'url(' + hero + ')' }">
                <div id="content" class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 mt-5">
                            <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                            <p class="lead">Search, Reserve and Buy your Dream Car All on one platform</p><br>
                            <a class="btn btn-warning btn-lg landing-btn" href="financing">Discover Kommute <span><i class="fa fa-arrow-right"></i></span> </a>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-sm-12 col-md-10">
                            <div class="card text-white">
                                <div class="card-body">
                                    <h4 class="card-title ">Installments Calculator</h4>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="" class="form-label font-weight-bold">Car Value</label>
                                            <input v-model="calculator.carprice" type="text" class="calc form-control" @input="calculateInstallments" @change="this.calculator.carprice.toLocaleString();" >
                                        </div>

                                        <div class="col-md-3">
                                            <label for="exampleFormControlInput1" class="form-label font-weight-bold">Deposit Payable</label>
                                            <input v-model="calculator.deposit" type="text" class="calc form-control">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="exampleFormControlInput1" class="form-label font-weight-bold">Payment Period</label>
                                            <select class="calc form-select form-control" v-model="calculator.paymentperiod" @change="calculateInstallments">
                                                <option v-for="pp in paymentperiod" v-bind:value="pp.value">{{ pp.text }}</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label for="exampleFormControlTextarea1" class="form-label font-weight-bold">Monthly Payment</label>
                                            <input v-model="calculator.monthlypayment" type="text" class="calc form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cars">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h3>Browse Our Collection</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3" v-for="(vehicle, index) in vehicles" v-bind:key="vehicle.value">
                        <template v-if="index <= 3">
                            <div class="card mt-5 mb-5 shadow rounded-0 border-0">
                                <img v-if="vehicle.images" :src="carImage + vehicle.make + vehicle.model + vehicle.year+ '/' + vehicle.display_image" class="card-img-top" :alt="vehicle.make" height="250">

                                <div class="card-body">
                                    <h4 class="card-title">{{ vehicle.make }} {{ vehicle.model }} {{ vehicle.year }}</h4>

                                    <span class="badge bg-light mr-5">Mileage {{ Number(vehicle.mileage).toLocaleString() }}</span>
                                    <span class="badge bg-light mr-5">Year {{ vehicle.year }} </span>
                                    <span class="badge bg-light mr-5">Location {{ vehicle.location.toUpperCase() }} </span>
                                    <h6 class="ml-1 mt-2  font-weight-bold"><strong>Cash Price</strong>: <strong class="cash-price"> Ksh {{ Number(vehicle.price).toLocaleString() }} </strong></h6>

                                    <h6 class="mt-3 text-muted">Monthly Payment</h6>
                                    <h5 class="mb-3 font-weight-bold">Ksh {{ Math.round(((0.0208 * (Number(vehicle.price) * 0.5) * 24 + Number(vehicle.price) * 0.5) / 24)).toLocaleString() }}</h5>

                                    <router-link class="btn btn-block btn-warning pt-2 pb-2 pr-5 pl-5" :to="{ name: 'viewcar', params: { id: vehicle.id }}">view this car</router-link>

                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="/cars" class="btn btn-warning pt-2 pb-2 pr-5 pl-5">View More Cars</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- what you get with kommute -->
        <div id="kommute-why">
            <div class="container">
                <div class="row mb-3">
                    <h3 class="features-heading">Why Kommute</h3>
                </div>
                <div class="row mb-5 mt-5">
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-clock "></i>
                        <h5 class="mt-3">Fast Approvals</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-coins "></i>
                        <h5 class="mt-3">Waivers on Interest</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-headset "></i>
                        <h5 class="mt-3">Customer Support</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-credit-card "></i>
                        <h5 class="mt-3">No hidden Fees</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-award "></i>
                        <h5 class="mt-3">Quality Guranteed</h5>
                    </div>
                    <div class="col-md-4">
                        <i class="features-icons fas fa-3x fa-laptop-house "></i>
                        <h5 class="mt-3">Hassle-Free</h5>
                    </div>
                </div>
            </div>
        </div>

        <div id="kommute-features">
            <div class="container">
                <div class="row">
                    <h3 class="features-heading">What Kommute Excels In</h3>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-calendar-alt "></i>
                        <h5 class="mt-3">Repayments upto 24 months</h5>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-tags "></i>
                        <h5 class="mt-3">Interest rate as low as 2% monthly</h5>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-chart-line "></i>
                        <h5 class="mt-3">All vehicles financing</h5>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <i class="features-icons fas fa-3x fa-wallet "></i>
                        <h5 class="mt-3">50% of car value financing</h5>
                    </div>
                </div>
            </div>
        </div>

        <div id="cta">
            <div class="jumbotron text-center text-white rounded-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="display-4">In need of financing?</h1>
                            <p class="lead">Discover how much you will pay monthly to get your dream car</p>
                            <a href="/cars" class="btn btn-primary font-weight-bold">Search for Cars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="partners">
            <div class="container">
                <div class="row">
                    <h5 class="font-weight-bold ml-4 mb-5">We have partnered with</h5>
                </div>
                <div class="row">
                    <img :src="partners" class="partner pl-2" alt="partner" width="160" height="150">
                </div>
            </div>
        </div>

        <Footer />
    </div>
</template>

<style scoped>
	.jumbotron {
		height: 700px;
		background-size: cover;
		-moz-background-size: cover;
		-webkit-background-size: cover;
		-o-webkit-background-size: cover;
		position: relative;
		background: linear-gradient(rgba(29, 19, 43, 1.2), rgba(29, 19, 43, 1.2));
	}

	.jumbotron #content {
		padding: 50px 0 0 0;
	}

	.jumbotron p {
		color: #fff;
	}

	#cta .jumbotron {
		background: #fece00;
	}

	#cta .jumbotron {
		height: 300px;
	}

	#cta h1 {
		color: #262228;
	}

	#cta p {
		font-weight: bold;
		color: #262228;
	}

	#cta .btn {
		background: #262228;
		border: none;
	}

	#cta .btn:hover {
		background: #fff;
		border: none;
		color: #000;
	}

	.jumbotron .card {
		border-radius: 0 50px 0 50px;
		background: #262228;
		opacity: 0.9;
	}

	.card .calc {
		border-radius: 15px;
		font-weight: bold;
	}

	.jumbotron .btn {
		border-radius: 20px;
		padding: 7px 35px 7px 35px;
	}

	.jumbotron .landing-btn {
		background-color: #fece00;
	}

	.jumbotron .btn:hover {
		background-color: #262228;
		color: #ffffff;
	}

	#kommute-features {
		padding: 50px 0 50px 0;
		background-color: #262228;
	}

	#kommute-features .features {
		width: 60px;
		height: 60px;
	}

	.features-heading {
		color: #fece00;
	}

	.features-icons {
		color: #fece00;
	}

	#kommute-features h5 {
		color: #fff;
	}

	#kommute-why {
		padding: 70px 0 50px 0;
		background-color: #262228;
	}

	#kommute-why .why {
		widows: 60px;
		height: 60px;
	}

	#kommute-why h5 {
		color: #fff;
	}

	#cars {
		padding-bottom: 20px;
	}

	#cars .card {
		height: 600px;
	}

	#cars .btn {
		background-color: #fece00;
		border-radius: 20px;
		padding: 0 30px 0 30px;
		font-weight: bold;
	}

	#cars .btn:hover {
		border-radius: 20px;
		background: #262228;
		color: #ffffff;
		padding: 0 30px 0 30px;
		border: none;
	}

	.cash-price {
		color: #fece00;
	}

	.carousel-control-prev {
		background: none;
		border-width: 0;
		left: -120px;
		border-bottom: 0;
		font-size: 40px;
		color: #444;
	}

	.carousel-control-next {
		background: none;
		border-width: 0;
		right: -120px;
		border-bottom: 0;
		font-size: 40px;
		color: #444;
	}

	#partners {
		padding: 20px 0 70px 0;
	}

	.partners {
		width: 150px;
		height: 70px;
	}

	@media (max-width: 480px) {
		.jumbotron {
			height: 1200px;
		}
	}

	@media (max-width: 768px) {
		.jumbotron {
			height: 900px;
		}

		#cars .card-img-top {
			height: 250px;
		}

		#kommute-why h3 {
			padding-left: 70px;
		}

		#kommute-why .col-md-4 {
			padding: 30px 100px 30px 70px;
		}

		#kommute-features h3 {
			padding-left: 20px;
		}

		#kommute-features .col-md-3 {
			padding: 30px 50px 30px 50px;
		}
	}

	@media (max-width: 1024px) {
		.jumbotron {
			height: 900px;
		}

		#cars .card-img-top {
			height: 250px;
		}

		#kommute-why h3 {
			padding-left: 50px;
		}

		#kommute-why .col-md-4 {
			padding: 30px 50px 30px 50px;
		}

		#kommute-features .col-md-6 {
			padding: 30px;
		}

		#kommute-features h3 {
			padding-left: 20px;
		}

		#kommute-features .col-md-3 {
			padding: 30px 50px 30px 50px;
		}
	}
</style>

<script>
	import Navbar from "../includes/Header.vue";
	import Footer from "../includes/Footer.vue";
	import ViewCar from "../frontend/Viewcar.vue";
	import axios from "axios";

	export default {
		data() {
			return {
				vehicles: [],

				vehicle_id: "",

				cardmonthly: "",

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
			ViewCar,
		},

		computed: {
			logo() {
				let logo = "../images/logo.jpg";
				return logo;
			},

			hero() {
				let hero = "../images/hero1.png";
				return hero;
			},

			partners() {
				let partners = "../images/hotcars.jpeg";
				return partners;
			},

			carImage() {
				let carimage = "../uploads/displayimage/";
				return carimage;
			},

			//why
			clock() {
				let clock = "../images/clock.png";
				return clock;
			},

			card() {
				let card = "../images/card.png";
				return card;
			},

			coins() {
				let coins = "../images/coins1.png";
				return coins;
			},

			quality() {
				let quality = "../images/quality.png";
				return quality;
			},

			support() {
				let support = "../images/support.png";
				return support;
			},

			//features
			repayments() {
				let repayments = "../images/calendar2.png";
				return repayments;
			},

			interest() {
				let interest = "../images/interestrate.png";
				return interest;
			},

			financing() {
				let financing = "../images/financing2.png";
				return financing;
			},

			carfinancing() {
				let carfinancing = "../images/financing.png";
				return carfinancing;
			},
		},

		mounted: function () {
			axios
				.get("http://localhost:8000/api/vehicles")
				.then((res) => {
					this.vehicles = res.data.data;
				})
				.catch((err) => {
					console.error(err);
				});
		},

		methods: {
			formatInput() {
				this.calculator.carprice.toLocaleString();
			},

			calculateInstallments() {
				//deposit payable (50% car value + tracking fees + instance + handling fees)
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

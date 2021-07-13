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
                            <a class="btn btn-warning btn-lg landing-btn" href="/products">Discover Kommute <span><i class="fa fa-arrow-right"></i></span> </a>
                            <!-- <router-link to="/products" class="btn btn-warning btn-lg landing-btn">Discover Kommute <span><i class="fa fa-arrow-right"></i></span></router-link> -->
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
                                            <input v-model="calculator.carprice" class="calc form-control" @input="calculateInstallments" @change="formatInput" >
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
                    <div class="col-xs-3 col-sm-3 col-md-3" v-for="(vehicle, index) in vehicles" v-bind:key="vehicle.id">
                        <template v-if="index <= 3">
                            <div class="card mt-5 mb-5 shadow rounded-0 border-0">
                                <img :src="carImage + (vehicle.make + vehicle.model + vehicle.year).toLowerCase().split(' ').join('').replace(/\W/g, '') + '/' + vehicle.display_image" class="card-img-top" :alt="vehicle.make" height="200">

                                <div class="card-body">

                                    <h6 class="card-title font-weight-bold">{{ vehicle.make + " " + vehicle.model + " " + vehicle.year }}</h6>

                                    <span class="badge bg-light mr-5 mt-1">Mileage {{ Number(vehicle.mileage).toLocaleString() }}</span>

                                    <span class="badge bg-light mr-5 mt-1">Year  {{ " " }}  {{ vehicle.year }} </span>
                                    <span class="badge bg-light mr-5 mt-1">Location {{ (vehicle.location).toUpperCase() }} </span>
                                    <h6 class="mt-2  font-weight-bold"><strong>Car Value</strong>: <strong class="text-muted"> KES {{ Number(vehicle.price).toLocaleString() }} </strong></h6>

                                    <h6 class="mt-3 text-muted">Monthly Payment</h6>
                                    <h5 class="mb-3 font-weight-bold">KES {{ Math.round(((0.0208 * (Number(vehicle.price) * 0.5) * 24 + Number(vehicle.price) * 0.5) / 24)).toLocaleString() }}</h5>

                                </div>

                                <div class="card-footer">
                                    <a :href="'view-car/' + vehicle.id" class="btn btn-block pt-2 pb-2 pr-5 pl-5">View this car</a>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="/cars" class="btn btn-warning pt-2 pb-2 pr-5 pl-5">View More Cars</a>
                        <!-- <router-link to="/cars" class="btn btn-warning pt-2 pb-2 pr-5 pl-5">View more cars</router-link> -->
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
                            <h1 class="display-4 font-weight-bold">In need of financing?</h1>
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


<script>
	import Navbar from "../includes/Header.vue";
	import Footer from "../includes/Footer.vue";
	import ViewCar from "../frontend/Viewcar.vue";
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

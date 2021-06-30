<template>
    <div>
        <Navbar />

        <Jumbotron />

        <div id="features">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-12">
                        <h1>Our Products</h1>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="card rounded-0 border-0 shadow">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 img d-flex">
                                    <img :src="carfinance" class="financing" alt="duty imports">
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <h4 class="text-secondary font-weight-bold pt-3">Car Finance</h4>
                                    <p class="pr-5">Apply for car financing all online and get approved within 6 hours. Repay your loan at attractive rates of as low as 2% p.m on reducing balance.</p>

                                    <a href="/cars" class="btn btn-warning product-buttons" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="card rounded-0 border-0 shadow">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 img d-flex">
                                    <img :src="logbook" class="financing" alt="duty imports">
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <h4 class="text-secondary font-weight-bold pt-3">Logbook loans</h4>
                                    <p class="pr-5">Need Cash urgently. Kommute offers emergency loans at competitive rates with the security as your car logbook. Financing up to 50% value of car.</p>

                                    <a href="#" class="btn btn-warning product-buttons" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 col-md-12">
                        <div class="card rounded-0 border-0 shadow">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 img d-flex">
                                    <img :src="dutyimport" class="financing" alt="duty imports">
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <h4 class="text-secondary font-weight-bold pt-3">Duty Import Financing</h4>
                                    <p class="pr-5">Importing your car? Stress no more, Kommute will take all the burden, we got you</p>

                                    <a href="#" class="btn btn-warning product-buttons" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        This service is almost ready, we are finalizing on it keep it Kommute and be the first one to know once it launches.
                    </div>
                </div>
            </div>
        </div>

        <Footer />
    </div>
</template>

<style scoped>
	#features .financing {
		width: 250px;
		height: 200px;
	}

	#features .btn {
		border-radius: 20px;
		padding: 5px 30px 5px 30px;
	}

	#features .btn:hover {
		background-color: #262228;
		color: #ffffff;
		border: none;
	}

	.product-buttons {
		background-color: #fece00;
		font-weight: bold;
	}

	@media (max-width: 768px) {
		#features .card {
			height: 550px;
		}

		#features .financing {
			width: 350px;
			height: 300px;
		}

		#features .col-md-6 {
			padding-left: 50px;
		}
	}

	@media (max-width: 1024px) {
		#features .col-md-9 {
			padding: 30px 0 0 50px;
		}
	}
</style>


<script>
	import Navbar from "../includes/Header.vue";
	import Jumbotron from "../includes/PagesJumbtron.vue";
	import Footer from "../includes/Footer.vue";

	export default {
		components: {
			Navbar,
			Jumbotron,
			Footer,
		},

		computed: {
			hero() {
				let hero = "../images/hero.png";
				return hero;
			},

			carfinance() {
				let carfinance = "../images/carfinancing.jpeg";
				return carfinance;
			},

			logbook() {
				let logbook = "../images/logbookloans.jpeg";
				return logbook;
			},

			dutyimport() {
				let logbook = "../images/dutyimports.jpeg";
				return logbook;
			},

			debtfinancing() {
				let logbook = "../images/debtfinancing.jpeg";
				return logbook;
			},
		},
	};
</script>

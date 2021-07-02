<template>
    <div>
        <div id="header">

            <Navbar />

            <div class="pages-jumbotron rounded-0 text-white">
                <div id="content" class="container">
                    <div class="col-md-8">
                        <h1 class="display-5">Kenya's Leading Paperless Car Financing</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="car-search">
            <div class="container">
                <div class="row">
                    <h3>Search car</h3>
                    <p>Browse over a wide range of high-quality new and used cars. Whether you’re buying or financing, complete your purchase entirely online and choose home delivery or collection from Kommute designated yards. For total peace of mind, every car comes with a 30-Day service guarantee. </p>

                    <p> Thorough inspections by buyer is advised. Terms and conditions apply. Offers may be varied, withdrawn or extended at any time. The quotation given is not a binding offer to enter into a finance agreement. Financing available subject to credit acceptance to Kenyan citizens aged 18 or over.

                    <p>Guarantees and indemnities may be required. Please ensure the finance quotation meets your needs making sure you can afford the repayments without causing undue hardship.</p>
                </div>

                <div class="row">
                    <div class="container pt-5 pb-4">
                        <div class="row">
                            <div class="col-12">
                                <input v-model="search" type="text" class="search-bar form-control pt-4 pb-4 shadow-sm" placeholder="Search your car here">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3" v-for="vehicle in submit" v-bind:key="vehicle.id">
                        <div>
                            <div class="card mt-5 mb-5 shadow rounded-0 border-0">
                                <img :src="carImage + (vehicle.make + vehicle.model + vehicle.year).toLowerCase().split(' ').join('') + '/' + vehicle.display_image" class="card-img-top" :alt="vehicle.make" height="200">


                                <div class="card-body">

                                    <h6 class="card-title font-weight-bold">{{ vehicle.make + " " + vehicle.model + " " + vehicle.year }}</h6>

                                    <span class="badge bg-light mr-5 mt-1">Mileage {{ Number(vehicle.mileage).toLocaleString() }}</span>

                                    <span class="badge bg-light mr-5 mt-1">Year  {{ " " }}  {{ vehicle.year }} </span>
                                    <span class="badge bg-light mr-5 mt-1">Location {{ (vehicle.location).toUpperCase() }} </span>
                                    <h6 class="mt-2  font-weight-bold"><strong>Cash Price</strong>: <strong class="text-muted"> KES {{ Number(vehicle.price).toLocaleString() }} </strong></h6>

                                    <h6 class="mt-3 text-muted">Monthly Payment</h6>
                                    <h5 class="mb-3 font-weight-bold">KES {{ Math.round(((0.0208 * (Number(vehicle.price) * 0.5) * 24 + Number(vehicle.price) * 0.5) / 24)).toLocaleString() }}</h5>

                                </div>

                                <div class="card-footer">
                                    <a :href="'view-car/' + vehicle.id" class="btn btn-block pt-2 pb-2 pr-5 pl-5">View this car</a>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</template>

<style scoped>
	#car-search .btn {
		border-radius: 20px;
		background-color: #fece00;
		font-weight: bold;
	}

	#car-search .btn:hover {
		background-color: #262228;
		color: #ffffff;
		border: none;
	}

	#car-search .card {
		height: 500px;
	}

	#car-search .search-bar {
		border-radius: 20px;
		border: none;
		padding: 10px 30px 10px 50px;
		background-color: #e6e6e6;
		font-weight: 700;
	}

	.cash-price {
		color: #fece00;
	}

	@media (max-width: 768px) {
		#car-search .card-img-top {
			height: 250px;
		}

		#car-search h3 {
			padding-left: 20px;
		}

		#car-search p {
			padding: 20px;
		}
	}
</style>

<script>
	import Navbar from "../includes/Header.vue";
	import Jumbotron from "../includes/PagesJumbtron.vue";
	import Footer from "../includes/Footer.vue";

	export default {
		data() {
			return {
				search: "",

				vehicles: [],
			};
		},

		components: {
			Navbar,
			Jumbotron,
			Footer,
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

		computed: {
			hero() {
				let hero = "../images/hero.png";
				return hero;
			},

			carImage() {
				let car_image = "/uploads/displayimage/";
				return car_image;
			},

			submit() {
				var self = this;
				return this.vehicles.filter(function (cust) {
					return (
						cust.make.toLowerCase().indexOf(self.search.toLowerCase()) >= 0 ||
						cust.model.toLowerCase().indexOf(self.search.toLowerCase()) >= 0
					);
				});
			},
		},

		methods: {
			getVehicleId() {
				return this.vehicles.id;
			},
		},
	};
</script>

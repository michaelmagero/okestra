<template>
    <div>
        <Navbar />

        <Jumbotron />

        <div id="car-details">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item" v-for="(img, index) in vehicle_images" :class="{ active: index==0 }" v-bind:key="img.value">
                                    <img :src="vehicle_image + vehicles.make  + vehicles.model  + vehicles.year + '/' + img" width="550" height="450" :alt="vehicles.make">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h1>{{ vehicles.make }} {{ vehicles.model }} {{ vehicles.year }}</h1>
                        <hr>
                        <div class="row mt-5">
                            <div class="col-md-4 border-right mb-3">
                                <small class="titles font-weight-bold">CASH PRICE</small>
                                <h5>Ksh {{ Number(vehicles.price).toLocaleString() }}</h5>
                            </div>
                            <div class="col-md-4 border-right mb-3">
                                <small class="titles font-weight-bold">MONTHLY</small>
                                <h5 class="font-weight-bold">Ksh {{ Math.round(((0.0208 * (Number(vehicles.price) * 0.5) * 24 + Number(vehicles.price) * 0.5) / 24)).toLocaleString() }}</h5>
                            </div>
                            <div class="col-md-4">
                                <small class="titles font-weight-bold">DEPOSIT</small>
                                <h5>Ksh {{ Number(vehicles.price * 0.5).toLocaleString() }}</h5>
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-4 border-right mb-3">
                                <small class="titles font-weight-bold">Location</small>
                                <h5> {{ (vehicles.location).toUpperCase() }}</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong class="titles" >Mileage: </strong> {{ vehicles.mileage }} </p>
                                <p><strong class="titles" >Fuel Type: </strong> {{ vehicles.fuel_type }} </p>
                                <p><strong class="titles" >Color: </strong> {{ vehicles.color }} </p>
                            </div>
                            <div class="col-md-6">
                                <p><strong class="titles" >Transmission: </strong> {{ vehicles.transmission }} </p>
                                <p><strong class="titles" >Engine Capacity: </strong> {{ vehicles.engine_capacity }} </p>
                                <p><strong class="titles" >Registration: </strong> {{ vehicles.registration }} </p>
                            </div>
                        </div>
                        <div class="row mt-5 pl-3">
                            <a href="/register" class="btn btn-warning font-weight-bold">Reserve & Buy this Car</a>
                        </div>
                    </div>
                </div>


                <!-- <div class="row mt-3 mb-5 pl-3">
					<h4 class="titles text-uppercase font-weight-bold">Features</h4>

                    <div class="row mt-2 pl-2 text-white">
                        <ul class="nav nav-tabs bg-warning rounded-0 text-dark" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase font-weight-bold pl-5 pr-5" data-toggle="tab" href="#home">Interior</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase text-muted font-weight-bold pl-5 pr-5" data-toggle="tab" href="#menu1">Exterior</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase text-muted font-weight-bold pl-5 pr-5" data-toggle="tab" href="#menu2">Safety and Technology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase text-muted font-weight-bold pl-5 pr-5" data-toggle="tab" href="#menu3">Performance</a>
                            </li>
                        </ul>


                        <div class="tab-content">
                            <div id="home" class="container tab-pane active mt-5 mb-5"><br>

                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Leather seats</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>7 Seater</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex">
                                            <div class="col-md-12">
                                                <p>Airbags</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Sunroof</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>All black</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex">
                                            <div class="col-md-12">
                                                <p>Power Seats</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="menu1" class="container tab-pane fade mt-5 mb-5"><br>
                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Rear Spoiler</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Twin Exhaust</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex">
                                            <div class="col-md-12">
                                                <p>Rear hook</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Fog Lights</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="menu2" class="container tab-pane fade mt-5 mb-5"><br>
                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>AC & ABS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Airbag</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex">
                                            <div class="col-md-12">
                                                <p>Central Locking</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Infortaintment System</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Height Control</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="menu3" class="container tab-pane fade mt-5 mb-5"><br>
                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>4700 CC</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Petrol Enginer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex">
                                            <div class="col-md-12">
                                                <p>4 wheel drive</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4 pt-4 pb-4  bg-dark">
                                        <div class="d-flex border-right">
                                            <div class="col-md-12">
                                                <p>Auto transmission</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <Footer />
    </div>
</template>

<style scoped>
	#car-details .btn {
		border-radius: 20px;
		padding: 5px 30px 5px 30px;
	}
	#car-details .btn:hover {
		background-color: #262228;
		color: #fff;
		border: none;
	}

	.titles {
		color: #fece00;
		font-weight: bold;
		font-size: 17px;
	}
</style>

<script>
	import Navbar from "../includes/Header.vue";
	import Jumbotron from "../includes/PagesJumbtron.vue";
	import Footer from "../includes/Footer.vue";

	export default {
		data() {
			return {
				vehicles: [],

				vehicle_images: [],

				vehicle_id: "",

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
			Jumbotron,
			Footer,
		},

		mounted: function () {
			axios
				.get("http://localhost:8000/api/vehicles/" + this.vehicle_id)
				.then((ress) => {
					//console.log(this.$route.params.id);
					ress.data.data.forEach((element) => {
						if (element.id == this.$route.params.id) {
							this.vehicles = element;
							this.vehicle_images = JSON.parse(element.images);
						}
					});
				})
				.catch((err) => {});
		},

		computed: {
			vehicle_image() {
				let v_image = "/uploads/cars/";
				return v_image;
			},

			hero() {
				let hero = "../images/hero1.png";
				return hero;
			},
		},

		methods: {
			formatInput() {
				this.calculator.carprice.toLocaleString();
			},

			calculateInstallments() {
				//deposit payable (50% car value + tracking fees + instance + handling fees)
				this.calculator.deposit = (
					Number(this.calculator.carprice) * 0.5
				).toLocaleString();

				//loan principle
				let loan_principle = this.calculator.carprice - this.calculator.deposit;

				//interest (25 percent divided by 12months)
				let monthly_interest = (2.08 / 100) * (this.calculator.carprice * 0.5);

				if (this.calculator.paymentperiod == "") {
					this.calculator.monthlypayment == " ";
				} else {
					//monthly payment
					this.calculator.monthlypayment = Math.round(
						(monthly_interest * this.calculator.paymentperiod +
							this.calculator.carprice * 0.5) /
							this.calculator.paymentperiod
					).toLocaleString();
				}
			},
		},
	};
</script>

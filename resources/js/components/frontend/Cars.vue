<template>
    <div>
        <div id="header">

            <Navbar />

            <Jumbotron />
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
                    <div class="col-sm-3 col-md-3" v-for="vehicle in submit" v-bind:key="vehicle.value">
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

                                <router-link class="btn btn-block btn-warning pt-2 pb-2 pr-5 pl-5" :to="{ name: 'viewcar', params: { id: vehicle.id }}">view this car</router-link>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <Footer />
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
		height: 600px;
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

				make: [
					{ text: "toyota", value: "toyota" },
					{ text: "nissan", value: "nissan" },
					{ text: "subaru", value: "subaru" },
					{ text: "honda", value: "honda" },
					{ text: "mitsubishi", value: "mitsubishi" },
					{ text: "mercedes-benz", value: "mercedes-benz" },
					{ text: "mazda", value: "mazda" },
					{ text: "volkswagen", value: "volkswagen" },
					{ text: "bmw", value: "bmw" },
					{ text: "land-rover", value: "land-rover" },
					{ text: "isuzu", value: "isuzu" },
					{ text: "audi", value: "audi" },
					{ text: "suzuki", value: "suzuki" },
					{ text: "lexus", value: "lexus" },
					{ text: "ford", value: "ford" },
					{ text: "acmat", value: "acmat" },
					{ text: "alfa-romeo", value: "alfa-romeo" },
					{ text: "audi", value: "audi" },
					{ text: "aveling-barford", value: "aveling-barford" },
					{ text: "bentley", value: "bentley" },
					{ text: "bmw", value: "bmw" },
					{ text: "bomag", value: "bomag" },
					{ text: "captain", value: "captain" },
					{ text: "chevrolet", value: "chevrolet" },
					{ text: "claas", value: "claas" },
					{ text: "daihatsu", value: "daihatsu" },
					{ text: "equipment-machinery", value: "equipment-machinery" },
					{ text: "ford", value: "ford" },
					{ text: "fuso", value: "fuso" },
					{ text: "hino", value: "hino" },
					{ text: "honda", value: "honda" },
					{ text: "hyundai", value: "hyundai" },
					{ text: "isuzu", value: "isuzu" },
					{ text: "jeep", value: "jeep" },
					{ text: "kia", value: "kia" },
					{ text: "land-rover", value: "land-rover" },
					{ text: "lexus", value: "lexus" },
					{ text: "leyland", value: "leyland" },
					{ text: "mahindra", value: "mahindra" },
					{ text: "man", value: "man" },
					{ text: "massey-ferguson", value: "massey-ferguson" },
					{ text: "mazda", value: "mazda" },
					{ text: "mercedes-benz", value: "mercedes-benz" },
					{ text: "mini", value: "mini" },
					{ text: "mitsubishi", value: "mitsubishi" },
					{ text: "nissan", value: "nissan" },
					{ text: "peugeot", value: "peugeot" },
					{ text: "porsche", value: "porsche" },
					{ text: "proton", value: "proton" },
					{ text: "renault", value: "renault" },
					{ text: "skygo", value: "skygo" },
					{ text: "subaru", value: "subaru" },
					{ text: "suzuki", value: "suzuki" },
					{ text: "tata", value: "tata" },
					{ text: "toyota", value: "toyota" },
					{ text: "trailer", value: "trailer" },
					{ text: "volkswagen", value: "volkswagen" },
					{ text: "volvo", value: "volvo" },
				],

				model: [
					{ text: "1000", value: "1000" },
					{ text: "4-runner", value: "4-Runner" },
					{ text: "86", value: "86" },
					{ text: "allex", value: "Allex" },
					{ text: "allion", value: "Allion" },
					{ text: "alphard", value: "Alphard" },
					{ text: "altezza", value: "Altezza" },
					{ text: "aqua", value: "Aqua" },
					{ text: "aristo", value: "Aristo" },
					{ text: "aurion", value: "Aurion" },
					{ text: "auris", value: "Auris" },
					{ text: "avalon", value: "Avalon" },
					{ text: "avanza", value: "Avanza" },
					{ text: "avensis", value: "Avensis" },
					{ text: "axio", value: "Axio" },
					{ text: "axion", value: "Axion" },
					{ text: "aygo", value: "Aygo" },
					{ text: "bb", value: "bB" },
					{ text: "belta", value: "Belta" },
					{ text: "blade", value: "Blade" },
					{ text: "blizzard", value: "Blizzard" },
					{ text: "brevis", value: "Brevis" },
					{ text: "c-hr", value: "C-HR" },
					{ text: "caetano", value: "Caetano" },
					{ text: "caldina", value: "Caldina" },
					{ text: "cami", value: "Cami" },
					{ text: "camry", value: "Camry" },
					{ text: "carib", value: "Carib" },
					{ text: "carina", value: "Carina" },
					{ text: "celica", value: "Celica" },
					{ text: "celsior", value: "Celsior" },
					{ text: "ch-r", value: "CH-R" },
					{ text: "chaser", value: "Chaser" },
					{ text: "coaster", value: "Coaster" },
					{ text: "condor", value: "Condor" },
					{ text: "conquest", value: "Conquest" },
					{ text: "corolla", value: "Corolla" },
					{ text: "corolla-cross", value: "Corolla Cross" },
					{ text: "corona", value: "Corona" },
					{ text: "corsa", value: "Corsa" },
					{ text: "cressida", value: "Cressida" },
					{ text: "cresta", value: "Cresta" },
					{ text: "crown", value: "Crown" },
					{ text: "cynos", value: "Cynos" },
					{ text: "denso", value: "Denso" },
					{ text: "duet", value: "Duet" },
					{ text: "dyna", value: "Dyna" },
					{ text: "echo", value: "Echo" },
					{ text: "es", value: "ES" },
					{ text: "estima", value: "Estima" },
					{ text: "etios", value: "Etios" },
					{ text: "fchv", value: "FCHV" },
					{ text: "fielder", value: "Fielder" },
					{ text: "fj-cruiser", value: "FJ CRUISER" },
					{ text: "fjcruiser", value: "fjcruiser" },
					{ text: "fk", value: "FK" },
					{ text: "fortuner", value: "Fortuner" },
					{ text: "fun-cargo", value: "Fun Cargo" },
					{ text: "fxs", value: "FXS" },
					{ text: "gaia", value: "Gaia" },
					{ text: "grand-hiace", value: "Grand Hiace" },
					{ text: "granvia", value: "Granvia" },
					{ text: "gt1", value: "GT1" },
					{ text: "harrier", value: "Harrier" },
					{ text: "hiace", value: "HiAce" },
					{ text: "highlander", value: "Highlander" },
					{ text: "hilux", value: "Hilux" },
					{ text: "hino", value: "Hino" },
					{ text: "hmv", value: "HMV" },
					{ text: "innova", value: "Innova" },
					{ text: "ipsum", value: "Ipsum" },
					{ text: "iq", value: "iQ" },
					{ text: "isis", value: "ISIS" },
					{ text: "ist", value: "IST" },
					{ text: "jobsun", value: "Jobsun" },
					{ text: "kluger", value: "Kluger" },
					{ text: "land-cruiser", value: "Land Cruiser" },
					{ text: "land-cruiser-prado", value: "Land Cruiser Prado" },
					{ text: "lc70", value: "LC70" },
					{ text: "levin", value: "Levin" },
					{ text: "lexcen", value: "Lexcen" },
					{ text: "lite-ace", value: "Lite-Ace" },
					{ text: "marino", value: "Marino" },
					{ text: "mark-ii", value: "Mark II" },
					{ text: "mark-ii-blit", value: "Mark II Blit" },
					{ text: "mark-x", value: "Mark X" },
					{ text: "master", value: "Master" },
					{ text: "matrix", value: "Matrix" },
					{ text: "mr-s", value: "MR-S" },
					{ text: "mr2", value: "MR2" },
					{ text: "nadia", value: "Nadia" },
					{ text: "noah", value: "Noah" },
					{ text: "opa", value: "Opa" },
					{ text: "paseo", value: "Paseo" },
					{ text: "passo", value: "Passo" },
					{ text: "picnic", value: "Picnic" },
					{ text: "pixis", value: "Pixis" },
					{ text: "platz", value: "Platz" },
					{ text: "pod", value: "Pod" },
					{ text: "porte", value: "Porte" },
					{ text: "premio", value: "Premio" },
					{ text: "previa", value: "Previa" },
					{ text: "prius", value: "Prius" },
					{ text: "proace", value: "Proace" },
					{ text: "probox", value: "Probox" },
					{ text: "progress", value: "Progress" },
					{ text: "publica", value: "Publica" },
					{ text: "quantum", value: "Quantum" },
					{ text: "ractis", value: "Ractis" },
					{ text: "raum", value: "Raum" },
					{ text: "rav4", value: "RAV4" },
					{ text: "regius-van", value: "Regius Van" },
					{ text: "retro", value: "Retro" },
					{ text: "rsc", value: "RSC" },
					{ text: "rumion", value: "Rumion" },
					{ text: "run-x", value: "Run-X" },
					{ text: "rush", value: "Rush" },
					{ text: "sa", value: "SA" },
					{ text: "sai", value: "Sai" },
					{ text: "scion", value: "Scion" },
					{ text: "sequoia", value: "Sequoia" },
					{ text: "sera", value: "Sera" },
					{ text: "sienna", value: "Sienna" },
					{ text: "sienta", value: "Sienta" },
					{ text: "soarer", value: "Soarer" },
					{ text: "solara", value: "Solara" },
					{ text: "soluna", value: "Soluna" },
					{ text: "spacio", value: "Spacio" },
					{ text: "spade", value: "Spade" },
					{ text: "sparky", value: "Sparky" },
					{ text: "sprinter", value: "Sprinter" },
					{ text: "stallion", value: "Stallion" },
					{ text: "starlet", value: "Starlet" },
					{ text: "succeed", value: "Succeed" },
					{ text: "supra", value: "Supra" },
					{ text: "surf", value: "Surf" },
					{ text: "t100", value: "T100" },
					{ text: "t70", value: "T70" },
					{ text: "tacoma", value: "Tacoma" },
					{ text: "tazz", value: "Tazz" },
					{ text: "tercel", value: "Tercel" },
					{ text: "terrier", value: "Terrier" },
					{ text: "townace", value: "Townace" },
					{ text: "toyoace", value: "Toyoace" },
					{ text: "trd", value: "TRD" },
					{ text: "tundra", value: "Tundra" },
					{ text: "vanguard", value: "Vanguard" },
					{ text: "vellfire", value: "Vellfire" },
					{ text: "venture", value: "Venture" },
					{ text: "venza", value: "Venza" },
					{ text: "verossa", value: "Verossa" },
					{ text: "verso", value: "Verso" },
					{ text: "vios", value: "Vios" },
					{ text: "vista", value: "Vista" },
					{ text: "vitz", value: "Vitz" },
					{ text: "voltz", value: "Voltz" },
					{ text: "voxy", value: "Voxy" },
					{ text: "will", value: "Will" },
					{ text: "windom", value: "Windom" },
					{ text: "wish", value: "Wish" },
					{ text: "xyr", value: "XYR" },
					{ text: "yaris", value: "Yaris" },
					{ text: "yaris-hatchback", value: "Yaris Hatchback" },
				],

				years: [
					{ text: "2021", value: "2021" },
					{ text: "2020", value: "2020" },
					{ text: "2019", value: "2019" },
					{ text: "2018", value: "2018" },
					{ text: "2017", value: "2017" },
					{ text: "2016", value: "2016" },
					{ text: "2015", value: "2015" },
					{ text: "2014", value: "2014" },
					{ text: "2013", value: "2013" },
					{ text: "2012", value: "2012" },
					{ text: "2011", value: "2011" },
					{ text: "2010", value: "2010" },
					{ text: "2009", value: "2009" },
					{ text: "2008", value: "2008" },
					{ text: "2007", value: "2007" },
					{ text: "2006", value: "2006" },
					{ text: "2005", value: "2005" },
				],

				priceRanges: [
					{ text: "Ksh 100,000", value: "100000" },
					{ text: "Ksh 500,000", value: "500000" },
					{ text: "Ksh 700,000", value: "700000" },
					{ text: "Ksh 1,000,000", value: "1000000" },
					{ text: "Ksh 2,000,000", value: "2000000" },
					{ text: "Ksh 3,000,000", value: "3000000" },
					{ text: "Ksh 4,000,000", value: "4000000" },
					{ text: "Ksh 5,000,000", value: "5000000" },
					{ text: "Ksh 6,000,000", value: "6000000" },
					{ text: "Ksh 7,000,000", value: "7000000" },
					{ text: "Ksh 8,000,000", value: "8000000" },
					{ text: "Ksh 9,000,000", value: "9000000" },
					{ text: "Ksh 10,000,000", value: "10000000" },
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
				.get("http://localhost:8000/api/vehicles")
				.then((res) => {
					this.vehicles = res.data.data;
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

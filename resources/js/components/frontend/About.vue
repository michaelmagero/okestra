<template>
    <div>
        <Navbar />

        <Jumbotron />

        <div id="about">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-md-10">
                        <h4 class="text-black title-backgrounds pt-2 pb-2 pl-3 mb-3 ">Who Are We</h4>
                        <p>We are building Kenya's and Africa's first paperless car-financing platform that empowers our customers to conveniently buy and own cars
                            with simple and affordable monthly plans.
                        </p>
                    </div>
                </div>


                <div class="row mt-5 mb-5">
                    <div class="col-md-10">
                        <h4 class="text-black title-backgrounds pt-2 pb-2 pl-3 mb-3 ">Our Story</h4>
                        <p>Established to help aspiring car owners have a seamless and hussle free experience to shop for cars, consent to agreements and have their cars collected or delivered, all online and on one platform.
                        </p>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-md-10">
                        <h4 class="text-black title-backgrounds pt-2 pb-2 pl-3 mb-3 ">Our Mission</h4>
                        <p>Our mission is to treat both customers and employees like guests in our home and make certain our home is a place people want to be. We ensure that every transaction is guided by the principals of honesty, integrity and loyalty.</p>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-md-10">
                        <h4 class="text-black title-backgrounds pt-2 pb-2 pl-3 mb-3">Our Vision</h4>
                        <p>Serve people everywhere with the "joy of expanding their life's potential" through affordable financial products.</p>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-md-10">

                    <h4 class="text-black title-backgrounds pt-2 pb-2 pl-3 mb-3">Our core values</h4>
                    <ol>
                        <li><span class="core-values font-weight-bold text-uppercase"> INTEGRITY </span> guides our business every day.</li>
                        <li>We believe in creating <span class="core-values font-weight-bold text-lowercase"> LONG TERM CUSTOMER LOYALTY. </span></li>
                        <li>Work should be <span class="core-values font-weight-bold text-lowercase"> ENJOYABLE, ACCOUNTABLE and CONSISTENT </span> every day.</li>
                        <li>We exist because we are <span class="core-values font-weight-bold text-lowercase"> PASSIONATE </span> about what we do.</li>
                    </ol>
                    </div>
                </div>
            </div>
        </div>

        <Footer />
    </div>
</template>


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
		},
	};
</script>

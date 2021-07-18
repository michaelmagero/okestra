<template>
    <div>
        <Navbar />

        <div id="support-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h3>welcome to okestra</h3>
                        <p>help center</p>
                        <span>
                            <form class="form-inline">
                                <div class="form-group mx-sm-6 mb-5">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="text" class="form-control" id="inputPassword2" placeholder="Search">
                                </div>
                            </form>
                        </span>

                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div id="support-categories">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Transfers <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Withdrawals <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Loans <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Account Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Security <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Crypto Purchases <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Ientity Verification <i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">General FAQ <i class="fa fa-arrow-right"></i></a>
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

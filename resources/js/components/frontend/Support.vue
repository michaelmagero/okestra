<template>
    <div>
        <Navbar />

        <div id="support-intro">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <h1 class="mb-0 pb-0">Welcome to Okestra</h1>
                        <span class="help-text">help center</span>
                        <span>
                            <form class="form-inline">
                                <div class="form-group mx-sm-6 mb-5">
                                    <input type="text" class="search-bar form-control" id="inputPassword2" placeholder="Search">
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
                        <a href="#" class="btn btn-primary active">Transfers  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Withdrawals  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Loans  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Account Details  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Security  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Crypto Purchases  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">Identity Verification  &nbsp;<i class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-primary">General FAQ  &nbsp;<i class="fa fa-arrow-right"></i></a>
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

<template>
    <div>
        <Navbar />

        <div id="okestra-intro">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <img src="/images/bitcoin4.jpeg" class="intro-img" alt="" width="900" height="600"><br>
                        <h3 class="mt-3">who are we?</h3>
                        <p>At Okestra, we pride ourselves on the variety and depth of talent our team represents, ranging from
                        financial space to the world of crypto. At Okestra, we pride ourselves on the variety and depth of talent
                        our team represents, ranging from financial space to the world of crypto. At Okestra, we pride ourselves on
                        the variety and depth of talent our team represents, ranging from financial space to the world of crypto.
                        </p>

                        <p>At Okestra, we pride ourselves on the variety and depth of talent our team represents, ranging from
                        financial space to the world of crypto. At Okestra, we pride ourselves on the variety and depth of talent
                        our team represents, ranging from financial space to the world of crypto. At Okestra, we pride ourselves on
                        the variety and depth of talent our team represents, ranging from financial space to the world of crypto.
                        </p>

                        <a href="#" class="btn btn-primary pt-2 pb-2 pr-5 pl-5">Get Started</a>

                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div id="okestra-team">
            <div class="container">
                <div id="row" class="text-center">
                    <h1>Leadership team</h1>
                    <p class="intro-text">At Okestra, we pride ourselves on the variety and depth of talent
                    our team represents, ranging from financial space to the world of crypto</p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/team1.jpeg" alt="">
                                <h3>John Doe</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/team1.jpeg" alt="">
                                <h3>John Doe</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/team1.jpeg" alt="">
                                <h3>John Doe</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/team1.jpeg" alt="">
                                <h3>John Doe</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/team1.jpeg" alt="">
                                <h3>John Doe</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/team1.jpeg" alt="">
                                <h3>John Doe</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="okestra-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Get in touch with us</h2>
                        <p class="text-muted">Complete the form below and we will be in touch</p>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <a href="" class="btn btn-primary">Send Message</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div id="newsletter-signup-cta" style="background-color: #E8E8ED;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h1>Use Okestra</h1>
                        <p>Keep ownership of your crypto and get cash at your convenience.</p><br>
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

        <!-- Are commited to git -->

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

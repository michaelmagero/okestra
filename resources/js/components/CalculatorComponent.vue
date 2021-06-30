<template>
    <div>
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
</style>

<script>
	import axios from "axios";

	export default {
		data() {
			return {

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

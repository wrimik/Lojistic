/**
 * Created by Mike on 7/22/15.
 */
ISUser = new Vue({
    el: '#intelliship-signup',
    methods: {
        submit: function () {
            if (validateVisible()) {
                this.send();
            }
        },
        resendEmail: function () {
            $.ajax({
                url: '/shipping-software/sign-up/email',
                method: 'post',
                data: this.$data
            }).done(function () {
                alert('Email Sent!');
            });
        },
        send: function () {
            if (!this.$data.sending) {
                this.$data.sending = true;
                this.$data.intelliship_user.phonehome = this.$data.intelliship_user.phonebusiness; //dumb bug fix
                slack('Intelliship Signup Sent: ' + JSON.stringify(this.$data));
                $.ajax({
                    url: '/shipping-software/sign-up/create',
                    method: 'post',
                    dataType: "json",
                    data: this.$data
                })
                    .fail(function (response) {
                        alert("Weird, it didn't go through. Try again?");
                        slack("BAD! Intelliship Signup: " + JSON.stringify(response));
                        ISUser.$data.sending = false;
                    })
                    .done(function (response) {
                        slack("GOOD! Intelliship Signup: " + JSON.stringify(response));
                        ISUser.$data.sending = false;
                        if (response.SUCCESS == '1') {
                            ISUser.response = response;
                            Interview.nextStep();
                        } else if (response.SUCCESS == "0") {
                            if (response.MESSAGE == "Duplicate contact found.") {
                                response.MESSAGE = "It looks like you've already created an " +
                                    "account with that email address. Would you " +
                                    "like to visit the login screen?";
                                if (confirm(response.MESSAGE)) {
                                    window.location.href = 'https://shipping.lojistic.com';
                                }
                            } else {
                                alert(response.MESSAGE);
                            }
                        }
                    });
            }
        },
        verifyUpsCredentials: function () {
            this.$data.ups_credentials.loading = true;
            $.ajax({
                url: '/ups-user/validate',
                dataType: "json",
                method: 'post',
                data: {
                    username: this.$data.intelliship_user.upswebusername,
                    password: this.$data.intelliship_user.upswebuserpassword
                }
            }).done(function (response) {
                ISUser.$data.ups_credentials.pending = false;
                ISUser.$data.ups_credentials.loading = false;
                ISUser.$data.ups_credentials.valid = response.valid;
            }).fail(function () {
                //TODO: error message and exception handling
                ISUser.$data.ups_credentials.pending = false;
                ISUser.$data.ups_credentials.loading = false;
                ISUser.$data.ups_credentials.valid = true;
            });
        },
        toggle: function (attr) {
            this.$data[attr] = !this.$data[attr];
            Vue.nextTick(function () {
                $(window).resize();
            });
        }
    },
    data: {
        sending: false,
        using_ups: false,
        using_fedex: false,
        response: '',
        ups_credentials: {
            pending: true,
            loading: false,
            valid: false
        },
        intelliship_user: {
            action: 'configure_new_customer_user',
            ajax: 1,
            type: 'JSON',
            contact_country: "US",
            contact_firstname: "",
            contact_lastname: "",
            contact_company: "",
            contact_email: "",
            contact_password: "",
            contact_confirmpassword: "",
            phonebusiness: "",
            contact_offercode: "",
            contact_address1: "",
            contact_address2: "",
            contact_city: "",
            contact_state: "",
            contact_zip: "",
            phonehome: "",
            contact_fax: "",
            phonemobile: "",
            fedexwebaccount: "",
            fedexmeternumber: "",
            bill_address1: "",
            bill_address2: "",
            bill_city: "",
            bill_state: "",
            bill_zip: "",
            bill_country: "",
            upswebaccount: "",
            upswebusername: "",
            upswebuserpassword: "",
            terms: false
        }
    }
});

//function go() {
//    $('#bam').addClass('animated bounceIn');
//    $('.interview').animate({'height': 0}, 1000,
//    function () {
//        $('.interview').css({display: none});
//    });
//}

Interview.init(false);

//# sourceMappingURL=intelliship-signup.js.map

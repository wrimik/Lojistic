/**
 * Done in JS so it can be cached
 * Created by Mike on 11/16/15.
 */

Sidenav = new Vue({ // requires Nav
    el: '#side-nav',
    data: {
        state: 'closed',
        groups:[
            { // sign in
                name: 'SIGN IN',
                state: '',
                links: [
                    {
                        name: 'Intelliship<br/> Shipping Software',
                        url: 'https://shipping.lojistic.com/'
                    },
                    {
                        name: 'DATADOT<br/>Audit Reporting',
                        url: 'https://data.lojistic.com/'
                    }
                ]
            },//end sign in
            {// solutions
                name: 'SOLUTIONS',
                state: '',
                links: [
                    {
                        name: ' Parcel &amp; Freight Audit',
                        url: '/parcel-freight-bill-audit'
                    },
                    {
                        name: ' Carrier Negotiation',
                        url: '/carrier-contract-negotiation'
                    },
                    {
                        name: ' Wholesale LTL Rates',
                        url: '/wholesale-ltl-rate-marketplace'
                    },
                    {
                        name: ' Freight Management',
                        url: '/freight-management'
                    },
                    {
                        name: 'Shipping Insurance',
                        url: '/shipping-insurance'
                    },
                    {
                        name: 'Shipping Software',
                        url: '/shipping-software'
                    },
                    {
                        name: 'Tracking Software',
                        url: '/halo'
                    },
                    {
                        name: 'Savings Checklist',
                        url: '/savings-checklist'
                    }
                ]
            },// end solutions
            {
                name: 'FREE CALCULATORS',
                state: '',
                links: [
                    {
                        name: 'Audisee, Instant Audit',
                        url: '/audisee/instant-parcel-audit'
                    },
                    {
                        name: 'Insurance Cost Calculator',
                        url: '/shipping-insurance#insurance-calculator'
                    },
                    {
                        name: 'FedEx &amp; UPS Rates Calculator',
                        url: '/shipping-costs-calculators/fedex-ups-rates-calculator'
                    },
                    {
                        name: 'FedEx & UPS Rates Comparison Tool',
                        url: '/shipping-costs-calculators/fedex-ups-rate-comparison-tool'
                    },
                    {
                        name: 'All Shipping Cost Calculators',
                        url: '/shipping-costs-calculators'
                    }
                ]
            },
            { // resources
                name: 'SHIPPING RESOURCES',
                state: '',
                links: [
                    {
                        name: '5 Secrets White Paper',
                        url: '/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know'
                    },
                    {
                        name: 'General Price Increase White Paper',
                        url: '/white-papers/general-price-increase'
                    },
                    {
                        name: 'Fuel Surcharge White Paper',
                        url: '/white-papers/fuel-surcharge'
                    },
                    {
                        name: 'All White Papers',
                        url: '/white-papers'
                    },
                    {
                        name: 'Shipping Resource Guide',
                        url: '/shipping-resource-guide'
                    }
                ]
            },// end resources
            { // about
                name: 'ABOUT LOJISTIC',
                state: '',
                links: [
                    {
                        name: 'Our Story',
                        url: '/lojistic'
                    },
                    {
                        name: 'About Lojistic',
                        url: '/about-lojistic'
                    },
                    {
                        name: 'Cost Reduction Services',
                        url: '/reduce-shipping-costs'
                    },
                    {
                        name: 'Pricing',
                        url: '/lojistic-pricing'
                    },
                    {
                        name: 'Referral Partner Program',
                        url: '/lojistic-referral-program'
                    },
                    {
                        name: 'News &amp; Events',
                        url: '/freight-news-events'
                    },
                    {
                        name: 'Careers',
                        url: '/lojistic-careers'
                    }
                ]
            },// end about
            { // contact
                name: 'CONTACT US',
                state: '',
                links: [
                    {
                        name: '(800) 783-5753',
                        url: 'tel:8007835753'
                    },
                    {
                        name: 'Email Us',
                        url: 'mailto:info@lojistic.com'
                    },
                    {
                        name: 'Contact Info',
                        url: '/contact-lojistic'
                    },
                ]
            },
            {
                name: 'SOCIAL',
                state: '',
                links: [
                    {
                        name: 'Google+',
                        url: 'https://plus.google.com/+Lojistic'
                    },
                    {
                        name: 'LinkedIn',
                        url: 'http://www.linkedin.com/company/lojistic'
                    },
                    {
                        name: 'Twitter',
                        url: 'https://www.twitter.com/LojisticUSA'
                    },
                    {
                        name: 'Facebook',
                        url: 'https://www.facebook.com/LojisticUSA'
                    },
                    {
                        name: 'Blog',
                        url: '/blog'
                    }
                ]
            },
        ]
    },
    methods:{
        close: function(){
            Nav.toggleMenu();
        },
        menuIs: function(state){
          return this.state == state;
        },
        target: function(url){
          return (url.indexOf('http') == -1 ? '' : '_blank');
        },
        toggleGroupState: function($index){
            var group = this.groups[$index];
            group.state == 'open' ? group.state = 'closed' : group.state = 'open';
        }
    }
})
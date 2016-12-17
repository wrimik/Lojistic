<div class="step animated">
    <div class="panel panel-default ">
        <div class="panel-trim green"></div>
        <div class="panel-body ups-instructions text-center fs-16">
            <div>
                <h3>Awesome!</h3>
                <h4>Intelliship is spinning up your account now.</h4>
                <i class="eloji eloji-intelliship green fs-56"></i>
                <br>

                <h3>
                    <span class="flatGrey">Your Username Is: &nbsp;</span>
                    @{{ intelliship_user.contact_email }}
                </h3>
            </div>
            <hr class="slim">
            <div v-if="using_fedex">
                <b>Just a heads up!</b>

                <p>
                    FedEx usually takes about about 5 minutes to send all your custom rates to your new Intelliship
                    account. As they are doing that, you are welcome to start exploring your shipping system!
                </p>
                <hr class="slim">
            </div>
            <a target="_blank" href="https://shipping.lojistic.com" class="btn btn-lg green">
                LOG IN &amp; START SHIPPING!
            </a>
        </div>
    </div>
</div>

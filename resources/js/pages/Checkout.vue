<template>
    <section>
        <!-- Step one: add an empty container to your page -->

        <h1>Deliveboo</h1>
        <p>Benvenuto su Deliveboo</p>

        <div id="dropin-wrapper">
        <div id="checkout-message"></div>

        <form id="payment-form" action="/admin/on/your/server" method="post">
            <!-- Putting the empty container you plan to pass to
            `braintree.dropin.create` inside a form will make layout and flow
            easier to manage -->
            <div id="dropin-container"></div>
            <input type="submit" />
            <input type="hidden" id="nonce" name="payment_method_nonce"/>
        </form>

            <button id="submit-button">Sgancia il denaro</button>
        </div>

        <!-- <script type="text/javascript"> -->
            <!-- call `braintree.dropin.create` code here -->
        <!-- </script> -->
    </section>
</template>
<script>

export default {
    name: 'Checkout',
    data: () => ({
      
    }),
    mounted() {
        let myCheckoutScript = document.createElement('script')
        myCheckoutScript.setAttribute('src', 'https://js.braintreegateway.com/web/dropin/1.33.0/js/dropin.min.js')
        document.head.appendChild(myCheckoutScript);
        let jQueryScript = document.createElement('script')
        jQueryScript.setAttribute('src', 'http://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous')
        document.head.appendChild(jQueryScript);
        braintree.dropin.create({
        container: document.getElementById('dropin-container'),
            authorization: 'sandbox_csryh9w7_jcvymfwrf26rzh7c',
            container: '#dropin-container'
        }, (error, dropinInstance) => {
            
            if (error) console.error(error);
                form.addEventListener('submit', event => {
                event.preventDefault();
                dropinInstance.requestPaymentMethod((error, payload) => {
                if (error) console.error(error);
                    // Step four: when the user is ready to complete their
                    //   transaction, use the dropinInstance to get a payment
                    //   method nonce for the user's selected payment method, then add
                    //   it a the hidden field before submitting the complete form to
                    //   a server-side integration
                    document.getElementById('nonce').value = payload.nonce;
                    form.submit();
                });
            });

            // Methods documented at https://braintree.github.io/braintree-web-drop-in/docs/current/Dropin.html
        });
    },
    methods: {
        

    },

    created: function(){
        window.scrollTo(0, 0);
    }

}

</script>
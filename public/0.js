(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./public/js/checkout.js":
/*!*******************************!*\
  !*** ./public/js/checkout.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* // Step two: create a dropin instance using that container (or a string
//   that functions as a query selector such as `#dropin-container`)
braintree.dropin.create({
    container: document.getElementById('dropin-container'),
    // ...plus remaining configuration
}, (error, dropinInstance) => {
    // Use `dropinInstance` here
    // Methods documented at https://braintree.github.io/braintree-web-drop-in/docs/current/Dropin.html
}); */
var button = document.querySelector('#submit-button');
braintree.dropin.create({
  // Insert your tokenization key here
  authorization: 'sandbox_csryh9w7_jcvymfwrf26rzh7c',
  container: '#dropin-container'
}, function (createErr, instance) {
  button.addEventListener('click', function () {
    instance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
      // When the user clicks on the 'Submit payment' button this code will send the
      // encrypted payment information in a variable called a payment method nonce
      $.ajax({
        type: 'POST',
        url: '/checkout',
        data: {
          'paymentMethodNonce': payload.nonce
        }
      }).done(function (result) {
        // Tear down the Drop-in UI
        instance.teardown(function (teardownErr) {
          if (teardownErr) {
            console.error('Could not tear down Drop-in UI!');
          } else {
            console.info('Drop-in UI has been torn down!'); // Remove the 'Submit payment' button

            $('#submit-button').remove();
          }
        });

        if (result.success) {
          $('#checkout-message').html('<h1>Successo</h1><p>Your Drop-in UI is working! Check your <a href="https://sandbox.braintreegateway.com/login">sandbox Control Panel</a> for your test transactions.</p><p>Refresh to try another transaction.</p>');
        } else {
          console.log(result);
          $('#checkout-message').html('<h1>Error</h1><p>Check your console.</p>');
        }
      });
    });
  });
});

/***/ })

}]);
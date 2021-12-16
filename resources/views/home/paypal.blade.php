<!DOCTYPE html>
<html>

<head>
  <title></title>
 <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
                            <center>
                              <h4>Name: {{$customer->first_name}} {{$customer->last_name}}</h4>
                              <h4>Order Ref: {{$chko->reference_id}}</h4>
                              <h4>Order Details: {{$brand->name}} {{$pattern->name}} {{$tyre->name}} X {{$tyre->quantity}}</h4>
                              <h3>Total : $ {{$chkh->price}} </h3>
                              <div id="paypal-button-container"></div>

                                <script
                                src="https://www.paypal.com/sdk/js?client-id=AVG_uQNHqduwmTOXJzZSM2tTkKH57HJPIa-KLRVDU_D_6PjpR7wqTRqTQw63WufYS9lHV2A9wRskE0NX&disable-funding=credit,card"> // Required. 
                                 Replace SB_CLIENT_ID with your sandbox client ID.
                              </script>
                              </center>
    <script>


// Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                          application_context: {
                            brand_name : '{{$tyre->name}}',
                            user_action : 'PAY_NOW',
                            shipping_preference: 'NO_SHIPPING'
                          },

                    purchase_units: [{
                        amount: {
                            value: '{{$chkh->price}}'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    window.location.href = '{{route("paypal-success")}}?ref_id='+details.id;
                });
            }


        }).render('#paypal-button-container');

  </script>

</body>
</html>                           


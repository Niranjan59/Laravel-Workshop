@extends('master')
@section("content")
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

<div class="custom-product">
     <div class="col-sm-10">
        <span id="message"></span> <br>
      <div style="padding-top:40px; position: fixed; width:80%;">
        <table class="table table-striped table-bordered ">
          <thead class="bg-primary">
            <tr>
              <th>Charges</th>
              <th>Costs</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td>Amount</td>
              <td> Rs. {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td> Rs. 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td> Rs. 100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td> Rs. {{$total+100}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <button id="payment-button" class="btn btn-info">Pay with Khalti</button>
          </div>

      </div>
      
        
            {{-- <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button id="payment-button" type="submit" class="btn btn-info">Pay with Khalti</button>

              </form> --}}
     </div>
</div>
<script>
  var config = {
      // replace the publicKey with yours
      "publicKey": "test_public_key_99697f8fd7fc41e8b922cb5f84cf4e82",
      "productIdentity": "1234567890",
      "productName": "Panasonic TV",
      "productUrl": "http://127.0.0.1:8000/detail/2",
      "paymentPreference": [
          "KHALTI",
          "EBANKING",
          "MOBILE_BANKING",
          "CONNECT_IPS",
          "SCT",
          ],
      "eventHandler": {
          onSuccess (payload) {
              // hit merchant api for initiating verfication
              console.log(payload);
              if(payload.idx){
                $.ajaxSetup({
                         headers: {
                                    'X-CSRF-TOKEN' : '{{csrf_token()}}',
                                  }
                                 });
                                 $.ajax({
                                 method: 'POST',
                                  url: "{{route('khalti.verify')}}",
                                   data: payload,
                                    success: function(response)
                                     { 
                                      document.getElementById("message").innerHTML = " <div class='alert alert-success alert-dismissible fade in'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Bravo!</strong> Payment Successfully done. </div>";
                                    },
                                      error: function(data) 
                                      {
                                         console.log(data.message);
                                      } 
                                     });

              }
          },
          onError (error) {
              console.log(error);
          },
          onClose () {
              // console.log('widget is closing');
          }
      }
  };

  var checkout = new KhaltiCheckout(config);
  var btn = document.getElementById("payment-button");
  btn.onclick = function () {
      // minimum transaction amount must be 10, i.e 1000 in paisa.
      checkout.show({amount: 10000});
  }
</script>

@endsection 
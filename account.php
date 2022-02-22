<?php
  $pagename = "Account";
  include('header.php');
  if ($_SESSION["loggedin"] !== "loggedin"){
    header("location: sign in.php");
    exit();
}
?>
<style>
        .c-border{
            border-bottom: 3px dotted white;
            padding-bottom: 10px;
        }
        .c2-border{
            border-bottom: 3px solid #0d6efd;
            padding-bottom: 10px;
        }
        input{
            border: none;
            outline:none;
            width: 100%;
        }
        .border-top-2{
            border-top: 3px solid #0d6efd !important;
        }
        
        </style>
          <main>
              <div class="container-fluid bg-primary text-white pt-4 pb-5 text-center">
                <h1 class="c-border d-inline text-uppercase fw-bold">Account</h1>
              </div>
              <div class="container">
                  <div>
                      <h2 class="text-end c2-border pb-3 text-uppercase pt-3">Home Account</h2>
                  </div>
                  <div class="c2-border pb-3">
                      <input type="text" value="RSP Company LTD."><br>
                      <input type="text" value="Date: null">
                  </div>
                  <div class="container">
                      <div class="row row-cols-1 row-cols-md-2">
                          <div class="col"><h2 class="text-center mt-2 ">BILL TO</h2>
                            <table class="table table-bordered border-primary">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <Th>Information</Th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Reciver Name</td>
                                      <td><input type="text" value="Swadhin"></td>
                                  </tr>
                                  <tr>
                                      <td>Campany Name</td>
                                      <td><input type="text" value="Campany Name"></td>
                                  </tr>
                                  <tr>
                                      <td>Street Address</td>
                                      <td><input type="text" value="Street Address"></td>
                                  </tr>
                                  <tr>
                                      <td>City, ST ZIP Code</td>
                                      <td><input type="text" value="City, ST ZIP Code"></td>
                                  </tr>
                                  <tr>
                                      <td>Phone</td>
                                      <td><input type="text" value="Phone"></td>
                                  </tr>
                              </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <h2 class="text-center mt-2 ">BILL FROM</h2>
                      <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <Th>Information</Th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Reciver Name</td>
                                <td><input type="text" value="Swadhin"></td>
                            </tr>
                            <tr>
                                <td>Campany Name</td>
                                <td><input type="text" value="Campany Name"></td>
                            </tr>
                            <tr>
                                <td>Street Address</td>
                                <td><input type="text" value="Street Address"></td>
                            </tr>
                            <tr>
                                <td>City, ST ZIP Code</td>
                                <td><input type="text" value="City, ST ZIP Code"></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><input type="text" value="Phone"></td>
                            </tr>
                        </tbody>
                      </table>
                        </div>
                      </div>
                  </div>
                  <div class="container">
                      <div class="c2-border mb-5"></div>
                      <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq1" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip1" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io1" disabled></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq2" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip2" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io2" disabled></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq3" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip3" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io3" disabled></td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq4" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip4" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io4" disabled></td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq5" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip5" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io5" disabled></td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq6" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip6" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io6" disabled></td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq7" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip7" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io7" disabled></td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq8" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip8" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io8" disabled></td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq9" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip9" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io9" disabled></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td><input type="text" placeholder="Item name"></td>
                                <td><input type="number" placeholder="Quantity" class="iq10" value="0"></td>
                                <td><input type="number" placeholder="Price" class="ip10" value="0"></td>
                                <td><input type="text" placeholder="Total" class="io10" disabled></td>
                            </tr>
                            <tr class="border-top-2">
                                <th colspan="3"></th>
                                <th>Total Qnt.</th>
                                <th><!--<input type="number" class=".tq">--><samp class="tqhtml"></samp></th>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th>SubTotal</th>
                                <th><!--<input type="number" class=".stp">--><samp class="stphtml"></samp></th>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th>Owing</th>
                                <th class="bg-success"><input type="number" class="ow bg-success text-white" value="0"></th>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th>Total price</th>
                                <th><!--<input type="number" class=".tp">--><samp class="tphtml"></samp></th>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th>Submitting</th>
                                <th class="bg-danger"><input type="number" class="su bg-danger text-white" value="0"></th>
                            </tr>
                            <tr>
                                <th colspan="3"></th>
                                <th>Due</th>
                                <th><!--<input type="number" class=".du">--><samp class="duhtml"></samp></th>
                            </tr>
                        </tbody>
                      </table>
                  </div>
                  <center><button class="btn btn-success p-2 mt-3">Submit</button> <button class="btn btn-primary p-2 mt-3">Print</button></center>
                  <div class="cointainer mt-5 pb-5">
                      <center>
                          <div>Make all checks payable to RSP Company Ltd.</div>
                          <div>Thank you for RSP Company Ltd.</div>
                          <div>kanchan,  Dhaka, bangladesh  1461, +8801717430585,   swadhin90@hotmail.com</div>
                      </center>
                  </div>
              </div>
          </main>
        <script>
            $('.ow,.su,.iq1,.ip1,.iq2,.ip2,.iq3,.ip3,.iq4,.ip4,.iq5,.ip5,.iq6,.ip6,.iq7,.ip7,.iq8,.ip8,.iq9,.ip9,.iq10,.ip10').on('change',function(e){
               e.preventDefault();
               
               let iq1 = parseInt($('.iq1').val());
               let ip1 = parseInt($('.ip1').val());

               let iq2 = parseInt($('.iq2').val());
               let ip2 = parseInt($('.ip2').val());

               let iq3 = parseInt($('.iq3').val());
               let ip3 = parseInt($('.ip3').val());

               let iq4 = parseInt($('.iq4').val());
               let ip4 = parseInt($('.ip4').val());

               let iq5 = parseInt($('.iq5').val());
               let ip5 = parseInt($('.ip5').val());

               let iq6 = parseInt($('.iq6').val());
               let ip6 = parseInt($('.ip6').val());

               let iq7 = parseInt($('.iq7').val());
               let ip7 = parseInt($('.ip7').val());

               let iq8 = parseInt($('.iq8').val());
               let ip8 = parseInt($('.ip8').val());

               let iq9 = parseInt($('.iq9').val());
               let ip9 = parseInt($('.ip9').val());

               let iq10 = parseInt($('.iq10').val());
               let ip10 = parseInt($('.ip10').val());

               let ow = parseInt($('.ow').val());
               let su = parseInt($('.su').val());

               let iio1 = iq1 * ip1;
               $('.io1').val(iio1);

               let iio2 = iq2 * ip2;
               $('.io2').val(iio2);

               let iio3 = iq3 * ip3;
               $('.io3').val(iio3);

               let iio4 = iq4 * ip4;
               $('.io4').val(iio4);

               let iio5 = iq5 * ip5;
               $('.io5').val(iio5);

               let iio6 = iq6 * ip6;
               $('.io6').val(iio6);

               let iio7 = iq7 * ip7;
               $('.io7').val(iio7);

               let iio8 = iq8 * ip8;
               $('.io8').val(iio8);

               let iio9 = iq9 * ip9;
               $('.io9').val(iio9);

               let iio10 = iq10 * ip10;
               $('.io10').val(iio10);

               let tt1q = iq1 + iq2 + iq3 + iq4 + iq5 + iq6 + iq7 + iq8 + iq9 + iq10;
               $('.tqhtml').html(tt1q);

               let ttstp = iio1 + iio2 + iio3 + iio4 + iio5 + iio6 + iio7 + iio8 + iio9 + iio10;
               $('.stphtml').html(ttstp);

               let tttp = ow + ttstp;
               $('.tphtml').html(tttp);

               let ttdu = tttp - su;
               $('.duhtml').html(ttdu);
            });
        </script>   
    </body>
</html>
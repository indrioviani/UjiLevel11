<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/logoo.png" type="image/x-icon">
      <title>Samudra Rasa</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/user.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
        .center {
            margin-right: auto;
            margin-left: auto;
            margin-top: 100px;
            width: 70%;
            text-align: center;
            padding: 30px;
        }
        table, th, td {
            border: 1px solid grey;
        }
        .th_deg {
            font-size: 30px;
            padding: 5px;
           
        }
        .img_deg {
            height: 200px;
            width: 200px;
        }
        .total_deg {
            font-size: 20px;
            padding: 40px;
        }
        .btn {
           
            margin: 30px;
            justify-content: center; /* Hanya diperlukan jika tombol di dalam flex container */
         }
         
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section starts -->
         @include('user.header')
         <!-- end header section -->
         <!-- slider section -->
         <!-- end slider section -->
         <!-- why section -->
         @if(session()->has('message'))
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               {{session()->get('message')}}
            </div>
         @endif
         <div class="center">
            <table>
               <tr>
                  <th class="th_deg">No</th>
                  <th class="th_deg">Gambar Produk</th>
                  <th class="th_deg">Nama Produk</th>
                  <th class="th_deg">Jumlah Produk</th>
                  <th class="th_deg">Total</th>
                  <th class="th_deg">Action</th>
               </tr>
               <?php $totalprice = 0; $no = 1; ?>
               @foreach($cart as $cart)
                  <tr>
                     <td>{{$no++}}</td> 
                     <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                     <td>{{$cart->product_title}}</td>
                     <td>{{$cart->quantity}}</td>
                     <td>Rp {{$cart->price}}</td>
                    
                     <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product?')" href="{{url('remove_cart', $cart->id)}}">Remove Product</a></td>
                  </tr>
                  <?php $totalprice += $cart->price; ?>
               @endforeach
            </table>
            <div>
               <h1 class="total_deg">Total Price : Rp {{$totalprice}}000</h1>
            </div>
            <div>
               <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>
               <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
               <a href="" class="btn btn-danger">Pay Using Card</a>
            </div>
         </div>
      </div>
      <!-- footer start -->
      @include('user.footer')
      <!-- footer end -->
      <!-- jQuery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
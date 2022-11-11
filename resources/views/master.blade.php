<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Punya Barang</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
</head>
<body>
    @include('partials.navbar')
   <hr>
   <div class="fotohome">
   <img src="{{ asset ('images') }}/fotohome1.png" width="1400px" height="550px">
   </div>
   <div class="containerbody">
    <center><br>
        <h1 class="h1"> New Arrival </h1><br>
    </center><br>
    <table border="0">
        <tr>
            <td>
                <div class="card">
                    <img src="{{ asset ('images') }}/iphone13pro.png" height="250px" alt="Iphone 13 Pro" style="width:250px; padding-top: 30px">
                    <br><h3>Iphone 13 Pro</h3>
                    <p class="price">Rp. 16.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
            <td>
                <div class="card">
                    <img src="{{ asset ('images') }}/redminote11pro.jpg" height="265px" alt="Iphone 13 Pro" style="width:250px; padding-top: 10px">
                    <h3>Redmi Note 11 Pro</h3>
                    <p class="price">Rp. 16.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
            <td>
                <div class="card">
                    <img src="{{ asset ('images') }}/macbookair.png" height="180px" alt="Iphone 13 Pro" style="width:250px; padding-top:25px; margin-top:40px; margin-bottom:25px;">
                    <h3>Macbook Air M1</h3>
                    <p class="price">Rp. 21.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
            <td>
                <div class="card">
                    <img src="{{ asset ('images') }}/iphone13pro.png"height="250px" alt="Iphone 13 Pro" style="width:250px">
                    <h3 style="margin-top: 20px;">Iphone 13 Pro</h3>
                    <p class="price">Rp. 16.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
        </tr>
    </table>
   </div>
   <section>
    <h1>Punya Barang</h1>
    <p>Ini adalah halaman untuk menjelaskan profil toko ini mengapa dibuat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Duis feugiat libero molestie condimentum porttitor. Curabitur mauris elit,
        consectetur non pulvinar id, tristique et mauris. Donec a ex et orci vehicula consectetur vitae in massa. Etiam neque est, fringilla at interdum id, varius lobortis ligula. Donec erat ipsum, scelerisque non pretium in, facilisis in metus. Nulla facilisi. Mauris in nibh vulputate, sodales lacus porta, accumsan tellus.
    </p>
   </section>
   <footer>
    <h2>Contact Us</h2>
    <p style="color: white">Jl. Mahar Martanegara No. 48. Utama. Cimahi Selatan</p>
   </footer>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
          $('.nav_links li').click(function(){
            $('.nav_links li a').removeClass("active");
            $(this).addClass("active");
        });
    });
</script>
</body>
</html>
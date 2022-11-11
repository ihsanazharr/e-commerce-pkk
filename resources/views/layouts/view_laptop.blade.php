@include('navbar')
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
<div class="containerbody-laptop">
    <br>
        <h6 class="page-title"> Laptop</h6>
        <p class="capt-page-title">All of models, take what you want</p>
        <br>
    <table border="0">
        <tr>
            <td>
                <div class="card-laptop">
                    <img src="{{ asset ('images') }}/msimodern14.png" height="180px" alt="Iphone 13 Pro" style="width:250px; padding-top: 30px">
                    <br><h3>MSI Modern 14</h3>
                    <p class="price">Rp. 12.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
            <td>
                <div class="card-laptop">
                    <img src="{{ asset ('images') }}/asusrogzephyrus.png" height="110px" alt="Asus ROG Zephyrus" style="width:auto; padding-top: 50px; padding-bottom:50px">
                    <h3>Asus ROG Zephyrus</h3>
                    <p class="price">Rp. 21.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
            <td>
                <div class="card-laptop">
                    <img src="{{ asset ('images') }}/macbookair.png" height="110px" alt="Macbook Air M1" style="width:auto; padding-top:10px; padding-bottom: 23px; margin-top:40px; margin-bottom:25px;">
                    <h3>Macbook Air M1</h3>
                    <p class="price">Rp. 21.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
            <td>
                <div class="card-laptop">
                    <img src="{{ asset ('images') }}/asusprobook.png" height="140px" alt="ASUS Proart Studiobook" style="width:auto; padding-top: 40px; padding-bottom: 8px;" >
                    <h3 style="margin-top: 20px;">ASUS Proart Studiobook</h3>
                    <p class="price">Rp. 25.000.000</p><br>
                    <button>Add to Cart</button>
                  </div>
            </td>
        </tr>
    </table>
   </div>
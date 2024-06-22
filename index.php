<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to login page if not logged in
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" href="/pics/bato.png" type="image">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/fontawesome-free-6.5.1-web/css/fontawesome.css">
<link rel="stylesheet" href="/fontawesome-free-6.5.1-web/css/regular.css">
<link rel="stylesheet" href="/fontawesome-free-6.5.1-web/css/solid.css">
<link rel="stylesheet" href="/fontawesome-free-6.5.1-web/css/brands.css">
<link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">

<link rel="icon" href="logo.jpg" type="image/jpg">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <!-- Your HTML content for the index page -->
</body>
</html>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

/* google fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

/* For smaller screens */
@media screen and (max-width: 768px) {
    .nav {
        flex-direction: column;
        align-items: center;
    }

    .logo {
        margin-bottom: 20px;
    }

    .cart {
        width: 100%;
        max-width: 100%;
    }
    .sbag{
        width: 100%;
        max-width: 100%;
    }

    .cart.active {
        width: 100%;
    }
    .sbag.active {
        width: 100%;
    }

    /* Add more responsive styles as needed */
}

/* For larger screens */
@media screen and (min-width: 992px) {
    .nav {
        justify-content: space-between;
    }

    .cart {
        width: 360px;
    }

    /* Add more responsive styles as needed */
}



*{
    font-family: 'Poppins', sans-serif;
margin: 0;
padding: 0;
scroll-padding-top: 2rem;
scroll-behavior: smooth;
box-sizing: border-box;
list-style: none;
text-decoration: none;


}

:root{
    --main-color: #fd4646;
    --text-color:#171427 ;
    --bg-color: #fff ;
}


img{
    width: 100%;
}

body{
    color: var(--text-color);
}

.container{
    max-width: 1068px;
    margin: auto;
    width: 100%;
    background-color: rgba(43, 83, 192, 0.377);
   
    
}
.body{
background-color: rgb(6, 27, 66);
}
section{
    padding: 4rem 0 3rem;
}

header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: var(--bg-color);
    box-shadow: 0 1px 4px hsl(0 4% 15% / 10%);
    z-index: 100;
}

.nav{
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 20px 0;
    background-color: orangered;
}

.logo{
    font-size: 1.1rem;
    color: var(--text-color);
    font-weight: 400;
   left:  1rem;
    position: relative;


}

#cart-icon{
    font-size: 1.8rem;
    cursor: pointer;
    margin-left: 360px;
    color: orange;
    font-size: larger;
}

.cart{
    position: fixed;
    top: 0;
    right: -100%;
    width: 360px;
    /* min-height: 100vh; */
    height: 100vh;
    padding: 20px;
    background: rgb(241, 118, 72);
    box-shadow: -2px 0 4px hsl(0 4% 15% / 10%);
    transition: 0.3s;      
    Overflow-y:scroll; 
        
        
}
.grpic{
    height: 70px;
    width: 120px;
    position: fixed;
    left: 10rem;
   
    
}
.hahaha{
    position: relative;
    height: 30px;
    width: 70px;
    border-radius: 8px;
    right: -5rem;
    background-color:orange ;
}
.sbag{
    position: relative;
    right: -18rem;
}
.forpayment{
    /* border: none; */
    height:30px;
    padding: 10px;
}
.cart.active{
    right: 0;
}
.cart-title{
    text-align: center;
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 2rem;
}
.cart-box{
    display: grid;
    grid-template-columns: 32% 50% 18%;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
}
.cart-img{
    width: 100px;
    height: 100px;
    object-fit: contain;
    padding: 10px;
    background-color: white;
    border-radius: 10px;
}
.detail-box{
    display: grid;
    row-gap: 0.5rem;

}

.cart-product-title{
    font-size: 12px;
    text-transform: uppercase;
}
.cart-price{
    font-weight: 500;
}
.cart-quantity{
    border: 1px solid var(--text-color);
    outline-color: var(--main-color);
    width: 2.4rem;
    text-align: center;
    font-size: 1rem;
}

.cart-remove{
    font-size: 24px;
    color: orangered;
    cursor: pointer;
}
.total-title{
    font-size: 1rem;
    font-weight: 600;

}
.total-prize{
    margin-left: 0.5rem;

}

.btn-buy{
    display: flex;
    margin: 1.5rem auto 0 auto;
    padding: 12px 20px;
    border: none;
    background: var(--main-color);
    color: var(--bg-color);
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;

}

.btn-buy:hover{
    background-color: var(--text-color);
}
#close-cart{
position: absolute;
top: 1rem;
right: 0.8rem;
font-size: 2rem;
color: var(--text-color);
cursor: pointer;
}
/* .wag{
    position: fixed;
} */
.total{
    /* position: fixed; */
    display: flex;
    justify-content: flex-end;
    margin-top: 1.5rem;
    border-top: 1px solid var(--text-color);
}
.section-title{
    font-size: 1.5rem;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1.5rem;
}

.shop{
    margin-top: 2rem;
    padding: 10px;
    padding-top: 60px;
    
}

.shop-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, auto));
    gap: 1.5rem;
}
.product-img{
    height: 250px;
    width: 100%;
    /* height: auto; */
    margin-bottom: 0.5rem;
    background-color: white;

    
}

.product-box{
    position: relative;
     
   
}
.product-box:hover{
/* padding: 5px; */
border: 1px solid var(--text-color);
transition: .4s;
}

.product-title{
    font-size: 1.1rem;
    font-weight: 500;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
}

.price{
    font-weight: 500;

}
.add-cart{
    position: absolute;
    bottom: 0;
    right: 0;
    background: var(--text-color);
    color: var(--bg-color);
    padding: 10px;
    cursor: pointer;
}

.add-cart:hover{
    background: hsl(29, 93%, 39%);
}

 #fortot{
    height: 30px;
    padding: 10px;
 }
 .navbar{
    font-size: x-large;
    background-color: orange;
 
 }
 .logs{
    border-radius: 50%;
    height: 50px;
    width: 50px;
    margin-left: 60px;
 }
 .hahahaha{
    margin-left: 190px;
    height: 30px;
    width: 150px;
    font-size: large;
    background-color: rgba(91, 107, 209, 0.767);
    transition: .5s ease;
    border-radius: 10px;
 }
 .hahahaha:hover{
    background-color: red;
 }
.dropdown-item{
    font-size: x-large;
    background-color: white;
}
.wan{
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition:1s all ease;
  }
  
  .wan.active{
    transform: translateY(0);
    opacity: 1;
  }    
    .reveal{
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition:1s all ease;
  }
  
  .tuu.active{
    transform: translateY(0);
    opacity: 1;
  }      .reveal{
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition:1s all ease;
  }
  
  .trii.active{
    transform: translateY(0);
    opacity: 1;
  }
  .por{
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition:1s all ease;
  }
  
  .por.active{
    transform: translateY(0);
    opacity: 1;
  }

</style>

</head>
<div>
    
    <header>
         
<!-- <div class="nav container">
     
    <a href="#" class="logo">KARGAMING-PC SHOP
    </a>

    <i class="fa-solid fa-bag-shopping sbag" id="cart-icon"></i>
    <img src="/codes htmll//pics/kargaming-removebg-preview.png" alt="" class="grpic">
    <button class="hahaha" id="lagout">LogOut</button>

</div> -->

<div>
<nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
        <div class="container-fluid">
          <img src="images/bg-2.jpg" alt="" class="logs">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#app">Appliances</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#make">MakeUp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gad">Gadgets</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#foot">Contact</a></li>
                  <li><a class="dropdown-item" href="#foot">Copyright</a></li>
                  <li><a class="dropdown-item" href="#foot">Owner</a></li>
                </ul>
              </li>
            </ul>
            <i class="fa-solid fa-bag-shopping sbag" id="cart-icon"></i>
            <button class="hahahaha" id="lagout">LogOut</button>
          </div>
        </div>
      </nav>
</div>

     <div class="cart">
     <h2>Welcome, <?php echo $username; ?>!</h2>
        <h2 class="cart-title">Your Cart</h2>
        
        <div class="cart-content">
 
        </div>
        <div class="wag"> 
            <div class="wagna"> 
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">₱0</div>
        </div>
    </div>
</div>
        <!-- bayad to -->
        <div class="bayad"> 
        <div class="akin payment">
            <label id="lahat">₱</label>
            <input type="number" name="" id="fortot" value="₱"><br>
            <h5 id="tootal">Please Enter The Total</h5>
            
            <br><label id="suklii">₱</label>
            <input type="number" class="forpayment" name="bayadmo" id="bayadmo">
            <h5 class="parag">Please enter your payment</h5>
        </div>
        
        <div class="sukli">
            <br><br>
            <p id="suklimo">Your change is</p>
        </div>
         
    </div>
        <button type="button" class="btn-buy" onclick="hahah()">Buy Now</button>
        <i class="fa-solid fa-x " id="close-cart"></i>
    </div>
</div>


    </header>
   

<div class="shop container">
    <h2 class="section-title">Shop Products</h2>
    <div class="boxx"> 
        <div class="boxi">
            <div class="gads">
                <center>
                <h1 id="app" >Appliances</h1>
                </center>
            </div>
        </div>       
    </div>


    <div class="shop-content">
        
   

    <div class="product-box">
        <img src="images/appli/aircon.jpg" alt="" class="product-img ">
        <h2 class="product-title">Aircon</h2>
        <span class="price">₱24000</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/blender.jpg" alt="" class="product-img ">
        <h2 class="product-title">blender</h2>
        <span class="price">₱800</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/cooler.webp" alt="" class="product-img ">
        <h2 class="product-title">Cooler</h2>
        <span class="price">₱8000</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/drill.jpg" alt="" class="product-img ">
        <h2 class="product-title">Drill</h2>
        <span class="price">₱8500</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
  

    <div class="product-box">
        <img src="images//appli/kettle.webp" alt="" class="product-img ">
        <h2 class="product-title">electric kettle</h2>
        <span class="price">₱400</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/lamp..jpg" alt=""  class="product-img ">
        <h2 class="product-title">Lamp</h2>
        <span class="price">₱500</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/Laundry.jpg" alt=""  class="product-img ">
        <h2 class="product-title">laundry</h2>
        <span class="price">₱12200</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/microwave.jpg" alt=""  class="product-img ">
        <h2 class="product-title">Microwave </h2>
        <span class="price">₱4000</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>

    

    <div class="product-box">
        <img src="images/appli/oven.jpg" alt=""  class="product-img wan">
        <h2 class="product-title">Oven toaster </h2>
        <span class="price">₱8600</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/Refrigeration.jpg" alt=""  class="product-img wan">
        <h2 class="product-title ">Refrigerator </h2>
        <span class="price">₱80200</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/rice cooker.webp" alt=""  class="product-img wan">
        <h2 class="product-title">rice cooker </h2>
        <span class="price">₱600</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/speaker.jpg" alt="" class="product-img wan">
        <h2 class="product-title">speaker </h2>
        <span class="price">₱8050</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/tv.webp" alt=""  class="product-img wan">
        <h2 class="product-title">Television </h2>
        <span class="price">₱5000</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/vacum.webp" alt=""  class="product-img wan">
        <h2 class="product-title">Vacuum Cleaner </h2>
        <span class="price">₱1800</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/washing..jpg" alt=""  class="product-img wan">
        <h2 class="product-title">Washing Machine </h2>
        <span class="price">₱800</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/appli/waterdispenser.webp" alt="" class="product-img wan">
        <h2 class="product-title">Water Dispencer </h2>
        <span class="price">₱1200</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
   </div>
   </div>

</section>

<section class="shop container">
<h2 class="section-title">Shop Products</h2>
        <div class="boxx"> 
            <div class="boxi">
                <div class="gads">
                    <center>
                    <h1 id="make" >Make Up</h1>
                    </center>
                </div>
            </div>       
        </div>

        <div class="shop-content">
 
   
    <div class="product-box">
        <img src="images/make/brushes.jpg" alt="" class="product-img wan">
        <h2 class="product-title">Brushes</h2>
        <span class="price">₱200</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    
    <div class="product-box">
        <img src="images/make/concealer.jpg" alt="" class="product-img wan">
        <h2 class="product-title">concealer</h2>
        <span class="price">₱600</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/make/contour.jpg" alt=""  class="product-img wan">
        <h2 class="product-title">contour</h2>
        <span class="price">₱600</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/make/eyeliner.jpg" alt=""  class="product-img wan">
        <h2 class="product-title">Eye Liner</h2>
        <span class="price">₱200</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
   

 

   
    <div class="product-box">
        <img src="images/make/foundation.jpg" alt=""  class="product-img wan">
        <h2 class="product-title">foundation</h2>
        <span class="price">₱400</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/make/highlighter.jpg" alt=""  class="product-img wan">
        <h2 class="product-title">highlighter</h2>
        <span class="price">₱240</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/make/mascara.png" alt=""  class="product-img wan">
        <h2 class="product-title">mascara</h2>
        <span class="price">₱240</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    <div class="product-box">
        <img src="images/make/primer.webp" alt=""  class="product-img wan">
        <h2 class="product-title">primer</h2>
        <span class="price">₱300</span>
        <i class="fa-solid fa-bag-shopping add-cart"></i>
    </div>
    </div>
        
        </section>
    
  

    <section class="shop container">
    <h2 class="section-title">Shop Products</h2>
    <div class="boxx"> 
        <div class="boxi">
            <div class="gads">
                <center>
                <h1 id="gad" >Gadgets</h1>
                </center>
            </div>
        </div>       
    </div>
    <div class="shop-content">

    <div class="wan2">
        <div class="product-box">
            <img src="/codes htmll//pics/mouse/gaming mouse.jpg" alt="" class="product-img wan">
            <h2 class="product-title">Gaming mouse</h2>
            <span class="price">₱800</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll/pics/mouse/logitech mouse.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">logitech mouse wireless</h2>
            <span class="price">₱900</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/mouse/m0use.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">asus mouse / led</h2>
            <span class="price">₱800</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/mouse/mous3.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">asus mouse  </h2>
            <span class="price">₱900</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
        </div>

        <div class="tuu2">
        <div class="product-box">
            <img src="/codes htmll//pics/case cpu/case.png" alt=""  class="product-img wan">
            <h2 class="product-title">CPU case </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
        <div class="product-box">
            <img src="/codes htmll//pics/case cpu/casing.png" alt=""  class="product-img wan">
            <h2 class="product-title">cpu case simple </h2>
            <span class="price">₱1000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/case cpu/png-clipart-computer-cases-housings-microatx-personal-computer-corsair-components-pc-case-electronic-device-power-converters.png" alt=""  class="product-img wan">
            <h2 class="product-title">old casing outer </h2>
            <span class="price">₱2000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/headset/G2050-BLUE.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">headset blue </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
        </div>
        <div class="trii2">

       
     
        <div class="product-box">
            <img src="/codes htmll//pics/headset/gaming headset.png" alt=""  class="product-img wan">
            <h2 class="product-title">headset pink </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/kbord/A4TECH Keyboard.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">a4tech keyboard </h2>
            <span class="price">₱450</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/kbord/KEYRON Mechanical Keyboard.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">KEYRON Mechanical Keyboard </h2>
            <span class="price">₱3500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/mboard/1080 gpu.png" alt=""  class="product-img wan">
            <h2 class="product-title">GeForce GTX 1080 </h2>
            <span class="price">₱6000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
        </div>
        <div class="por2">

      
     
        <div class="product-box">
            <img src="/codes htmll//pics/mboard/asus-rog-strix-b660-a-gaming-wifi-d4-motherboard-6.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">asus rog strix b660 </h2>
            <span class="price">₱7000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/mboard/motherboard.PNG" alt=""  class="product-img wan">
            <h2 class="product-title">motherboard </h2>
            <span class="price">₱5000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/monitor/Samsung 24-inch monitor.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">samsung 24 ing monitor </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/monitor/Xiaomi Mi 27-inch monitor.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">xiaomi mi 27-inch monitor </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
        </div>
      

     
        
     
        <div class="product-box">
            <img src="/codes htmll//pics/other/hyperxram.png" alt=""  class="product-img wan">
            <h2 class="product-title">hyper x ram </h2>
            <span class="price">₱5000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/other/Inplay-Ice-Tower-3-in-1-Ver-1.png" alt=""  class="product-img wan">
            <h2 class="product-title">inplay ice tower fan </h2>
            <span class="price">₱2000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/bato.png" alt=""  class="product-img wan">
            <h2 class="product-title">Hollow Blocks kargador only </h2>
            <span class="price">₱25</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/other/RTX_3080_Gaming_X_Trio_15.png" alt=""  class="product-img wan">
            <h2 class="product-title">RTX 3080 Gaming X Trio </h2>
            <span class="price">₱5000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
        
        
        

       
        <div class="product-box">
            <img src="/codes htmll//pics/other/trident gaming.png" alt=""  class="product-img wan">
            <h2 class="product-title">trident for gaming</h2>
            <span class="price">₱2000</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/webcam/gaming webcam.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">Gaming webcam </h2>
            <span class="price">₱2500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/webcam/webcam.jpg" alt=""  class="product-img wan">
            <h2 class="product-title">webcam hd2k </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
     
        <div class="product-box">
            <img src="/codes htmll//pics/webcam/webcam.png" alt=""  class="product-img wan">
            <h2 class="product-title">webcam hd1080p </h2>
            <span class="price">₱1500</span>
            <i class="fa-solid fa-bag-shopping add-cart"></i>
        </div>
      

</div>

    

</section>
<footer id="foot" >
    <center>
      <p>for more information please contact our social media accounts</p>
    <i class="fa-brands fa-facebook" class="">www.facebook.com/shopph</i><br>
    <i class="fa-brands fa-instagram">www.instagram.com/shopph</i><br>
    <i class="fa-brands fa-google">shopph@gmail.com</i>
  </center>
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">©copyright 2024 <br>Juvercinet Erojo <br>
    Wilgelyn Torres</p>
    <p class="text-center text-body-secondary">developer</p> 
  </footer>
<script>
    document.getElementById("lagout").addEventListener("click", function() {
    fetch("logout.php", {
        method: "POST",
    })
    .then(response => {
        if (response.redirected) {
            window.location.href = response.url; // Redirect to login page
        }
    })
    .catch(error => console.error('Error:', error));
});

</script>
<script>

let cartIcon  = document.querySelector('#cart-icon')
let cart  = document.querySelector('.cart')
let closecart = document.querySelector('#close-cart')

cartIcon.onclick = () => {
    cart.classList.add('active');
};

closecart.onclick = () => {
    cart.classList.remove('active');
};



if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded',ready )
}else{
    ready();
}

function ready() {
    var reomveCartButtons = document.getElementsByClassName('cart-remove')
    console.log(reomveCartButtons)
    for (var i = 0; i < reomveCartButtons.length; i++){
        var button = reomveCartButtons[i]
        button.addEventListener('click', removeCartItem)
    }
var quantityInputs = document.getElementsByClassName('cart-quantity')
for  (var i = 0; i < quantityInputs.length; i++){
    var input = quantityInputs[i]
    input.addEventListener('change', quantityChanged);
}
var addCart = document.getElementsByClassName('add-cart')
for  (var i = 0; i < addCart.length; i++){
    var button = addCart[i];
    button.addEventListener('click', addCartClicked);

}
document
.getElementsByClassName("btn-buy")[0]
.addEventListener("click", buyButtonClicked);
}

// function buyButtonClicked(){
//     // alert (' Your Order is Placed')
//     var cartContent = document.getElementsByClassName('cart-content')[0]
//     while (cartContent.hasChildNodes()){
//         cartContent.removeChild(cartContent.firstChild)
        
//     }
//     updatetotal();
// }


function removeCartItem(event){
    var buttonClicked =  event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
}

function quantityChanged(event){
    var input = event.target
    if (isNaN(input.value) || input.value <= 0){
input.value = 1;
    }
    updatetotal();
}

function addCartClicked(event) {
var button = event.target;
var shopProducts = button.parentElement;
var title = shopProducts.getElementsByClassName('product-title')[0].innerText;
var price = shopProducts.getElementsByClassName('price')[0].innerText;
var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
addProductToCart(title, price, productImg);
// console.log(title, price, productImg);

updatetotal();
}

function addProductToCart(title, price, productImg){
    var cartShopBox = document.createElement('div');
    cartShopBox.classList.add('cart-box');
    var cartItems = document.getElementsByClassName('cart-content')[0]
    var cartItemsNames = cartItems.getElementsByClassName('cart-product-title')
    for  (var i = 0; i < cartItemsNames.length; i++){
        if (cartItemsNames[i].innerHTML == title){
            alert('you already have this on your cart');
            return;
        }
         
}
 

var cartBoxContent = ` 
      
        <img src="${productImg}" alt="" class="cart-img">
        <div class="detail-box">
        <div class="cart-product-title">${title}</div>
        <div class="cart-price">${price}</div>
        <input type="number" value="1" class="cart-quantity">
        </div>
        <i class="fa-sharp fa-solid fa-trash cart-remove"></i>
         `;


    cartShopBox.innerHTML = cartBoxContent
    cartItems.append(cartShopBox)
    cartShopBox
    .getElementsByClassName('cart-remove')[0]
    .addEventListener('click', removeCartItem);
    cartShopBox
    .getElementsByClassName('cart-quantity')[0]
    .addEventListener('change', quantityChanged);

}
function updatetotal(){
    var cartContent = document.getElementsByClassName('cart-content')[0]
    var cartBoxes = document.getElementsByClassName('cart-box')
    var total = 0;
    for (var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i]
        var priceElement = cartBox.getElementsByClassName('cart-price')[0]
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0]
        var price = parseFloat(priceElement.innerText.replace("₱", ""));
        var quantity = quantityElement.value
        total = total + (price * quantity);
    }

        total = Math.round(total * 100) / 100;

        document.getElementsByClassName('total-price')[0].innerText = "₱" + total; 
    
}


function hahah(){

    var cartContent = document.getElementsByClassName('cart-content')[0]
    while (cartContent.hasChildNodes()){
        cartContent.removeChild(cartContent.firstChild)   
    }
     
    var una = document.getElementById('fortot').value;
    var tuu = document.getElementById('bayadmo').value;

    var comp = parseFloat (una).toFixed(2) - parseFloat (tuu).toFixed(2);
    var parag = document.getElementById('suklimo');

    if  (una === tuu){
        parag.innerHTML = "Your change is ₱" + comp.toFixed(2);
              alert ('Your Order is  Being Processed');
    }
    else if(una <= tuu){
        parag.innerHTML = "Your change is ₱" + comp.toFixed(2);
        alert ('Your Order is being being processed');
    }
    else  {
        
            parag.innerHTML = "Your Payment is insuficient ₱" + comp.toFixed(2);
                  alert ('Please pay the exact amount');

    }
   

    updatetotal();
    
 
}
 



</script>


<script src="/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="/datatables/js/jquery-3.7.1.js"></script>
<script src="/datatables/js/bootstrap.bundle.min.js"></script>
<script src="/datatables/js/dataTables.js"></script>
<script src="/datatables/js/dataTables.bootstrap5.js"></script>
<script src="/datatables/js/dataTables.buttons.js"></script>
<script src="/datatables/js/buttons.bootstrap5.js"></script>
<script src="/datatables/js/jszip.min.js"></script>
<script src="/datatables/js/pdfmake.min.js"></script>
<script src="/datatables/js/vfs_fonts.js"></script>
<script src="/datatables/js/buttons.html5.min.js"></script>
<script src="/datatables/js/buttons.print.min.js"></script>
<script src="/datatables/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- sweetalert -->
<script src="/sweetalert.js"></script>

<script>
        function reveal() {
      var reveals = document.querySelectorAll(".wan");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
      </script> <script>
        function reveal() {
      var reveals = document.querySelectorAll(".tuu");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
      </script> <script>
        function reveal() {
      var reveals = document.querySelectorAll(".trii");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
      </script> <script>
        function reveal() {
      var reveals = document.querySelectorAll(".por");
    
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal);
      </script>


</body>
</html>
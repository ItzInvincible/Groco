<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR GROCERY STORE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

<!--css file link-->
<link rel="stylesheet" href="style.css">

</head>
<body>

<!--header section starts-->
<header class="header">
<a href="#" class="logo"> <i class="fas fa-shopping-cart"></i> groco</a>
<nav class="navbar">
    <a href="#home">home</a>
    <a href="#features">features</a>
    <a href="#products">products</a>
    <a href="#catogori">catogories</a>
    <a href="#review">review</a>
    <a href="#blog">blogs</a>
</nav>

<div class="icons">
<div class="fas fa-bars" id="menu-btn"></div>
<div class="fas fa-search" id="search-btn"></div>
<div class="fas fa-shopping-cart" id="cart-btn"></div>
<div class="fas fa-user" id="login-btn"></div>
</div>
<form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</form>

<div class="shopping-cart">
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="img1.jpg">
        <div class="content">
            <h3>watermelon</h3>
            <span class="price">₹5/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img3.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">₹5/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="ch.jpg" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">₹5/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
                <div class="total">total: ₹15/-</div>
                <a href="#" class="btn">checkout</a>
</div>

    <a href="logout.php"  class="hlo">Logout</a>
</header>    

<section class="home" id="home">
    <div class="con">
        <h3>fresh and <span>organic</span> products for your</h3>
       <p> Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
        veniam facere tempor nisi</p>
        <a href="#"  class="hlo">shop now</a> 
    </div>
</section>


<section class="features" id="features">
    <h1 class="heading">our <span>features</span></h1>

<div class="box-container">


    <div class="box">
        <img src="fr.jpg" alt="">
        <h3>fresh and organic</h3>
        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn">read more</a>       
    </div>
    <div class="box">
        <img src="dl.jpg" alt="">
        <h3>free delivery</h3>
        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn">read more</a>       
    </div>
    <div class="box">
        <img src="mb.jpg" alt="">
        <h3>easy payment</h3>
        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn">read more</a>       
    </div>

</div>
</section>


<section class="products" id="products">
    <h1 class="heading"> our <span>products</span></h1>


        <div class="box-container">
            
            <div class="box">
                <img src="orange.jpg"    alt="">
                <h3>fresh orange</h3>
                <div class="price">₹5-₹9</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
                <div class="box">
                    <img src="img3.png"    alt="">
                    <h3>onion</h3>
                    <div class="price">₹5-₹9</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            
                    <div class=" box">
                        <img src="tomatoes.jpg"    alt="">
                        <h3>tomatos</h3>
                        <div class="price">₹5-₹9</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
        
                        <div class=" box">
                            <img src="cabbage.jpg"    alt="">
                            <h3>fresh cabbage</h3>
                            <div class="price">₹5-₹9</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>

            <div class=" box">
                <img src="potato-table.jpg"    alt="">
                <h3>fresh potato</h3>
                <div class="price">₹5-₹9</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
                <div class=" box">
                    <img src="avocado.jpg"    alt="">
                    <h3>fresh avocado</h3>
                    <div class="price">₹5-₹9</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                    <div class=" box">
                        <img src="carrot.jpg"    alt="">
                        <h3>fresh carrot</h3>
                        <div class="price">₹5-₹9</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
            
                        <div class=" box">
                            <img src="green lemon.jpg"    alt="">
                            <h3>green lemon</h3>
                            <div class="price">₹5-₹9</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                        <div class=" box">
                            <img src="cu.jpg"    alt="">
                            <h3>Cucumber</h3>
                            <div class="price">₹5-₹9</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
        </div>
</section>

<section class="catogori" id="catogori">
    <h1 class="heading">product<span>categories</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="pile-fresh-vegetables.jpg" alt="">
            <h3>vegetables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="fru.jpg" alt="">
            <h3>fresh fruits</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="me.jpg" alt="">
            <h3>dairy products</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="m.jpg" alt="">
            <h3>fresh meat</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
</section>

<section class="review" id="review">
    <h1 class="heading"> customer's<span>review</span></h1>
    <div class=" swiper review-slider">
        <div class="swiper-wrapper">
            <div class=" box">
                <img src="r1.jpg" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Aman</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class=" box">
                <img src="r2.jpg" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Rahul</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class=" box">
                <img src="r3.jpg" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Ragini</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class="box">
                <img src="r4.jpg" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Payal</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class="box">
                <img src="r5.jpg" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Yash</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            
        </div>
    </div>
</section>

<section class="blog" id="blog">
    <h1 class="heading">our <span>blogs</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="b2.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> john</a>
                    <a href="#"> <i class="fas fa-calender"></i> 1st may,2023</a>

                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="b1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Rohit</a>
                    <a href="#"> <i class="fas fa-calender"></i> 15th Aug,2022</a>

                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="b3.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Aman</a>
                    <a href="#"> <i class="fas fa-calender"></i> 3rd Feb,2021</a>

                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
          <h3>groco <i class="fas fa-shopping-basket"></i></h3>
           <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
            veniam facere tempor nisi</p>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/checkpoint/lg/sign-in-another-account?session_redirect=&trk=" class="fab fa-linkedin"></a>

            </div> 
        </div>
         
        
          <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890  </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333  </a>
            <a href="#" class="links"> <i class="fas fa-envelop"></i> rohansingh@gmail.com  </a>
            <a href="#" class="links"> <i class="fas fa-map-market-alt"></i> mumbai, india-400104 </a>
          </div>

          <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home  </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Features  </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Catogori </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Blog</a>
          </div>

          <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
          </div>
     </div>

     <div class="credit"> created by <Span> mr. web dessigner</Span>| all rights reserved</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!--js file link-->
<script src="script.js"></script>

</body>
</html>
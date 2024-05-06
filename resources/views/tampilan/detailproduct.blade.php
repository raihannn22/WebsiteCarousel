@extends('index')

@section('content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


   <div class="container">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "images/shoes_images/shoe_1.jpg" alt = "shoe image">
              <img src = "images/shoes_images/shoe_2.jpg" alt = "shoe image">
              <img src = "images/shoes_images/shoe_3.jpg" alt = "shoe image">
              <img src = "images/shoes_images/shoe_4.jpg" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "images/shoes_images/shoe_1.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "images/shoes_images/shoe_2.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "images/shoes_images/shoe_3.jpg" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "images/shoes_images/shoe_4.jpg" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title">nike shoes</h2>
          <a href = "#" class = "product-link">visit nike store</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>$257.00</span></p>
            <p class = "new-price">New Price: <span>$249.00 (5%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.orem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisiorem ipsum dolor sit amet consectetur adipisi Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>

          </div>
           <div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.696172201573!2d106.7468216!3d-6.1743756!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f76b1fe6e679%3A0x9b4682b49b624c47!2sKontrakan%20H.%20Asnawi!5e0!3m2!1sid!2sid!4v1714948738375!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>


          <div class = "purchase-info">

            <button onclick=" window.open('https://wa.me/+62895363590329')" type = "button" class = "btn">
               <i class = "fab fa-whatsapp fa-lg px-2"> </i>Hubungi Whatsapp
            </button>

          </div>

          <div class = "social-links">
            <p class="mt-3 px-2"> Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  <script src="js/script.js"></script>

@endsection

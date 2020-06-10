<!doctype html>
<html lang="en">
<head>
  <title>Start, Sustain And Scale Your Business</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
        content="Connect with leaders to help you start, sustain and scale your business. Gain access to funding and growth resources.">
  <link href="./assets/images/favicon.png" rel="icon" type="image/png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="./assets/css/bootstrap.css">-->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
  <style>
    ::placeholder {
      color: white;
      font-size: 24px;
      font-weight: lighter;
      font-family: Arial, sans-serif;
    }
  </style>
<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5ecccbba8ee2956d73a499fc/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script--></head>

<body>
<?php
include_once 'main-header.php';
?>
<div class="wrapper">
  <div class="" style="background-image: url(./assets/images/faq-bg.jpg)">
    <div class="container">
      <div class="py-5  row justify-content-center">
        <div class="col-12 my-5 pt-3 pb-5 col-md-6 col-lg-8">
          <img src="./assets/images/logo.webp" height="50px" class="my-4" alt="The Spark logo">
          <h1 class="text-34 text-white">Advice and answers from The Spark Team</h1>
          <form action="search-articles" class="mb-4" method="post">
            <div class="input-grp py-2 d-flex align-items-center w-100 br-0-8 text-white"
                 style="background-color: rgba(156,156,156,0.53)">
           <span>
              <svg class="ml-3 mr-2" fill="white" height="24px" viewBox="0 0 24 24" width="24px"
                   xmlns="http://www.w3.org/2000/svg">
           <path d="M0 0h24v24H0V0z" fill="none"/>
           <path
               d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
         </svg>
           </span>
              <input type="search" placeholder="search for articles"
                     class="flex-grow-1 text-white text-24 mr-3 border-0"
                     style="background-color: transparent;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="bg-pry my-5 text-white d-flex flex-column flex-md-row br-0-8 shadow-thick p-4">
      <div>
        <img src="./assets/images/book-white.svg" class="faq-bk" alt="">
      </div>
      <div class="">
        <h2 class="pt-4">FAQs & Troubleshooting</h2>
        <p class="text-22">The most commonly asked questions across The Spark. <br/>
          9 articles in this collection</p>
      </div>
    </div>
    <div class="bg-tert my-5 text-white d-flex flex-column flex-md-row  br-0-8 shadow-thick p-4">
      <div>
        <img src="./assets/images/book-white.svg" class="faq-bk" alt="">
      </div>
      <div>
        <h2 class="pt-4">Course FAQs</h2>
        <p class="text-22">Answers to FAQs around our courses and course content<br/>
          27 articles in this collection</p>
      </div>
    </div>
    <div class="bg-pry my-5 text-white d-flex flex-column flex-md-row  br-0-8 shadow-thick p-4">
      <div>
        <img src="./assets/images/book-white.svg" class="faq-bk" alt="">
      </div>
      <div>
        <h2 class="pt-4">Magazine FAQs</h2>
        <p class="text-22">All you need to know about our magazine subscriptions and purchasing them<br/>
          9 articles in this collection</p>
      </div>
    </div>
  </div>
    <?php
    include_once 'footer.php' ?>
</div>

</body>
</html>




<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/css/style_lp.css"></link>
</head>

<body>
    <div class="container">
       <div class="video-frame">
           <video src="/img/web_pc_8sec_3.mp4" autoplay muted loop poster="#"></video>
       </div>
       <div class="heading">
           <h1><span>Bag rental</span> The World Best Bags</h1>
        <p>
            Unlimited rental of HERMES, CHANEL, LOUIS VUITTON
        </p>
        <a class="btn-rental" href="/main">Rental Now</a>
        <a class="btn-learn" href="#none">Learn more</a>
       
       </div>
       <div class="sort">
           <em>Bags</em><span>40,000+</span>
       </div>
       <div class="trigger">
           <span></span>
           <span></span>
           <span></span>
       </div>
       <div class="modal-gnb">
           <div class="gnb">
               <a href="#none">About us</a>
               <a href="#none">Contact us</a>
               <a href="#none">FAQ</a>
           </div>
       </div>
    </div>
    <script>
        $('.trigger').click(function(){
            $(this).toggleClass('active')
            $('.modal-gnb').fadeToggle()
        })
    </script>
</body>
</html>
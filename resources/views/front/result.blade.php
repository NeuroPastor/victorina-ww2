<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    
				
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,400;0,700;1,600;1,700&family=IBM+Plex+Serif:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <title>Квест-викторина «По следам героических событий»</title>
</head>
<body>
    <div class="container-fluid">
        <div id="about" class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="text-center" style="display:block;margin:30px auto">
                        <img src="/public/imgs/star.png" style="width: 250px;display:block;margin:30px auto" class="mb-3">
                    </div>
                    <h3 class="text-center">Поздравляем!</h3>
                    <p class="maintext text-center">Вы успешно ответили на все вопросы квест-викторины «По следам героических событий»</p>
                    <p class="maintext text-center">Ваш результат:</p>
                    <h1 class="text-center">{{$member->rating}} из 250 баллов </h1>
                    <h3 class="text-center mt-5">Спасибо за участие в викторине!</h3>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <link rel="stylesheet" href="http://unpkg.com/swiper/css/swiper.min.css">
    <script src="http://unpkg.com/swiper/js/swiper.min.js"></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(62741110, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/62741110" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  </body>
</html>

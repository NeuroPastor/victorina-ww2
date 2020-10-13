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
        <div id="about" class="container vh-100  d-flex pt-5 pb-5">
            <div class="row darkbg align-items-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center"><img src="/public/imgs/star.png" style="width: 250px;" class="mb-3"></div>
                    <h3 class="text-center">Здравствуйте, дорогие ребята и уважаемые учителя!</h3>      
                    <p class="maintext">
                        Добро пожаловать в квест-викторину «По следам героических событий», посвящённую 75-летию великой Победы. 
                    </p>
                    <p class="maintext">
                        Вас ждёт 3 этапа:
                        <ul class="maintext">  
                            <li>1 этап — ответы на вопросы на знание значимых исторических событий каждого года Великой Отечественной войны. </li>
                            <li>2 этап — «шифровальщик», вы выполните задание, как великий Рихард Зорге и расшифруете кодовое слово. </li>
                            <li>3 этап — творческий — вы выложите своё поздравление с Днем Победы. Желаем вам победы!</li>
                        </ul>
                    </p>
                    <a href="{{route('quiz')}}" class="btn-old ml-auto mr-auto"><span class="btn__inner">Начать</span></a>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        jQuery('document').ready(function(){
            // $(".headermenu a").on("click", function(){
            //     var _href = $(this).attr("href");
            //     $(".headermenu a").removeClass("active");
            //     $(this).addClass("active");
            //     $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
            //     return false;
            // });
        })
    </script>
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

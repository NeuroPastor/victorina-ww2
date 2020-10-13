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
        <div id="about" class="container  d-flex pt-5 pb-5 justify-content-center">
            <form action="{{route("quizSave")}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="timestart" value="{{time()}}">
                <div class="darkbg align-items-center">
                    <div class="text-center" style="display:block;margin:30px auto">
                        <img src="/public/imgs/star.png" style="width: 250px;display:block;margin:30px auto" class="mb-3">
                    </div>
                    <div class="row stagelist">
                        <div class="col-md-6 offset-md-3 stagetitle">
                            <h3 class="">Выберите категорию вопросов:</h3>      
                        </div>
                        <div class="col-md-2 offset-md-3 stage" data-stage="stage1941"><img src="/imgs/1941.jpg" alt=""></div>
                        <div class="col-md-2 stage" data-stage="stage1942"><img src="/imgs/1942.jpg" alt=""></div>
                        <div class="col-md-2 stage" data-stage="stage1943"><img src="/imgs/1943.jpg" alt=""></div>
                        <div class="col-md-2 offset-md-4  stage" data-stage="stage1944"><img src="/imgs/1944.jpg" alt=""></div>
                        <div class="col-md-2  stage" data-stage="stage1945"><img src="/imgs/1945.jpg" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 offset-md-0 mt-5">
                            <div class="btn-old crypto stage" data-stage="stagecrypto" style="display:none"><span class="btn__inner">К этапу «Шифровальщик»</span></div>
                        </div>
                    </div>

                    <div class="swiper-container stage1941">
                        <div class="answer__outer swiper-wrapper">
                            @foreach($q1941 as $q)
                                <div class="answer_wrapper swiper-slide swiper-slide_{{$loop->iteration}}">
                                    <h2>Вопрос {{$loop->iteration}} из {{$loop->count}}</h2>
                                    <p>{!!$q->strip_text!!}</p>
                                    @foreach($q->answer as $a)
                                        <div class="w-100 answer__text">
                                            <input type="radio" name="question_{{$q->id}}" id="question_{{$q->id}}_{{$a->id}}" value="{{$a->text}}"  autocomplete="off">
                                            <label for="question_{{$q->id}}_{{$a->id}}">{{$a->text}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="next btn-old stage1941" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                        <p class="error" style='color:red;text-align:center;display:none;'>Необходимо сначала выбрать вариант ответа</p>
                    </div>

                    <div class="swiper-container stage1942">
                        <div class="answer__outer swiper-wrapper">
                            @foreach($q1942 as $q)
                                <div class="answer_wrapper swiper-slide">
                                    <h2>Вопрос {{$loop->iteration}} из {{$loop->count}}</h2>
                                    <p>{!!$q->strip_text!!}</p>
                                    @foreach($q->answer as $a)
                                        <div class="w-100 answer__text">
                                            <input type="radio" name="question_{{$q->id}}" id="question_{{$q->id}}_{{$a->id}}" value="{{$a->text}}"  autocomplete="off">
                                            <label for="question_{{$q->id}}_{{$a->id}}">{{$a->text}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="next btn-old stage1942" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                        <p class="error" style='color:red;text-align:center;display:none;'>Необходимо сначала выбрать вариант ответа</p>
                    </div>
                    <div class="swiper-container stage1943">
                        <div class="answer__outer swiper-wrapper">
                            @foreach($q1943 as $q)
                                <div class="answer_wrapper swiper-slide">
                                    <h2>Вопрос {{$loop->iteration}} из {{$loop->count}}</h2>
                                    <p>{!!$q->strip_text!!}</p>
                                    @foreach($q->answer as $a)
                                        <div class="w-100 answer__text">
                                            <input type="radio" name="question_{{$q->id}}" id="question_{{$q->id}}_{{$a->id}}" value="{{$a->text}}"  autocomplete="off">
                                            <label for="question_{{$q->id}}_{{$a->id}}">{{$a->text}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="next btn-old stage1943" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                        <p class="error" style='color:red;text-align:center;display:none;'>Необходимо сначала выбрать вариант ответа</p>
                    </div>
                    <div class="swiper-container stage1944">
                        <div class="answer__outer swiper-wrapper">
                            @foreach($q1944 as $q)
                                <div class="answer_wrapper swiper-slide">
                                    <h2>Вопрос {{$loop->iteration}} из {{$loop->count}}</h2>
                                    <p>{!!$q->strip_text!!}</p>
                                    @foreach($q->answer as $a)
                                        <div class="w-100 answer__text">
                                            <input type="radio" name="question_{{$q->id}}" id="question_{{$q->id}}_{{$a->id}}" value="{{$a->text}}"  autocomplete="off">
                                            <label for="question_{{$q->id}}_{{$a->id}}">{{$a->text}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="next btn-old stage1944" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                        <p class="error" style='color:red;text-align:center;display:none;'>Необходимо сначала выбрать вариант ответа</p>
                    </div>
                    <div class="swiper-container stage1945">
                        <div class="answer__outer swiper-wrapper">
                            @foreach($q1945 as $q)
                                <div class="answer_wrapper swiper-slide">
                                    <h2>Вопрос {{$loop->iteration}} из {{$loop->count}}</h2>
                                    <p>{!!$q->strip_text!!}</p>
                                    @foreach($q->answer as $a)
                                        <div class="w-100 answer__text">
                                            <input type="radio" name="question_{{$q->id}}" id="question_{{$q->id}}_{{$a->id}}" value="{{$a->text}}"  autocomplete="off">
                                            <label for="question_{{$q->id}}_{{$a->id}}">{{$a->text}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        <div class="next btn-old stage1945" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                        <p class="error" style='color:red;text-align:center;display:none;'>Необходимо сначала выбрать вариант ответа</p>
                    </div>




                    <div class="swiper-container stagecrypto">
                        <div class="answer__outer swiper-wrapper">
                            <div class="answer_wrapper swiper-slide">
                                <h3>2 этап: «Шифровальщик»</h3>
                                <p class="maintext">Уважаемые ребята!  Вас ждет новый этап викторины — шифровальщик. Чтобы расшифровать кодовое слово необходимо:</p>
                                <ol>
                                    <li>Посмотреть отрывки из отечественных художественных фильмов. Определить название фильма и год выхода на экран.</li>
                                    <li>Расположить названия по порядку дат выхода их на экран в столбец по возрастанию лет. Между словами в названиях фильмов пробелов не делать, цифры в названии фильмов писать прописью.</li>
                                    <li>Расшифровать кодовое слово: 
                                        <ul>
                                            <li>1 буква — 4 с конца названия первого (самого старого) фильма, </li>
                                            <li>2 буква — 4 буква с конца третьего фильма,</li>
                                            <li>3 буква — 6 с конца названия второго фильма</li>
                                            <li>4 буква — 2 буква с начала названия 4 фильма</li>
                                            <li>5 буква — 11 буква с начала названия первого фильма</li>
                                            <li>6 буква  — 9 буква с конца названия последнего (самого нового фильма)</li>
                                        </ul>
                                    </li>
                                    <li>Вписать в поле ниже кодовое слово.</li>
                                </ol>
                                <div class="btn-old stage" data-stage="stagecryptoanswer" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container stagecryptoanswer">
                        <div class="answer__outer swiper-wrapper">
                            <div class="answer_wrapper swiper-slide">
                                <div class="row">
                                    <div class="col-lg-4 mt-1">
                                        <button class="btn-old getMovieModal modal1" style="max-width:100%; min-width:auto; width:80%" data-toggle="modal" data-target="#modal1">
                                            <span class="btn_inner">Отрывок 1</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 mt-1">
                                        <button class="btn-old getMovieModal modal2" style="max-width:100%; min-width:auto; width:80%" data-toggle="modal" data-target="#modal2">
                                            <span class="btn_inner">Отрывок 2</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 mt-1">
                                        <button class="btn-old getMovieModal modal3" style="max-width:100%; min-width:auto; width:80%" data-toggle="modal" data-target="#modal3">
                                            <span class="btn_inner">Отрывок 3</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 offset-lg-2 mt-1">
                                        <button class="btn-old getMovieModal modal4" style="max-width:100%; min-width:auto; width:80%" data-toggle="modal" data-target="#modal4">
                                            <span class="btn_inner">Отрывок 4</span>
                                        </button>
                                    </div>
                                    <div class="col-lg-4 mt-1">
                                        <button class="btn-old getMovieModal modal5" style="max-width:100%; min-width:auto; width:80%" data-toggle="modal" data-target="#modal5">
                                            <span class="btn_inner">Отрывок 5</span>
                                        </button>
                                    </div>
                                </div>
                                <h4 class="mt-4">Как разгадать:</h4>
                                <ul>
                                    <li>1 буква — 4 с конца названия первого (самого старого) фильма, </li>
                                    <li>2 буква — 4 буква с конца третьего фильма,</li>
                                    <li>3 буква — 6 с конца названия второго фильма</li>
                                    <li>4 буква — 2 буква с начала названия 4 фильма</li>
                                    <li>5 буква — 11 буква с начала названия первого фильма</li>
                                    <li>6 буква  — 9 буква с конца названия последнего (самого нового фильма)</li>
                                </ul>
                                <input type="text" class="form-control" name="codeword" placeholder="Кодовое слово">
                                <div class="btn-old stage" data-stage="creative" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container creative">
                        <div class="answer__outer swiper-wrapper">
                            <div class="answer_wrapper swiper-slide">
                                <h3 class="text-center">3 этап: «Творческий»</h3>
                                <p class="maintext">Вы прошли два этапа квеста-викторины, вы — большие молодцы!</p>
                                <p class="maintext">Осталось творческое задание. Запишите на телефон или любой другой цифровой носитель своё поздравление ветеранам и всем белгородцам ко дню Великой Победы, выложите его в любую социальную сеть и прикрепите ссылку в поле ниже.</p>
                                <p class="maintext">Вы можете придумать поздравление в стихах или использовать поэзию знаменитых авторов, можете петь или танцевать, нарисовать открытку, словом, использовать весь свой творческий потенциал и потенциал своих родных и друзей!</p>
                                <p class="maintext">Максимальное время поздравления — 1 минута.</p>
                                <input type="text" class="form-control" name="greeting" placeholder="Ссылка на поздравление">
                            </div>
                            <div class="btn-old stage" data-stage="register" data-disabled="true"><span class="btn__inner">Дальше</span></div>
                        </div>
                    </div>
                    <div class="swiper-container register">
                        <div class="answer__outer swiper-wrapper">
                            <div class="answer_wrapper swiper-slide">
                                <h3 class="text-center">Заполните информацию о себе:</h3>

                                <div class="form-group row">
                                    <label class="col-form-label col-8 offset-2">ФИО:</label>
                                    <input type="text" class="form-control col-8 offset-2" name="fullname" placeholder="ФИО" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-8 offset-2">Номер школы:</label>
                                    <input type="text" class="form-control col-8 offset-2" name="school" placeholder="Школа" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-8 offset-2">Класс</label>
                                    <input type="text" class="form-control col-8 offset-2" name="classOfSchool" placeholder="Класс" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-8 offset-2">Дата рождения</label>
                                    <input type="date" class="form-control col-8 offset-2" name="birthDate" placeholder="Дата рождения" required>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-8 offset-2">ФИО учителя</label>
                                    <input type="text" class="form-control col-8 offset-2" name="TeacherFullname" placeholder="ФИО учителя" required>
                                </div>
                            </div>
                        </div>
                        <button  type="submit" class="save btn-old"><span class="btn__inner">Завершить</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div id="modals">
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Отрывок 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive-item">
                        <video src="/vids/item1.mp4" controls width="100%"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Отрывок 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive-item">
                        <video src="/vids/item2.mp4" controls width="100%"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Отрывок 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive-item">
                        <video src="/vids/item3.mp4" controls width="100%"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Отрывок 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive-item">
                        <video src="/vids/item4.mp4" controls width="100%"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Отрывок 5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive-item">
                        <video src="/vids/item5.mp4" controls width="100%"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    {{-- <link rel="stylesheet" href="http://unpkg.com/swiper/css/swiper.min.css">
    <script src="http://unpkg.com/swiper/js/swiper.min.js"></script> --}}

    <script>
        $(document).ready(function(){


                $(document).on("change input kyup keypress click",".swiper-container.stage__active .answer__active input", function(){
                    //$(".next.btn-old").prop("disabled",false);
                    //console.log("checked!");
                    $(".swiper-container.stage__active .next.btn-old").data({"disabled":false});
                    $(".swiper-container.stage__active p.error").fadeOut();
                });
                $(document).on("click",".swiper-container.stage__active .next", function(){
                    var index = $(".answer__active").index(".stage__active  .answer_wrapper");
                    var nextSlide = parseInt(index+1);
                    console.log("index now: "+index);
                    console.log("next slide: "+nextSlide);
                    console.log("length now: "+$(".stage__active .answer_wrapper").length);
                    if($(this).data("disabled")==true){
                        $(".swiper-container.stage__active p.error").fadeIn();
                        console.log("error");
                    } else if($(this).data("disabled")==false) {
                        
                        $(".answer__active").removeClass("answer__active").fadeOut('fast', function(){
                            if(nextSlide == $(".stage__active .answer_wrapper").length){
                                $(".swiper-container").fadeOut("fast", function(){
                                    if($(".stagelist .stage.passed").length == $(".stagelist .stage").length){
                                        $(".stagelist").fadeOut();
                                        $(".stagelist .stage").remove();
                                        $(".stagetitle").remove();
                                        $(".crypto").fadeIn();
                                    } else {
                                        $(".stagelist").fadeIn();
                                        $(".stage__active").removeClass("stage__active");
                                    }
                                })
                            } else {
                                $(".stage__active .answer_wrapper:eq("+nextSlide+")").fadeIn().addClass("answer__active");
                                $(".swiper-container.stage__active .next.btn-old").data({"disabled":true});
                            }
                        })
                        //console.log("clidenext");
                    }
                    //console.log("click!");
                });
                
                $(document).on("click", ".stage:not(.passed)",function(){
                    var el = $(this);
                    var stage = $(this).data("stage");
                    $(".swiper-container").removeClass("stage__active").fadeOut();
                    $(".answer__active").removeClass("answer__active");
                    $(this).addClass("passed");
                    $(".stagelist").fadeOut("slow", function(){
                        $(".swiper-container."+stage).fadeIn().addClass("stage__active").find(".swiper-slide:first").fadeIn().addClass("answer__active");//.find(".answer_wrapper.swiper-slide").addClass("swiper-slide-active");
                    })
                })
                
                function addLink() {
                    var body_element = document.getElementsByTagName('body')[0];
                    var selection = document.getSelection();
                    var pagelink = "Пользоваться поисковыми системами при прохождении викторины нечестно!";
                    var copytext = pagelink;
                    var newdiv = document.createElement('div');
                    body_element.appendChild(newdiv);
                    newdiv.innerHTML = copytext;
                    selection.selectAllChildren(newdiv);
                    window.setTimeout( function() {
                    body_element.removeChild(newdiv);
                    }, 0);
                }
                document.oncopy = addLink;
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

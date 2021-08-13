<?php require 'header.php'; ?>

<main class="main">
    <div class="container">
        
    <?php 
        $one2 = "active";
        require 'sidebar.php'; 
    ?>

    <div class="content">
        <div class="page__info">
            <div class="page__info__left">
                <span>SPAREINLAGEN</span>
                <h2>При заключении договора</h2>
                <p>Wie und was genau sage ich es meinem Kunden?</p>
            </div>
            <div class="page__info__link">
                <a href="../test.pdf" target="_blank">
                    <img src="http://fimvestnik.ru/wp-content/uploads/2017/03/pdfs-512.png" alt="">
                </a>
            </div>
        </div>
        <div class="check__block">
            <label>
                <input type="checkbox">
                <span></span>
            </label>
            <div class="check__block__info">
                <p>
                    Право на полное разъяснение по заключаемому договору и предоставление проекта договора за 3 дня до подписания
                </p>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <span class="mb-0" role="button" data-target="#collapseOne" data-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseOne">
                            <span class="accordion_batton"></span>
                            <button class="btn btn-link" type="button">
                                <!-- <span class="parag">&#167;</span> -->
                                <img class="parag" src="img/par2.png" alt="">
                                <span class="title__card">Предлагаю ознакомиться с проектом договора о Вашем депозите</span>
                                <img class="arr" src="img/arr.svg" alt="">
                            </button>

                        </span>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Мы всё подробно обсудили. Всё-таки я Вас попрошу, ещё раз тщательно прочитать его перед тем, как расписаться. Вы можете взять договор с собой и вернуться через несколько дней. Пожалуйста, отметьте всё, что Вам будет непонятно.
                            <br> Также предлагаю Вам чеклист, в котором вы можете посмотреть информацию о Ваших правах как потребителя.
                            <br>Позвольте мне также сказать о Ваших обязанностях. Их немного. Попрошу вас сообщить нам обо всех изменениях, влияющих на выполнение договора, например, если Вы сменили адрес проживания.
                            <br>+ ссылка на Закон. (сайт НБКР или др.)
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="check__block">
            <label>
                <input type="checkbox">
                <span></span>
            </label>
            <div class="check__block__info">
                <p>Клиент вправе получить копию договора.</p>
                <div class="card">
                    <div class="card-header" id="heading2">
                        <span class="mb-0" role="button" data-target="#collapse2" data-toggle="collapse"
                            aria-expanded="false" aria-controls="collapse2">
                            <span class="accordion_batton"></span>
                            <button class="btn btn-link" type="button">
                                <!-- <span class="parag">&#167;</span> -->
                                <img class="parag" src="img/par2.png" alt="">
                                <span class="title__card">Большое спасибо за Ваше доверие</span>
                                <img class="arr" src="img/arr.svg" alt="">
                            </button>

                        </span>
                    </div>

                    <div id="collapse2" class="collapse" aria-labelledby="heading2"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Подписание договора — это первый шаг для осуществления Ваших целей. Вот Ваша копия договора.
                            <br>+ ссылка на Закон. (сайт НБКР или др.)
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="check__block">
            <label>
                <input type="checkbox">
                <span></span>
            </label>
            <div class="check__block__info">
                <p>Das sage ich meinem Kunden Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                <div class="card">
                    <div class="card-header" id="heading3">
                        <span class="mb-0" role="button" data-target="#collapse3" data-toggle="collapse"
                            aria-expanded="false" aria-controls="collapse3">
                            <span class="accordion_batton"></span>
                            <button class="btn btn-link" type="button">
                                <!-- <span class="parag">&#167;</span> 
                                <img class="parag" src="img/par2.png" alt="">
                                <span class="title__card">Gesetzliche Grundlage Lorem ipsum </span>
                                <img class="arr" src="img/arr.svg" alt="">
                            </button>

                        </span>
                    </div>

                    <div id="collapse3" class="collapse" aria-labelledby="heading3"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="check__block">
            <label>
                <input type="checkbox">
                <span></span>
            </label>
            <div class="check__block__info">
                <p>Das sage ich meinem Kunden Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                <div class="card">
                    <div class="card-header" id="heading4">
                        <span class="mb-0" role="button" data-target="#collapse4" data-toggle="collapse"
                            aria-expanded="false" aria-controls="collapse4">
                            <span class="accordion_batton"></span>
                            <button class="btn btn-link" type="button">
                                <!-- <span class="parag">&#167;</span>
                                <img class="parag" src="img/par2.png" alt="">
                                <span class="title__card">Gesetzliche Grundlage Lorem ipsum </span>
                                <img class="arr" src="img/arr.svg" alt="">
                            </button>

                        </span>
                    </div>

                    <div id="collapse4" class="collapse" aria-labelledby="heading4"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

</div>
</main>
<!--menu side bar-->

    





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
<?php

require 'includes/funciones.php';
incluirTemplate('header', $inicio = true, $login = true);
?>
 
 <script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/jquery.knob.js"></script>
    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Test Unidad 1: Historia de la gimnasia en México</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" style="text-align:center;">
            <div class="contenedor" class="col-md-9" role="main">

                <div class="question"></div>
                <br>
                <input type="text" value="30" class="dial">
                <br>
                <br>
                <p class="rightCounter_">Answer Right <span class="rightCounter"> 0 </span> Answer wrong <span class="wrongCounter">
                        0 </span></p>

                <button type="button" class="btnOption" onclick="window.location.href='Unidad1.php'">
                    <h6> Salir</h6>
                </button>
            </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->


    <script>
        $(document).ready(function() {
            //$(".dial").knob();
            $('.dial').knob({
                'min': 1,
                'max': 30,
                'width': 100,
                'height': 100,
                'displayInput': true,
                'fgColor': "#76b852",
                'readOnly': true
            });
        });

        let rightAnswer;
        let currentQuestionIndex = 0;
        let rightAnswers = 0;
        let wrongAnswers = 0;
        let time = 30;
        let timeInterval;
        let timeAns = 5;
        let timeIntervalAns;
        const cuestionary = [{
                "question": "Los inicios de la gimnasia en México fueron principalmente ",
                "img": "assets/img/Uni1/acrobatas_aztecas_unegimnasia.jpg",
                "answers": ["Durante los s. XVIII y XIX",
                    "Durante los s. XVII y XVIII",
                    "Durante los s. XVI y XIX"
                ]
            },
            {
                "question": "La gimnasia artística varonil mexicana debutó en los Juegos Centroamericanos y del Caribe a partir de la ",
                "img": "assets/img/Uni1/mexicana_debutó.JPG",
                "answers": ["Quinta edición ", "Sexta edición ", "Cuartaedición "]
            },
            {
                "question": "¿cuántas medallas obtuvo mexico en los juegos centroamericanos? ",
                "img": "assets/img/Uni1/1532348458_445118_1532401623_noticia_normal.jpg",
                "answers": ["Nueve  medallas individuales y una más por equipos", "Diez medallas individuales y una más por equipos", "Nueve  medallas individuales y dos más por equipos"]
            }

        ];


        const PrintHTMLQuestion = (i) => {
            currentQuestionIndex++;
            const q = cuestionary[i];
            let a = q.answers;
            rightAnswer = a[0];
            longAnswer = cuestionary.length;
            a = a.sort((a, b) => Math.floor(Math.random() * 3) - 1)

            const htmlAnwersArray = a.map(currentA => `<p class="answer"> <input  id="_RadiBtn" type="radio" name="RadiBtn" onClick="evaluateAnswer('${currentA}',this)"></button><span> ${currentA} </span></p>`);
            const htmlAnwers = htmlAnwersArray.join(' ');
            let htmlQuestionCode = `<p>${q.question}</p><br> <img class="img"  src="${q.img}"><div> ${htmlAnwers} </div>`;
            document.querySelector('.question').innerHTML = htmlQuestionCode;

            time = 30;
            $("input.dial").val(time);
            $("input.dial").trigger('change');
            clearInterval(timeInterval);
            timeInterval = setInterval(() => {
                if (time <= 10) {
                    $('.dial').trigger('configure', {
                        "fgColor": "#65a841"
                    })
                }
                if (time == 0) {
                    alert("Pregunta no respondida")
                    wrongAnswers++;
                    document.querySelector('.wrongCounter').innerHTML = wrongAnswers;
                    PrintHTMLQuestion(currentQuestionIndex)
                    clearInterval(timeInterval);
                } else {
                    $("input.dial").val(time);
                    $("input.dial").trigger('change');

                }
                time--;
            }, 1000)

        }
        PrintHTMLQuestion(currentQuestionIndex)
        const evaluateAnswer = (answer, obj) => {

            document.querySelectorAll('.answer').forEach(a => a.classList.remove('right', 'wrong'))

            const parentP = obj.parentNode;
            console.log('answer: ' + answer + ' rightanswer: ' + rightAnswer)
            if (answer == rightAnswer) {
                parentP.classList.add('right');
                rightAnswers++;
                document.querySelector('.rightCounter').innerHTML = rightAnswers;
                timeAns = 5;

                clearInterval(timeIntervalAns);
                timeIntervalAns = setInterval(() => {

                    timeAns--;
                    if (timeAns == 1) {
                        PrintHTMLQuestion(currentQuestionIndex)
                        clearInterval(timeIntervalAns);
                    }

                }, 1000)
            } else {

                parentP.classList.add('wrong');
                wrongAnswers++;
                document.querySelector('.wrongCounter').innerHTML = wrongAnswers;

                timeAns = 5;

                clearInterval(timeIntervalAns);
                timeIntervalAns = setInterval(() => {
                    timeAns--;

                    if (timeAns == 4) {
                        rightAnswer_ = document.getElementById('_RadiBtn', rightAnswer);
                        rightAnswer_.checked = true;
                    }
                    if (timeAns == 1) {

                        PrintHTMLQuestion(currentQuestionIndex)
                        clearInterval(timeIntervalAns);

                    }

                }, 1000)

            }


        }
        const nextQuestion = _ => {

        }
    </script>

<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/jquery.knob.js"></script>

    <!-- Footer -->
    <?php
incluirTemplate('footer');
?>
    <!-- End Footer -->


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
        <h2>Test Unidad 1: Historia de la Gimnasia en la Antigüedad</h2>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" style="text-align:center;">
    <div class="contenedor" class="col-md-9" role="main" >
   
        <div class="question"></div>
        <br>
        <input type="text" value="30" class="dial">
        <br>
        <br>
        <p class="rightCounter_">Answer Right <span class="rightCounter"> 0 </span> Answer wrong <span
                class="wrongCounter">
                0 </span></p>

    <button  type="button" class="btnOption"  onclick="window.location.href='Unidad1.php'"><h6> Salir</h6></button>
    </div>    
    </section><!-- End Courses Section -->

</main><!-- End #main -->


    <script>
        $(document).ready(function () {
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
        const cuestionary = [
            {
                "question": "Las prácticas acrobáticas en el suelo se afianzaron en numerosos pueblos",
                "img": "../assets/img/Historia.jpg",
                "answers": ["A lo largo de Europa, Asia y África",
                    " A lo largo de America, Asia y África",
                    "  lo largo de Europa y America"]
            },
            {
                "question": "La siguiente imagen corresponde al aparato de",
                "img": "../assets/img/Uni1/Salto.jpg",
                "answers": ["Salto", "Barras paralelas", "Barra de equilibrio"]
            },
            {
                "question": "La siguiente imagen corresponde al aparato de",
                "img": "../assets/img/Uni1/BarradeEquilibrio.jpg",
                "answers": ["Barra de Equilibrios", "Salto", "Suelo"]
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
                    $('.dial').trigger('configure', { "fgColor": "#65a841" })
                }
                if (time == 0) {
                    alert("Pregunta no respondida")
                    wrongAnswers++;
                    document.querySelector('.wrongCounter').innerHTML = wrongAnswers;
                    PrintHTMLQuestion(currentQuestionIndex)
                    clearInterval(timeInterval);
                }
                else {
                    $("input.dial").val(time);
                    $("input.dial").trigger('change');

                }
                time--;
            }, 1000)

        }
        PrintHTMLQuestion(currentQuestionIndex)
        const evaluateAnswer = (answer, obj) => {
            if(cuestionary.length >3){ 
            
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
            }
            else {

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
    else{
        clearInterval(counter); //clear counter
        clearInterval(counterLine); //clear counterLine
        showResult(); //calling showResult function
    }
    
    }
  
        const nextQuestion = _ => {

        }

        function showResult(){
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.remove("activeQuiz"); //hide quiz box
    result_box.classList.add("activeResult"); //show result box
    const scoreText = result_box.querySelector(".score_text");
    if (userScore > 3){ // if user scored more than 3
        //creating a new span tag and passing the user score number and total question number
        let scoreTag = '<span>and congrats! 🎉, You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text
    }
    else if(userScore > 1){ // if user scored more than 1
        let scoreTag = '<span>and nice 😎, You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else{ // if user scored less than 1
        let scoreTag = '<span>and sorry 😐, You got only <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
}

    </script>
      


<!-- Footer -->
<?php
incluirTemplate('footer');
?>
<!-- End Footer -->

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wapuu Trivia Game</title>
    <meta name="description" content="Wapuu Trivia Game">
    <meta name="author" content="Visual Composer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="Challenge Yourself with Wappu Trivia!" />
	<meta property="og:description" content="Can You Guess the Origin of WordPress Mascot? Play Wappu Trivia game." />
	<meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST'].parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);?>assets/facebook-wapuu-trivia-quizz.png"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <div class="wrapper">
        <div class="best-score"></div>

        <div class="screen-section main-screen">
            <div class="quiz-image-wrapper">
                <img class="quiz-image" src="./assets/Game-Logo.png" alt="Wapuu Trivia LOGO">
            </div>
            <img class="main-screen-logo" src="assets/Wapuu-trivia.svg" alt="Wapuu Trivia">
            <div class="button-container">
                <div class="button-outer">
                    <button class="default-button" id="start">Start</button>
                </div>
                <div class="button-outer">
                    <button class="default-button" id="how-to">How to play?</button>
                </div>
            </div>
            <a href="https://visualcomposer.com/" class="quiz-logo">
                <img src="assets/VCWB-Logo.png" alt="VCWB logo">
            </a>
        </div>

        <div class="screen-section how-to-play-screen hidden">
            <img class="quiz-corner-logo" src="./assets/Game-Logo.png" alt="Wapuu Trivia LOGO">
            <button type="button" id="close-how-to" class="close-button">X</button>
            <h2 class="title">How to play? It's easy and fun...</h2>
            <p class="text">Answer to Wapuu trivia questions and find out how well do you know the city of Wapuss!
                Challenge yourself and share your Wapuu status with your friends (it's not showing off if you back it
                up).</p>

            <p class="text">To start playing the Wapuu trivia game, first, tune to see the coolest Wapuus of all the
                WordCamps. When you are ready, click Start and choose the correct answer from the four given
                options.</p>

            <p class="text">You will have 10 seconds for each question to choose your answer. After the time is up, the
                next question will load. So, stay tuned, be quick and pay attention to the details of each Wapuu.</p>

            <p class="text">You will receive one point for each correct answer, and zero points for a wrong one. If you
                are right on the question, the option you choose will be green and you will get a point. If your answer
                is not correct, it will turn into red and no extra points for you.</p>

            <p class="text">When you have finished the Wapuu trivia, your total score will indicate how well you know
                Wapuus by their city. Enjoy!
            </p>
            <button class="default-button" id="start2">Ok. Let's start</button>
            <a href="https://visualcomposer.com/" class="quiz-logo">
                <img src="assets/VCWB-Logo.png" alt="VCWB logo">
            </a>
        </div>

        <div class="screen-section quiz-screen hidden">
            <div class="quiz-screen-step">
                Round <span id="question-index"></span> out of <span id="question-count"></span>
            </div>
            <div class="quiz-image-wrapper">
                <img class="quiz-image" id="question-image" src="" alt="">
            </div>
            <div class="quiz-timer" id="progress-bar"></div>
            <div class="quiz-question" id="quiz-text"></div>
            <div class="button-container" id="answers-container">
                <div class="button-outer">
                    <button id="answer0" class="default-button"></button>
                </div>
                <div class="button-outer">
                    <button id="answer1" class="default-button"></button>
                </div>
                <div class="button-outer">
                    <button id="answer2" class="default-button"></button>
                </div>
                <div class="button-outer">
                    <button id="answer3" class="default-button"></button>
                </div>
            </div>
            <a href="https://visualcomposer.com/" target="_blank" class="quiz-logo">
                <img src="assets/VCWB-Logo.png" alt="VCWB logo">
            </a>
        </div>

        <div class="screen-section result-screen hidden">
            <div class="quiz-image-wrapper">
                <img class="quiz-image" src="./assets/Game-Logo.png" alt="Wapuu Trivia" id="result-logo">
            </div>
            <p class="score">
                <span id="score"></span> out of <span id="score-total"></span>
            </p>
            <h1 id="score-name" class="score-name">Wapuu Trivia</h1>
            <span class="score-description" id="score-description"></span>

            <div class="share-container">
                <a class="facebook-share-button" href="#"
                   onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;">

                    <svg width="14px" class="share-button-icon" height="26px" viewBox="0 0 14 26" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="RESULTS-1-3" transform="translate(-319.000000, -668.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g id="Answers" transform="translate(296.000000, 657.000000)">
                                    <g id="3">
                                        <g id="facebook" transform="translate(23.000000, 11.000000)">
                                            <path d="M13.7011231,0.54347141 C13.868617,0.580132037 14.0098508,0.700506804 13.9994609,0.930863451 C13.941917,2.08253248 13.879121,3.23934085 13.5912873,4.3596028 C13.6279373,4.67367358 13.4342974,5.04005143 13.0731637,4.99299792 C10.4984159,4.6527736 9.56172876,6.97175809 9.22674095,9.58379918 C10.4512618,9.65712043 11.6653928,9.75134167 12.8481258,9.85595579 C13.0679116,9.87685578 13.1882515,10.0287518 13.2143974,10.1961801 C13.2771934,10.2380943 13.3347373,10.3009084 13.3608832,10.3951297 C13.570165,11.0756925 13.575417,11.8398553 13.5911731,12.5518252 C13.6016771,13.1118991 13.6697251,13.7452942 13.2928353,14.1902469 C13.3399893,14.4520106 13.1986414,14.7555743 12.8480117,14.7660814 C11.5920928,14.7817278 10.3204179,14.802742 9.04349098,14.8132491 C9.04349098,14.9388774 9.04349098,15.0645057 9.03823895,15.179627 C8.94929707,18.5978592 9.09578287,22.0055844 9.05913288,25.4185631 C9.05388085,25.6855803 8.83934708,25.7849409 8.64570723,25.7483945 C8.61956128,25.7640409 8.59341534,25.7850551 8.56201737,25.795448 C7.91830188,25.9996511 7.19089652,25.9682441 6.52114926,25.989144 C5.85653984,26.0047905 5.20243448,26.0205511 4.54296292,25.9054299 C4.38072104,25.957737 4.18182916,25.9054299 4.14529334,25.6908339 C3.55398392,22.3092623 3.65342986,18.7392482 3.66907175,15.3157624 C3.66907175,15.1011664 3.66907175,14.8865704 3.66907175,14.6718602 C2.62768669,14.6037925 1.59155365,14.4990641 0.571062509,14.3525358 C0.414072655,14.3263823 0.33552064,14.221654 0.325130766,14.1012792 C-0.0516448844,13.8500226 0.0372970041,13.1904739 0.0320449799,12.7769283 C0.0162889072,11.887023 -0.0830428553,10.855843 0.173278762,9.99734475 C0.199424708,9.90837706 0.26222065,9.85081645 0.340772665,9.80890228 C0.387812534,9.75659522 0.4558605,9.71993459 0.550054413,9.7094275 C1.59143948,9.58379918 2.66422251,9.51047793 3.74750959,9.4738173 C3.79980149,8.48969076 3.88885755,7.50556422 4.04059538,6.54245188 C4.75749669,1.94639707 8.6981133,-0.843693605 13.3503792,0.229400622 C13.5441332,0.276454136 13.653969,0.402082452 13.7011231,0.54347141 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class='facebook-share-text'>Share result</span>
                </a>

                <a class="twitter-tweet-button" id="twitter-tweet-button" target="_blank" href="#">
                    <svg class="share-button-icon" width="28px" height="23px" viewBox="0 0 28 23" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                        <g  stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g  transform="translate(-549.000000, -670.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g id="Answers" transform="translate(296.000000, 657.000000)">
                                    <g id="3" transform="translate(238.000000, 0.000000)">
                                        <g id="twitter-logo-silhouette" transform="translate(15.000000, 13.000000)">
                                            <path d="M28,2.72126191 C26.9694428,3.18304873 25.8636697,3.49622726 24.7018508,3.63604489 C25.8881469,2.91766358 26.7962268,1.77821005 27.2266131,0.424634745 C26.1138401,1.08990202 24.8855439,1.57297146 23.5767706,1.83484035 C22.5287362,0.704223737 21.0380082,0 19.3845415,0 C16.2123925,0 13.6403687,2.60096878 13.6403687,5.80705827 C13.6403687,6.2617663 13.6911073,6.70587928 13.7891075,7.13056029 C9.01601473,6.88812337 4.78356991,4.57558049 1.95085286,1.06158686 C1.45568212,1.91798141 1.17398885,2.91585918 1.17398885,3.98105484 C1.17398885,5.99638115 2.1888075,7.77459119 3.7285355,8.81494169 C2.7871941,8.78311028 1.90185278,8.52124139 1.12677308,8.08596533 L1.12677308,8.15851134 C1.12677308,10.9717975 3.10741031,13.3197343 5.73364989,13.8541134 C5.25247917,13.9850478 4.74509272,14.0575939 4.22018337,14.0575939 C3.84927426,14.0575939 3.49058087,14.0204418 3.13888748,13.9496539 C3.87022855,16.2586805 5.990866,17.9377875 8.50341259,17.9838228 C6.53851395,19.5408785 4.06096742,20.4662566 1.36998917,20.4662566 C0.90634135,20.4662566 0.449647794,20.4379414 0,20.3866318 C2.5422852,22.0374699 5.56047967,23 8.80436733,23 C19.370633,23 25.1463287,14.1496181 25.1463287,6.47412994 L25.1270672,5.72215908 C26.2555788,4.908191 27.2318746,3.88551433 28,2.72126191 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class='twitter-tweet-text'>Tweet result</span>
                </a>

                <button class="default-button" id="start3">Play again</button>
            </div>


            <a href="https://visualcomposer.com/" class="quiz-logo">
                <img src="assets/VCWB-Logo.png" alt="Visual Composer">
            </a>
        </div>
    </div>
</div>


<script type="text/javascript" src="wapuusData.js"></script>
<script type="text/javascript" src="js.min.js"></script>

</body>

</html>
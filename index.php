<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quora 2</title>
    <link rel="stylesheet" type="text/css" href="styles/accueil.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="styles/maxcdnboot.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="icon" href="https://assets.stickpng.com/thumbs/5841c704a6515b1e0ad75aab.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            background: #f1f1f1;
            margin: 0%;
            background-color: #181818;
            background: linear-gradient(rgba(18, 18, 18, 0.98), rgba(18, 18, 18, 0.9)), url("https://image.freepik.com/free-vector/space-seamless-pattern-stars-moon-planets-galaxy-seamless-doodle-universe-background-galaxy-space-astronomy-doodle-universe_80590-8737.jpg");
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            text-align: center;
            background: white;
        }

        .header h1 {
            font-size: 50px;
        }

        /* Style the top navigation bar */
        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        /* Style the topnav links */
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change color on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 100%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            background-color: #262626;
            padding-left: 20px;
        }

        /* Fake image */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }

        /* Add a card effect for articles */
        .card {
            padding: 0px;
            background-color: #262626;
            color: #fff;
            margin-bottom: 20px;

        }

        .card3 {
            padding: 20px;
            padding-bottom: 20px;
            color: #ccc;
            background-color: #262626;
            border-radius: 12px;
        }

        textarea {
            border: none;
            width: 100%;
            height: 90px;
            background-color: #262626;
            color: #ddd;
            resize: none;
        }


        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .topnav a {
                float: none;
                width: 100%;
            }
        }

        .bodaypad {
            padding: 80px;
            padding-top: 100px;

        }

        .fa-share:hover {
            color: #F52936;
        }

        .btm {
            padding: 4px;
            background-color: #F52936;
            border-radius: 22px;
            border: none;
            color: #fff;

        }

        .btm:hover {
            padding: 4px;
            background-color: #287DFF;
            border-radius: 22px;
            border: none;
            color: #fff;

        }

        strong {
            color: #287DFF;
        }

        .naam {
            color: #F52936;
        }

        .naam:hover {
            color: #F52936;
            text-decoration: none;
        }

        .whitt {
            color: #ffff;
            font-weight: 500;
        }

        .whitt:hover {
            color: #ffff;
            font-weight: 500;
            text-decoration: none;
        }

        .toast-body {
            background-color: #262626;
        }

        .toast-header {
            padding: 16px;
            background-color: #262626;
            border-radius: 12px 12px 0px 0px;
        }

        .toast-header1 {
            padding: 16px;
            background-color: #262626;
            border-radius: 12px;
            border-radius: 0px 0px 12px 12px;
        }

        .avatar {
            border-radius: 50%;
            width: 30px;
            height: 30px;
        }

        .quest {
            font-size: 18px;
        }

        .readmore {
            font-size: 14px;
            text-decoration: none;
            color: #F52936;
            padding-top: 10px;

        }

        .readmore:hover {
            font-size: 14px;
            text-decoration: none;
            color: #F52936;
            padding-top: 10px;
        }

        .ansr {
            padding: 8px;
            background-color: #313131;
            border-radius: 12px 0px 0px 12px;
            border-right: 1px #404040 solid;
        }

        .ansr:hover {
            padding: 8px;
            background-color: #424242;
            border-radius: 12px 0px 0px 12px;
        }

        .like {
            padding: 8px;
            background-color: #313131;
            border-radius: 0px 12px 12px 0px;
        }

        .like:hover {
            padding: 8px;
            background-color: #424242;
            border-radius: 0px 12px 12px 0px;
        }

        .mr-auto {
            padding-right: 3px;
        }

        .like {
            padding: 8px;
        }

        .questt {
            width: 100%;
            height: auto;
        }

        #likeIconn {
            color: #A82300;
        }

        /*--------------Box code------------------------*/
        .box {
            width: 80%;
            height: 400px;
            background: url(https://pavbca.com/walldb/original/b/f/b/26071.jpg);
            background-position: center;
            background-size: cover;
            margin: 40px auto;
        }

        /*==================================================
        * Effect 5
        * ===============================================*/
        .effect5 {
            position: relative;
        }

        .effect5:before,
        .effect5:after {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 25px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width: 300px;
            background: #777;
            -webkit-box-shadow: 0 35px 20px #777;
            -moz-box-shadow: 0 35px 20px #777;
            box-shadow: 0 35px 20px #777;
            -webkit-transform: rotate(-8deg);
            -moz-transform: rotate(-8deg);
            -o-transform: rotate(-8deg);
            -ms-transform: rotate(-8deg);
            transform: rotate(-8deg);
        }

        .effect5:after {
            -webkit-transform: rotate(8deg);
            -moz-transform: rotate(8deg);
            -o-transform: rotate(8deg);
            -ms-transform: rotate(8deg);
            transform: rotate(8deg);
            right: 10px;
            left: auto;
        }

        * {
            box-sizing: border-box;
        }

        /* Container for flexboxes */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Create four equal columns */
        .column {
            flex: 25%;
            padding: 20px;
        }

        /* On screens that are 992px wide or less, go from four columns to two columns */
        @media screen and (max-width: 992px) {
            .column {
                flex: 50%;
            }
        }

        /* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .row {
                flex-direction: column;
            }
        }

        .backgroundd {
            background-color: #2A1F33;
            height: 400px;
        }

        .backgnd {
            background: url(https://cdn.dribbble.com/users/1065420/screenshots/4253241/gary-neon-question-mark.gif);
            background-color: #2A1F33;
            background-position-y: -80px;
            background-position-x: -80px;
            height: 380px;
        }

        .padd {
            padding: 50px;
            padding-top: 30px;
            padding-bottom: 30px;
            font-family: 'Bebas Neue', cursive;
        }


        button {
            position: relative;

            height: 45px;
            width: 150px;
            margin: 10px 7px;
            padding: 5px 5px;
            font-weight: 700;
            font-size: 15px;
            letter-spacing: 2.5px;
            color: #F52936;
            border: 2px #c1c1c1 solid;
            border-radius: 4px;
            text-transform: uppercase;
            outline: 0;
            overflow: hidden;
            background: none;
            z-index: 1;
            cursor: pointer;
            transition: 0.08s ease-in;
            -o-transition: 0.08s ease-in;
            -ms-transition: 0.08s ease-in;
            -moz-transition: 0.08s ease-in;
            -webkit-transition: 0.08s ease-in;
        }

        .fill:hover {
            color: #fff;
        }

        .fill:before {
            content: "";
            position: absolute;
            background: #383736;
            bottom: 0;
            left: 0;
            right: 0;
            top: 100%;
            z-index: -1;
            -webkit-transition: top 0.09s ease-in;
        }

        .fill:hover:before {
            top: 0;
        }

        .fade:before {
            content: "→";
            position: absolute;
            color: #383736;
            left: 88%;
            opacity: 0;
            -webkit-transition: all 0.2s ease-in;
        }

        .fade:hover:before {
            left: 91%;
            opacity: 1;
        }

        .fade:hover {
            border: 0px #fff solid;
            -webkit-transform: scale(1.04, 1.04);
            -webkit-transition: border 0.3s ease-out;
            -webkit-transition: transform 250ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .arrow {
            text-align: left;
            padding-left: 17px;
        }

        .arrow:before {
            content: "→";
            position: absolute;
            color: #fff;
            left: 83%;
            opacity: 0;
            -webkit-transition: all 250ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .arrow:hover:before {
            left: 84%;
            opacity: 1;
        }

        .arrow:hover {
            width: 170px;
            color: #fff;
        }


        .slide:after {
            content: "View Story";
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            text-align: center;
            -webkit-transition: all 400ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide:before {
            content: "Read it →";
            height: 100%;
            width: 100%;
            position: absolute;
            color: #383736;
            left: -100%;
            opacity: 0;
            -webkit-transition: all 500ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide:hover {
            background: #383736;
        }

        .slide:hover:before {
            left: 0;
            opacity: 1;
            color: #fff;
        }

        .slide:hover:after {
            left: 100%;
            opacity: 0;
        }

        .slide.left:hover {
            background: none;
        }

        .slide.left:before {
            left: 100%;
            color: #383736;
            -webkit-transition: all 425ms cubic-bezier(0.680, -0.550, 0.265, 1.550);
        }

        .slide.left:hover:before {
            left: 0;
        }

        .svg {
            -webkit-transition: all 150ms cubic-bezier(0.445, 0.050, 0.550, 0.950);
        }

        .svg:before {
            position: absolute;
            content: "";
            background: url(https://f.cl.ly/items/3H3A0D1N281a2T280F3o/heist.svg) no-repeat center center;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0;
            -webkit-transition: all 250ms cubic-bezier(0.230, 1.000, 0.320, 1.000);
        }

        .svg:after {
            content: "";
            position: absolute;
            background: #F52936;
            bottom: 0;
            left: 0;
            right: 0;
            top: 100%;
            z-index: -2;
            -webkit-transition: all 250ms cubic-bezier(0.230, 1.000, 0.320, 1.000);
        }

        .svg:hover {
            color: white;
            border: 0px #F52936 solid;
        }

        .svg:hover:before {
            opacity: .8;
        }

        .svg:hover:after {
            top: 0;
        }

        .float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 30px;
            right: 30px;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 28px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
            z-index: 100;
            /* Start the shake animation and make the animation last for 0.5 seconds */
            animation: shake 3.8s;

            /* When the animation is finished, start again */
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }

        }

        .my-float {
            margin-top: 10px;
        }

        .float2 {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 30px;
            left: 30px;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 28px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
            z-index: 100;
            /* Start the shake animation and make the animation last for 0.5 seconds */
            animation: shake 4.8s;

            /* When the animation is finished, start again */
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }

        }

        .my-float2 {
            margin-top: 10px;
        }

        .typewriter {
            background-color: #F52936;
            color: #fff;
            text-align: center;
            min-width: 90%;
            padding: 1em 2em 1em 1.5em;
            border: solid 0px #e6e6e6;
            border-radius: 2.8em;
            box-shadow: 2px 2px 3px 0 rgba(0, 0, 0, 0.25);
            margin: 2em;
            display: flex;
            align-items: center;
        }

        .typewriter h1 {
            color: #fff;
            text-align: center;
            font-size: 1em;
            font-weight: 500;
            width: 0;
            max-width: max-content;
            overflow: hidden;
            border-right: .05em solid #464545;
            /* The typwriter cursor */
            white-space: nowrap;
            /* Keeps the content on a single line */
            margin: 0;
            /* Gives that scrolling effect as the typing happens */
        }

        .typing-erase {
            animation:
                4s typing-erase 6s steps(50, end) infinite,
                blink-caret .2s step-end infinite;
        }

        /* The type and erase effect */
        @keyframes typing-erase {
            0% {
                width: 0
            }

            80% {
                width: 100%
            }

            90%,
            100% {
                width: 0
            }
        }

        /* The typewriter cursor effect */
        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: gray
            }
        }


        #background-wrap {
            bottom: 0;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: -1;
        }

        /* KEYFRAMES */

        @-webkit-keyframes animateBubble {
            0% {
                margin-top: 1000px;
            }

            100% {
                margin-top: -100%;
            }
        }

        @-moz-keyframes animateBubble {
            0% {
                margin-top: 1000px;
            }

            100% {
                margin-top: -100%;
            }
        }

        @keyframes animateBubble {
            0% {
                margin-top: 1000px;
            }

            100% {
                margin-top: -100%;
            }
        }

        @-webkit-keyframes sideWays {
            0% {
                margin-left: 0px;
            }

            100% {
                margin-left: 50px;
            }
        }

        @-moz-keyframes sideWays {
            0% {
                margin-left: 0px;
            }

            100% {
                margin-left: 50px;
            }
        }

        @keyframes sideWays {
            0% {
                margin-left: 0px;
            }

            100% {
                margin-left: 50px;
            }
        }

        /* ANIMATIONS */

        .x1 {
            -webkit-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
            -moz-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
            animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;

            left: -5%;
            top: 5%;

            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            transform: scale(0.6);
        }

        .x2 {
            -webkit-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
            -moz-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
            animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;

            left: 5%;
            top: 80%;

            -webkit-transform: scale(0.4);
            -moz-transform: scale(0.4);
            transform: scale(0.4);
        }

        .x3 {
            -webkit-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
            -moz-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
            animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;

            left: 10%;
            top: 40%;

            -webkit-transform: scale(0.7);
            -moz-transform: scale(0.7);
            transform: scale(0.7);
        }

        .x4 {
            -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
            -moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
            animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;

            left: 20%;
            top: 0;

            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            transform: scale(0.3);
        }

        .x5 {
            -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
            -moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
            animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;

            left: 30%;
            top: 50%;

            -webkit-transform: scale(0.5);
            -moz-transform: scale(0.5);
            transform: scale(0.5);
        }

        .x6 {
            -webkit-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
            -moz-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
            animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;

            left: 50%;
            top: 0;

            -webkit-transform: scale(0.8);
            -moz-transform: scale(0.8);
            transform: scale(0.8);
        }

        .x7 {
            -webkit-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
            -moz-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
            animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;

            left: 65%;
            top: 70%;

            -webkit-transform: scale(0.4);
            -moz-transform: scale(0.4);
            transform: scale(0.4);
        }

        .x8 {
            -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
            -moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
            animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;

            left: 80%;
            top: 10%;

            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            transform: scale(0.3);
        }

        .x9 {
            -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
            -moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
            animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;

            left: 90%;
            top: 50%;

            -webkit-transform: scale(0.6);
            -moz-transform: scale(0.6);
            transform: scale(0.6);
        }

        .x10 {
            -webkit-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
            -moz-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
            animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;

            left: 80%;
            top: 80%;

            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            transform: scale(0.3);
        }

        /* OBJECTS */

        .bubble {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;

            -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.5), inset 0px 10px 30px 5px rgba(255, 255, 255, 0.6);
            -moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.5), inset 0px 10px 30px 5px rgba(255, 255, 255, 0.6);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.5), inset 0px 10px 30px 5px rgba(255, 255, 255, 0.6);

            height: 200px;
            position: absolute;
            width: 200px;
        }

        .bubble:after {
            background: -moz-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 70%);
            /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255, 255, 255, 0.4)), color-stop(70%, rgba(255, 255, 255, 0)));
            /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 70%);
            /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 70%);
            /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 70%);
            /* IE10+ */
            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 70%);
            /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80ffffff', endColorstr='#00ffffff', GradientType=1);
            /* IE6-9 fallback on horizontal gradient */

            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;

            -webkit-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
            -moz-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
            box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);

            content: "";
            height: 180px;
            left: 10px;
            position: absolute;
            width: 180px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            height: 0px;
            text-align: center;
            padding: 30px;
            background-color: rgba(238, 238, 238, 0);
        }
    </style>
</head>

<body>

    <!--- Device detection ---- -->
    <?php
    function isMobileDevice()
    {
        return preg_match("/(android|avantgo|blackberry|honor|mi|Mi|huwai|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    if (isMobileDevice()) {
        echo "<div style='padding: 4%;'>";
        echo '<center>';
        echo "<img src='https://i.pinimg.com/originals/ca/40/a8/ca40a8bd3a446454b6c60789eaa2283d.gif' style='width: 300px; height: 300px; border-radius: 50%;  box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
        z-index: 100;'><br>'";
        echo '<div class="typewriter">';
        echo '<!--   Search icon by https://www.flaticon.com/authors/good-ware -->';
        echo '<h1 class="typing-erase">
         It seems you are using a Mobile device <br>please, Switch to a Laptop or Desktop 
         </h1>';
        echo '</div>';
        echo '</center>';
        echo "</div>";
    } else {
        include("usernavbar.php");
        echo '<div class="bodaypad">';
        echo '<div class="row">';
        echo '<div class="leftcolumn">';
        echo '<div class="card3 backgroundd">';
        echo '<div class="row">';
        echo '<div class="column padd">';
        echo '<h1 style="font-size: 62px;">Do you have <br>any question? </h1>';
        echo '<p style="color: #F52936; font-size:28px;">Join today, and let other solve it</p>';
        echo '<a href="connexion.php"><button class="svg">Sign in</button></a>';
        echo '<a href="inscription.php"><button class=" svg">Signup</button></a>';
        echo '</div>';
        echo '';
        echo '<div class="column backgnd">';
        echo '<!--- grphic---->';
        echo '</div>';
        echo '</div>';
        echo '';
        echo '';
        echo '<div class="typewriter">';
        echo '<!--   Search icon by https://www.flaticon.com/authors/good-ware -->';
        echo '<i class="fa fa-search" style="color: #fff; padding-right: 8px;" aria-hidden="true"></i><h1 class="typing-erase">
         Do you know, how much this website cost? Join today to find out. </h1>';
        echo '</div>';
        echo '';
        echo '</div>';
        echo '';
        echo '';
        echo '<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog" role="document">';
        echo '<div class="modal-content" style="background-color: #222222; text-align: center; border:none;">';
        echo '<div class="modal-body">';
        echo '<img src="https://www.enally.in/images/Profilepicture.jpg" style="width:300px; border-radius: 50%;" alt="Prashant Kumar">';
        echo '<h3 style="font-family: "Bebas Neue", cursive; font-family: "Dancing Script", cursive; color: #FFDD00; font-size: 32px;">Prashant Kumar</h3>';
        echo '<p style="font-family: "Bebas Neue", cursive; font-family: "Dancing Script", cursive; color: #51BDE2; font-size: 22px;">Student & Freelancer</p>';
        echo '<a href="https://pmny.in/Trf2v9L9qJK7" target="_blank"><img src="https://media.giphy.com/media/513lZvPf6khjIQFibF/giphy.gif" alt="donate button" style="width: 240px; height: 240px; border-radius: 50%"></a>';
        echo '</div>';
        echo '';
        echo '<p type="button" style="padding: 4px; color:#c1c1c1; text-align: right; padding-right: 30px;" data-dismiss="modal">Close</p>';
        echo '';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    ?>

    <div id="background-wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>

    <a class="float2" href="https://www.linkedin.com/in/03prashantpk/" target="_blank">
        <!--<i class="fa fa-coffee" style="color: #fff;" aria-hidden="true"></i>-->
        <img src="https://i.pinimg.com/originals/de/b4/6f/deb46f02a59e3b3a2aa58fac16290d63.gif" style=" width:60px; height:60px; border-radius: 50%;" alt="">
    </a>

    <a class="float" data-toggle="modal" data-target="#exampleModal">
        <img src="https://i.pinimg.com/originals/ce/65/5d/ce655d809c964f14a0aceeafca1a1a26.gif" style=" width:60px; height:60px; border-radius: 50%;" alt="">
    </a>


    <div class="footer">
        <p style="text-align: center;">Designed and developed by <span style="color: #FFDD00;"><a style="text-decoration: none; color: #F52936;" href="https://instagram.com/prashantpkumar">Prashant Kumar</a></span></span></p>
    </div>

</body>

<script>
    setTimeout(function() {
        document.getElementById("audio").play();

    }, 3000)
    var audio = document.createElement("audio");
    audio.src = "https://www.enally.in/audio/drop_3d.mp3";

    audio.addEventListener("canplaythrough", function() {

        audio.play();
        setTimeout(function() {
                audio.pause();
            },
            5000);

    }, false);
</script>

</html>

<!-- Extra button code---------------
<button class="arrow">View Story</button>
<button class="slide">&nbsp;</button>
<button class="slide left">&nbsp;</button>
<button class="fade">View Story</button>
-->
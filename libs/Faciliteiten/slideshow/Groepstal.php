<?php if(isset($_GET['textmode'])){header('Content-Type: text/plain');}?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Wobbesheerd :: Paardenstalling Wobbesheerd Oostwold</title>
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<div id="container">

    <div id="header">
    </div>

        <div id="content">

            <style>
                article{

                    position: fixed;
                    width: 70%;
                    left: 0%;
                    right: 0%;
                    top: 0;
                    bottom: 0;
                    padding: 30px 15%;
                    overflow: auto;
                    z-index: 0;
                    transform-origin: 0 50%;

                }

                article:after {
                    position: absolute;
                    content: "";
                    left: 100%
                top: 0%;
                    right: 0;
                    bottom: 0;
                }

                nav {

                    position: fixed;
                    left: -15em;
                    top: 0;
                    bottom: 0;
                    background-color: #234729;
                    border-right: 40px solid darkgreen;
                    box-shadow: 5px 0 5px rgba(0,0,0,0.2);
                    z-index: 1;
                    cursor: pointer;
                }

                nav:after {

                    position: absolute;
                    content: "";
                    width: 0;
                    height: 0;
                    right: -70px;
                    top: 50%;
                    border-width: 15px 15px;
                    border-style: solid;
                    border-color: transparent;
                }

                nav ul {

                    width: 15em;
                    list-style-type: none;
                    font-size: 20px;
                }

                article, article:after, nav, nav * {
                    transition: all 1000ms ease;

                }

                nav:hover {

                    left:0;

                }

                nav:hover - article:after {
                            left: 60%;
                        }

                nav li{

                    color: black;
                    padding: 5%;
                }

            </style>

        </div>

</div>

</body>
</html>
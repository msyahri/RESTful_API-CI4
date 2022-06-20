<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jalumass API</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets') ?>/login/images/lg.png" />
    <!-- <link rel="stylesheet" href="./style.css"> -->

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="wrap">
        <div id="wordsearch">
            <ul>
                <li>k</li>

                <li>v</li>

                <li>n</li>

                <li>z</li>

                <li>x</li>

                <li class="four">J</li>

                <li>m</li>

                <li>e</li>

                <li class="ten">R</li>

                <li class="eleven">E</li>

                <li>x</li>

                <li>l</li>

                <li>y</li>

                <li class="one">A.</li>

                <li class="two">P.</li>

                <li class="three">I.</li>

                <li>y</li>

                <li class="twelve">S</li>

                <li class="thirteen">T</li>

                <li>b</li>

                <li>q</li>

                <li class="five">L</li>

                <li>d</li>

                <li>y</li>

                <li>p</li>

                <li>a</li>

                <li>p</li>

                <li>a</li>

                <li>e</li>

                <li class="six">U</li>

                <li>v</li>

                <li>j</li>

                <li>a</li>

                <li>n</li>

                <li>o</li>

                <li>t</li>

                <li>c</li>

                <li class="seven">M</li>

                <li>e</li>

                <li>w</li>

                <li>v</li>

                <li>x</li>

                <li>e</li>

                <li>p</li>

                <li>f</li>

                <li class="eight">A</li>

                <li>h</li>

                <li>q</li>

                <li class="four">A</li>

                <li class="five">G</li>

                <li class="six">E</li>

                <li class="seven">N</li>

                <li class="eight">T</li>

                <li class="nine">S</li>

                <li>s</li>

                <li>w</li>

                <li>q</li>

                <li>v</li>

                <li>o</li>

                <li>s</li>

                <li>m</li>

                <li>v</li>

                <li>f</li>

                <li>u</li>
            </ul>
        </div>

        <div id="main-content">
            <h1><b>JalumasBanyumas</b><br>{ RESTful API }</h1>

            <p>Akses untuk <i>reseller agent</i> produk JalumasBanyumas</p>

            <p>Anda berada di halaman utama RESTful API. Silahkan menuju ke homepage atau ke laman agen melalui tombol di bawah ini.</p>

            <!-- <div id="search">
        <form>
          <input type="text" placeholder="Search" />
        </form>
      </div> -->

            <div id="navigation">
                <a class="navigation" href="https://www.jalumasbanyumas.com"><b>Halaman Utama</b></a>
                <a class="navigation" href="<?php echo base_url('agen') ?>"><b>Login Agen</b></a>
                <!--<a class="navigation" href="">Site Map</a>-->
                <a class="navigation" href="<?php echo base_url('kontak') ?>"><b>Kontak</b></a>
            </div>
        </div>
    </div>


    <!-- //////////////////////////// CSS //////////////////////////// -->
    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300);

        body {
            background-color: #335B67;
            background: -ms-radial-gradient(ellipse at center, #335B67 0%, #2C3E50 100%) fixed no-repeat;
            background: -moz-radial-gradient(ellipse at center, #335B67 0%, #2C3E50 100%) fixed no-repeat;
            background: -o-radial-gradient(ellipse at center, #335B67 0%, #2C3E50 100%) fixed no-repeat;
            background: -webkit-gradient(radial, center center, 0, center center, 497, color-stop(0, #335B67), color-stop(1, #2C3E50));
            background: -webkit-radial-gradient(ellipse at center, #335B67 0%, #2C3E50 100%) fixed no-repeat;
            background: radial-gradient(ellipse at center, #335B67 0%, #2C3E50 100%) fixed no-repeat;
            font-family: 'Source Sans Pro', sans-serif;
            -webkit-font-smoothing: antialiased;
            margin: 0px;
        }

        ::selection {
            background-color: rgba(0, 0, 0, 0.2);
        }

        ::-moz-selection {
            background-color: rgba(0, 0, 0, 0.2);
        }


        a {
            color: white;
            text-decoration: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            margin-right: 10px;
        }

        a:last-child {
            margin-right: 0px;
        }

        a:hover {
            text-shadow: 0px 0px 1px rgba(255, 255, 255, .5);
            border-bottom: 1px solid rgba(255, 255, 255, 1);
        }

        #noscript-warning {
            width: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.2);
            font-weight: 300;
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
        }



        /* === WRAP === */

        #wrap {
            width: 80%;
            max-width: 1400px;
            margin: 0 auto;
            height: auto;
            position: relative;
            margin-top: 8%;
        }



        /* === MAIN TEXT CONTENT === */

        #main-content {
            float: right;
            max-width: 45%;
            color: white;
            font-weight: 300;
            font-size: 18px;
            padding-bottom: 40px;
            line-height: 28px;
        }

        #main-content h1 {
            margin: 0px;
            font-weight: 400;
            font-size: 42px;
            margin-bottom: 40px;
            line-height: normal;
        }



        /* === NAVIGATION BUTTONS === */

        #navigation {
            margin-top: 2%;
        }

        #navigation a.navigation {
            display: block;
            float: left;
            background-color: rgba(0, 0, 0, 0.2);
            padding-left: 15px;
            padding-right: 15px;
            color: white;
            height: 41px;
            line-height: 41px;
            text-decoration: none;
            font-size: 16px;
            transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            margin-right: 2%;
            margin-bottom: 2%;
            border-bottom: none;
        }

        #navigation a.navigation i {
            line-height: 41px;
        }

        #navigation a.navigation:hover {
            background-color: rgba(26, 188, 156, 0.7);
            border-bottom: none;
        }



        /* === WORDSEARCH === */

        #wordsearch {
            width: 45%;
            float: left;
        }

        #wordsearch ul {
            margin: 0px;
            padding: 0px;
        }

        #wordsearch ul li {
            float: left;
            width: 12%;
            background-color: rgba(0, 0, 0, .2);
            list-style: none;
            margin-right: 0.5%;
            margin-bottom: 0.5%;
            padding: 0;
            display: block;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            overflow: hidden;
            font-size: 24px;
            font-size: 1.6vw;
            font-weight: 300;
            transition: background-color 0.75s ease;
            -moz-transition: background-color 0.75s ease;
            -webkit-transition: background-color 0.75s ease;
            -o-transition: background-color 0.75s ease;
        }

        #wordsearch ul li.selected {
            background-color: rgba(26, 188, 156, 0.7);
            color: rgba(255, 255, 255, 1);
            font-weight: 400;
        }



        /* === SEARCH FORM === */

        #search {
            margin-top: 30px;
        }

        #search input[type='text'] {
            width: 88%;
            height: 41px;
            padding-left: 15px;
            padding-rigt: 15px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            background-color: rgba(0, 0, 0, 0.2);
            border: none;
            outline: none;
            -webkit-appearance: none;
            font-size: 16px;
            font-weight: 300;
            color: white;
            font-family: 'Source Sans Pro', sans-serif;
            transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            border-radius: 0px;
        }

        #search .input-search {
            width: 10%;
            float: right;
            height: 41px;
            background-color: rgba(0, 0, 0, 0.2);
            outline: none;
            border: none;
            -webkit-appearance: none;
            font-family: 'Source Sans Pro', sans-serif;
            color: white;
            font-weight: 300;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            text-align: center;
        }

        #search .input-search:hover {
            background-color: rgba(26, 188, 156, 0.7);
        }



        /* === RESPONSIVE CSS === */

        @media all and (max-width: 899px) {
            #wrap {
                width: 90%;
            }
        }

        @media all and (max-width: 799px) {
            #wrap {
                width: 90%;
                height: auto;
                margin-top: 40px;
                top: 0%;
            }

            #wordsearch {
                width: 90%;
                float: none;
                margin: 0 auto;
            }

            #wordsearch ul li {
                font-size: 4vw;
            }

            #main-content {
                float: none;
                width: 90%;
                max-width: 90%;
                margin: 0 auto;
                margin-top: 30px;
                text-align: justify;
            }

            #main-content h1 {
                text-align: left;
            }

            #search input[type='text'] {
                width: 84%;
            }

            #search .input-search {
                width: 15%;
            }
        }

        @media all and (max-width: 499px) {
            #main-content h1 {
                font-size: 28px;
            }
        }
    </style>


    <!-- //////////////////////////// CSS //////////////////////////// -->

    <!-- //////////////////////////// JS //////////////////////////// -->
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!--<script  src="./script.js"></script> -->
    <script>
        $(function() {
            var liWidth = $("li").css("width");
            $("li").css("height", liWidth);
            $("li").css("lineHeight", liWidth);
            var totalHeight = $("#wordsearch").css("width");
            $("#wordsearch").css("height", totalHeight);
        });
        causeRepaintsOn = $("h1, h2, h3, p");
        $(window).resize(function() {
            causeRepaintsOn.css("z-index", 1);
        });
        $(window).on('resize', function() {
            var liWidth = $(".one").css("width");
            $("li").css("height", liWidth);
            $("li").css("lineHeight", liWidth);
            var totalHeight = $("#wordsearch").css("width");
            $("#wordsearch").css("height", totalHeight);
        });



        $(function() {
            /* 4 */
            $(this).delay(1500).queue(function() {
                    $(".one").addClass("selected");
                    $(this).dequeue();

                })
                /* 0 */
                .delay(500).queue(function() {
                    $(".two").addClass("selected");
                    $(this).dequeue();
                })
                /* 4 */
                .delay(500).queue(function() {
                    $(".three").addClass("selected");
                    $(this).dequeue();
                })
                /* P */
                .delay(500).queue(function() {
                    $(".four").addClass("selected");
                    $(this).dequeue();
                })
                /* A */
                .delay(500).queue(function() {
                    $(".five").addClass("selected");
                    $(this).dequeue();
                })
                /* G */
                .delay(500).queue(function() {
                    $(".six").addClass("selected");
                    $(this).dequeue();
                })
                /* E */
                .delay(500).queue(function() {
                    $(".seven").addClass("selected");
                    $(this).dequeue();
                })
                /* N */
                .delay(500).queue(function() {
                    $(".eight").addClass("selected");
                    $(this).dequeue();
                })
                /* O */
                .delay(500).queue(function() {
                    $(".nine").addClass("selected");
                    $(this).dequeue();
                })
                /* T */
                .delay(500).queue(function() {
                    $(".ten").addClass("selected");
                    $(this).dequeue();
                })
                /* F */
                .delay(500).queue(function() {
                    $(".eleven").addClass("selected");
                    $(this).dequeue();
                })
                /* O */
                .delay(500).queue(function() {
                    $(".twelve").addClass("selected");
                    $(this).dequeue();
                })
                /* U */
                .delay(500).queue(function() {
                    $(".thirteen").addClass("selected");
                    $(this).dequeue();
                })
                /* N */
                .delay(500).queue(function() {
                    $(".fourteen").addClass("selected");
                    $(this).dequeue();
                })
                /* D */
                .delay(500).queue(function() {
                    $(".fifteen").addClass("selected");
                    $(this).dequeue()
                });
        });
    </script>

    <!-- //////////////////////////// JS //////////////////////////// -->


</body>

</html>
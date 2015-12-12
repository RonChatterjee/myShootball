<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Table Style</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <style>
        h1 {
            animation:glow 10s ease-in-out infinite;



            /* For less laggy effect, uncomment this:

              animation:none;
              -webkit-text-stroke:1px #fff;

            =========== */

        }



        * { box-sizing:border-box; }

        body {
            background:#0a0a0a;
            overflow:hidden;
            text-align:center;
        }

        figure {
            animation:wobble 5s ease-in-out infinite;
            transform-origin:center center;
            transform-style:preserve-3d;
        }

        @keyframes wobble {
            0%,100%{ transform:rotate3d(1,1,0,40deg); }
            25%{ transform:rotate3d(-1,1,0,40deg); }
            50%{ transform:rotate3d(-1,-1,0,40deg); }
            75%{ transform:rotate3d(1,-1,0,40deg); }
        }

        h1 {
            display:block;
            width:100%;
            padding:40px;
            line-height:1.5;
            font:900 8em 'Concert One', sans-serif;
            text-transform:uppercase;
            position:absolute;
            color:#0a0a0a;
        }

        @keyframes glow {
            0%,100%{ text-shadow:0 0 30px red; }
            25%{ text-shadow:0 0 30px orange; }
            50%{ text-shadow:0 0 30px forestgreen; }
            75%{ text-shadow:0 0 30px cyan; }
        }

        h1:nth-child(2){ transform:translateZ(5px); }
        h1:nth-child(3){ transform:translateZ(10px);}
        h1:nth-child(4){ transform:translateZ(15px); }
        h1:nth-child(5){ transform:translateZ(20px); }
        h1:nth-child(6){ transform:translateZ(25px); }
        h1:nth-child(7){ transform:translateZ(30px); }
        h1:nth-child(8){ transform:translateZ(35px); }
        h1:nth-child(9){ transform:translateZ(40px); }
        h1:nth-child(10){ transform:translateZ(45px); }
    </style>
</head>

<body>
<figure>
    <?php
        for($i=0;$i<11;$i++)
            echo '<h1>Team '.$team.' WINS!</h1>';
    ?>
</figure>
</body>
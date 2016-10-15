<!DOCTYPE html>
<html>
<head>
    <style>
        div.img {
            border:5px solid #ccc;
        }

        div.img:hover {
            border:5px solid #777;
        }

        div.img img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding:20px;
            text-align: center;
        }

        * {

            padding: 2px;
            box-sizing: border-box;
        }

        .responsive {
            padding: 5px 10px;
            float: left;
            width: 24.99%;
        }

        @media only screen and (max-width: 700px){
            .responsive {
                width: 49.99999%;
                margin: 6px 6px;
            }
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body background="images/fpantalla.jpg">

<div class="responsive">
    <div class="img">
            <div class="card-image">
                <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc">Add a description of the image here</div>
        </div>
    </div>
</div>

<div class="responsive">
    <div class="img">
        <div class="card-image">
            <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
        </div>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>
</div>

<div class="responsive">
    <div class="img">
        <div class="card-image">
            <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
        </div>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>
</div>

<div class="responsive">
    <div class="img">
        <div class="card-image">
            <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
        </div>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>
</div>

<div class="responsive">
    <div class="img">
        <div class="card-image">
            <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
        </div>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>
</div>

<div class="responsive">
    <div class="img">
        <div class="card-image">
            <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
        </div>
        <div class="desc">Add a description of the image here</div>
    </div>
</div>
</div>
<div class="clearfix"></div>
<body>
</html>








@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<style>
    div.img {
        border:1px solid #ccc;
    }

    div.img:hover {
        border:1px solid #777;
    }

    div.img img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding:1px;
        text-align: center;
    }

    * {

        padding: 1px;
        box-sizing: border-box;
    }

    .responsive {
        padding: 5px 5px;
        float: left;
        width: 25%;
        margin: 50px;



    }

    @media only screen and (max-width: 700px){
        .responsive {
            width: 50%;
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


 <div class="responsive">
    <div class="img">
                <div class="card-image">
                    <img src="images/hab1.jpg" alt="hab1" width="600" height="400">
                </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab2.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab3.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab4.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

    <div class="responsive">
        <div class="img">
            <div class="card-image">
                <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
            </div>
            <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
            <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
            <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
        </div>
    </div>

 <div class="responsive">
     <div class="img">
         <div class="card-image">
             <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
         </div>
         <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
         <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
         <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
     </div>
 </div>

 <div class="responsive">
     <div class="img">
         <div class="card-image">
             <img src="images/hab5.jpg" alt="hab1" width="600" height="400">
         </div>
         <div class="desc" style="color: whitesmoke;font-size: 200%;font-family: 'Calibri'">Villas Eafit</div>
         <div class="desc" style="color: whitesmoke;font-size: 150%;font-family: 'Calibri'">500.000$ COP</div>
         <div class="desc" style="color: whitesmoke;font-family: 'Calibri'">Ubicado alfrente de eafit con habitacion pero sin cama </div>
     </div>

 </div>
</div>

 <div class="clearfix"></div>
</body>
</html>

@endsection






<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>대나무숲::메인페이지</title>
              
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <link href="./stylesheet.css" rel="stylesheet">
                <style>
                    .navbar-inverse .navbar-nav>.open>a
                    {
                            color: #fff;
                            background-color: #D0F9EF";
                    }
                    .margin{
                        margin:8px;
                    }
               </style>
    </head>
    <body >
          <nav class="navbar navbar-inverse" style="border:2px solid #D0F9EF">
              <div class="container-fluid" style="background-color:white">
                       <form action="login_form.php">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#" style="color:aquamarine">a bamboo grove</a>
                </div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#" style="background-color: #D0F9EF">Home</a></li>
                  <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#"style="color:aquamarine" 
                   >Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#" style="color:aquamarine">Page 1-1</a></li>
                      <li><a href="#" style="color:aquamarine">Page 1-2</a></li>
                      <li><a href="#" style="color:aquamarine">Page 1-3</a></li>
                    </ul>
                  </li>
                  <li><a href="#"style="color:aquamarine">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
            
        <?php
            require_once("tools.php");

            session_start();
            $session_name=readSessionVar("name");
            if(isset($_SESSION["uid"])){
        ?>             
<!--login-->
                  <li style="margin:15px"><?=$session_name?>님,  환영합니다</li>
                  <li class="margin"><input type="button" class="btn btn-default" id="navbnt" value="logout" onclick="location.href='logout.php'"></li>
                  <li class="margin"><input type="button" class="btn btn-default" value="info" onclick="location.href='update_form.php'"></li> 
        <?php
            }else{
        ?>
<!--logout-->
                  <li class="margin"><input type ="button" class="btn btn-default" id="navbnt" value=" login " onclick="location.href='login_form.php'"> </li>
                  <li class="margin"><input type="button" class="btn btn-default" id="navbnt" value=" Sign Up " onclick="location.href='member_join_form.php'"></li> 

        <?php
            }
                ?>    
           </ul> </form>
            </div>
            </nav>

<!------------------------------------------------->       
       
       
       
       
        <div class="mainpage-div" >
        <div class="form-heading">
        <span class="logo">
            <img src="./img/Bamboo_green.png" width="60px" height="60px" ></span>
        <span class="logo">        
  <h2 class="primary-h">당신의 대나무숲</h2></span>
          </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="./img/main1.png" >
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="./img/main2.png" >
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="./img/main3.png">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

    </body>

</html>
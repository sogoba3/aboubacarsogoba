<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/inde.css" />

    <title>Hello, world!</title>

    <script>

    $(document).ready(function(){
      $('#fs-topic').hover(function(){
        $(this).fadeTo("slow");
      });
    });
      /*
    $(document).ready(function()
    {
     $('.yiri').hover(function()
     {
      $('.text_div').slideToggle('slow');
     },
     function()
     {
      $('.text_div').slideToggle('slow');
     });
    });
    */
 </script>

  </head>
  <body>
    <!-- begining of the head section -->
    <div class="jumbotron jumbotron-fluid">
     <div class="container coloreffect">
       <h1 class="display-4" >Hello, I am <span style="color:#FFD700">Aboubacar Sidiki Sogoba</span>.</br>I am a junior front end web developer.</h1>
       <a class="btn btn-outline-dark btn-lg" href="#" role="button">Learn more</a>
     </div>
   </div>
   <!-- begining of the <menu>-->
   <nav class="navbar navbar-dark bg-dark" id= "navscroll">
  		<ul class="nav">
  		  <li class="nav-item">
  			     <a class="nav-link active" href="#home">Home</a>
  		  </li>
  		  <li class="nav-item">
  			     <a class="nav-link" href="#about">About</a>
  		  </li>
  		  <li class="nav-item">
  			     <a class="nav-link" href="#portfolio">Portfolio</a>
  		  </li>
  		  <li class="nav-item">
  			     <a class="nav-link" href="#blog">Blog</a>
  		  </li>
  		  <li>
  			     <a class="nav-link" href = "#contact">Contact</a>
  		  </li>
  		</ul>
      <!-- begining of the 'about' section -->
  	</nav>
    <div class="container-fluid">
      <h2 class="headings">About</h2>
     <div class="container">
     <div class="row">
       <div class="col">
         <img class="rounded mx-auto d-block" src="images/perso-pic.jpg" alt="perso-pic" width="200" height="200"/>
         <h4>Who's this guy?</h4>
         <span>I'm an Information Technology Management student<br> who has a strong love for web developement. <br>I have a serious passion to becoming<br> a complete web developer.</span>
       </div>
       <div class="col">
         <div class="progress">
           <p class="barname">HTML</p><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">CSS</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">JavaScript</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">Bootstrap</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">jquery</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">Wordpress</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">MySQL</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
           </div>
         </div></br>
         <div class="progress">
           <span class="barname">PHP</span><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- begining of the 'Portfolio' section -->

<div class="container-fluid bgcolor">
	<h2 class="headings">Portfolio</h2>
	<div class="container">
		<div class="container" >
			<div class="row">
				<div class="col-sm">
				  <a href="https://www.yiri.store"><img  class="img-thumbnail yiri" src="images/yiri.png" alt="#"></a>
        <div class= "text_div">
            <div class="text">
          <a class="btn btn-outline-dark btn-sm" href="#" role="button">Learn more...</a>
            </div>
        </div>
        </div>

				<div class="col-sm" id="nontastik">
				  <a href="http://www.nontastik.com"><img  class="img-thumbnail nontastik" src="images/nontastik.gif" alt="#"></a>

          <div class= "text_div">
              <div class="text">
            <a class="btn btn-outline-dark btn-sm" href="#" role="button">Learn more...</a>
              </div>
          </div>
				</div>

				<div class="col-sm"  id="worldsj">
				  <a href="http://www.worldsoccerjerseys.org" ><img class="img-thumbnail worldsj" src="images/worldsoccer.png" alt="#"></a>

          <div class= "text_div">
              <div class="text">
            <a class="btn btn-outline-dark btn-sm" href="#" role="button">Learn more...</a>
              </div>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- begining of the 'blog' section -->

 <div class="container-fluid" id="blog-container">
	<h2 class="headings">Blog</h2>
	<div class="container">
    <div class="row">
      <div class="col">
        <a href="mamaafrica" ><img id="fs-topic" class="img-fluid" src="images/mamaafrica.jpg" alt="Card image cap" /></a>
        <a href="#" id="fs-topic"><img class="img-fluid" src="images/growinafric.jpg" alt="Card image cap"></a>
      </div>
      <div class="col">
        <a href="#" id="tf-topic"><img class="img-fluid" src="images/blamee.jpg" alt="Card image cap"></a>
        <a href="#" id="tf-topic"><img class="img-fluid" src="images/likealio.jpg" alt="Card image cap"></a>
      </div>
    </div>
	</div>
</div>
 <!-- begining of the 'Contact' section -->
<div class="container">
  <h2>Inline form</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


   <button type="submit" class="btn btn-default">Submit</button>
 </form>


 <!-- begining of the '<footer></footer>' section -->

 <div class="footer ">
   <div class="container">
    working on you later
  </div>
 </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

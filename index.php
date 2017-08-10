<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Project 2 - Personal Portofolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="container-fluid">

  <div class="container">
    <!-- Navigation and social links -->
    <div class="row">
      <div class="col-xs-1">  
        <nav>
          <div class="dropdown ">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#work">Work</a></li>
              <li><a href="#dev-cap">Dev. capabilities</a></li>
              <li><a href="#profile">Profile</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-xs-4">
        <div class="row">
          <div class="col-xs-1">
            <div id="image-container">
              <a href="https://github.com/cherrybeans" target="_blank">
                <img src="https://image.flaticon.com/icons/png/512/25/25231.png">
              </a>
            </div>
          </div>
          <div class="col-xs-1">
            <div id="image-container">
              <a href="https://codepen.io/cherrybeans/" target="_blank">
                <img src="http://blog.codepen.io/wp-content/uploads/2012/06/Button-Black-Large.png">
              </a>
            </div>
          </div>
          <div class="col-xs-1">
            <div id="image-container">
              <a href="https://www.linkedin.com/in/sigridkvamme/" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bulletin -->
    <div class="row">
      <div class="col-xs-12">
        <ul class="ch-grid">
          <li>
            <div class="ch-item ch-img-1">				
              <div class="ch-info-wrap">
                <div class="ch-info">
                  <div class="ch-info-front">
                    <h3>Sigrid <br>Marita <br>Kvamme</h3>
                    <p>Aspiring full stack developer
                      <br>Move along, move along
                      <br><br><span style="font-size:25px" class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></p>
                  </div>
                  <div class="ch-info-back">
                    <h2>I'm taking you <br>for an an <br>adventure!</h2>
                    <p style="border-top: 0;">Now scroll along
                      <br><br><span style="font-size:25px" class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    </p>
                  </div>	
                </div>
              </div>
            </div>
          </li>
        </ul>
        <hr/>
      </div>
    </div>
    <!-- Work -->
    <div id="work" class="row no-gutters">
      <div class="col-xs-12">
        <div class="section-header">
          <h2>Selected work</h2>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="thumbnail work">
          <a href="https://s.codepen.io/cherrybeans/debug/PmrMLO/LDkmdVnWwGaA" target="_blank">
            <img src="./pictures/SoHyangThumnail.PNG" alt="So Hyang Tribute Page">
          </a>
          <div class="card">
            <h2>Tribute page - So Hyang</h2>
            <p>Bootstrap, HTML, CSS and JS</p>
            <p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="thumbnail work">
          <a href="https://chemie.no/" target="_blank"><img src="./pictures/KlassekatalogThumbnail.PNG" alt="Modal at Chemie.no"></a>
          <div class="card">
            <h2>Developing work on chemie.no</h2>
            <p>Django, HTML, CSS, SQL</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Development Capabilities -->
    <div id="dev-cap" class="row">
      <div class="col-xs-12">
        <hr/>
        <div class="section-header">
          <h2>Development Capabilities & Tools</h2>
          <p class="h4 text-center"> CSS 3, HTML 5, Python 3, Django, Bootstrap, Materialize, Photoshop</p>
          <div class="section-header">
            <h2 style="font-size: 20px"> Also working on</h2>
            <p class="h5 text-center"> All above + JavaScript, jQuery, SQL</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Profile -->
    <div id="profile" class="row">
      <div class="col-xs-12">
        <hr/>
        <div class="section-header">
          <h2>Profile</h2>
          <p class="text-center"> Hi! My name is Sigrid Marita Kvamme. I live in Norway, and I'm a student at NTNU, Norwegian University of Science and Technology. I am passionate about programming, so far-self taught, and I am looking forward to start studying for a master in data science next semester.</p>
        </div>
      </div>
    </div>
    <!-- Contact -->
    <div id="contact" class="row">
      <div class="col-xs-12">
        <hr/>
        <div class="section-header">
          <h2>Contact me</h2>
          <p class="text-center"> If you'd like to find me, I am on LinkedIn, GitHub and Codepen by the name of cherrybeans.</p>
          <p class="text-center"> For more personal contact, send me an <a href="mailto:sigridkvamme@gmail.com?Subject=Hello%20there">e-mail</a>.
		  <p class="text-center">kek <?php echo(date("l jS F", filemtime("./index.php"))); ?></p>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <hr>
      <p>© <a href="https://www.freecodecamp.com/cherrybeans" target="_blank">Sigrid Kvamme</a></p>
    </footer>  
  </div>
  
  
</body>
</html>

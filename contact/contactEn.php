<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shenyang</title>

    <meta charset="utf-8">
  	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>

  <body>
    <div id="navBarre">
      <?php
        include '../navBarreEn.php';
      ?>
    </div>


<!--**************************************** CONTACT ***************************************-->
    <section id="contact" class="content-section text-center">
      <div class="contact-section">
        <div class="container">
          <h1>Contact us</h1>
          <br>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <img alt="" src="image/map.jpg">
            </div>


            <div class="col-xs-0 col-sm-2 col-md-2"></div>
            <br>
              <div class="col-xs-12 col-sm-12 col-md-5">
              <form action="" role="form" method="post" class="form-horizontal">

                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="John SMITH">
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="john.smith@exemple.com">
                </div>

                <div class="form-group ">
                  <label for="message" class="col-sm-2 control-label" >Message</label>
                  <textarea name="message" class="form-control" rows="4" placeholder="Description"></textarea>
                </div>

                <div class="form-group">
                  <label for="human" class="col-sm-3 control-label">2 + 3 = ?</label>
                  <input type="text" class="form-control" id="human" name="human" placeholder="Reponse">

                </div>

                <input name="submit" type="submit" id="submit" class="btn btn-default" value="Send">

                <div class="form-group">
                  <?php
                    if (isset($_POST["submit"])) {
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $human = intval($_POST['human']);
                        $from = 'Site Shenyang';
                        $to = 'shenyangunesco@gmail.com';
                        $subject = 'Site Shenyang';

                        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                        if (!$_POST['name']) {
                          echo "Incorrect Name<br/>";
                          $errName=1;
                        }

                        // Check if email has been entered and is valid
                        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                          echo "Incorrect Mail<br/>";
                          $errEmail=1;
                        }

                        if (!$_POST['message']) {
                          echo "Incorrect Message<br/>";
                          $errMessage=1;
                        }

                        if ($human !== 5) {
                          echo "Incorrect Addition<br/>";
                          $errHuman=1;
                        }

                      if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
                        if (mail ($to, $subject, $body, $from)) {
                          echo '<h4 style="color:green;">Message Sending</h4>';
                        }
                      }
                      else {
                         echo '<h4 style="color:red;">Message Not Sending</h4>';
                      }
                    }
                  ?>
                </div>

              </form>
            </div>


          </div>
        </div>
      </div>
    </section>
<!--************************************** FIN CONTACT *************************************-->
    <div class="trait"></div>

<!--*********************************** RESUME *************************************-->
    <section id="resume" class="content-section text-center">
      <div class="contact-section">
        <div class="container">
          <h1>Project Description</h1><br>
          <br>
            <p class="texte">
              We are three students of University Paris-Est Marne-la-Vallée and we have for project this year to make a web site.<br>
              <br>
              In collaboration with UNESCO, the purpose of this web site is to promote the Shenyang District througth the cultural and numerical médiation.<br>
              <br>
              You will find through the pages of this site, the history of Shenyang through its monuments and its past.
          </p>
        </div>
      </div>
    </section>
<!--********************************** FIN RESUME ************************************-->

    <div class="trait"></div>


<!--*********************************** EQUIPE *************************************-->
    <section id="team" class="content-section text-center">
      <div class="contact-section">
        <div class="container">
          <br>
          <h1>Team</h1>
          <br><br>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <img class="photo" alt="Julian MAYEUX" src="image/julianMayeux.png">
              <br><br>
              <h6>Julian MAYEUX</h6>
              Developer/ WEB designer<br>
              3D artist<br><br>
              <a href="https://www.linkedin.com/in/julian-mayeux-15b25a155/" target="_blank"><img alt="" class="linkedin" src="image/linkedin.png"></a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <img class="photo" alt="" src="image/cyrilLagelee.png">
              <br><br>
              <h6>Cyril LAGELEE</h6>
              Project Manager<br>
              Research manager<br><br>
              <a href="https://www.linkedin.com/in/cyril-lagelee-81625a155/" target="_blank"><img alt="" class="linkedin" src="image/linkedin.png"></a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <img class="photo" alt="Josselin TRUONG" src="image/josselinTruong.png">
              <br><br>
              <h6>Josselin TRUONG</h6>
              Translation manager<br>
              Research assistant<br><br>
              <a href="https://www.linkedin.com/in/josselin-truong-16525a155/" target="_blank"><img alt="" class="linkedin" src="image/linkedin.png"></a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--********************************** FIN EQUIPE ************************************-->

    <div class="trait"></div>


<!--*********************************** EQUIPE PEDA *************************************-->
    <section  class="content-section text-center">
      <div id="teamPeda" class="contact-section">
        <div class="container">
          <br>
          <h1>Teaching staff</h1>
          <br><br>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <img class="photo" alt="Georges Mathieu" src="image/georgesMathieu.png">
              <br><br>
              <h6>Georges MATHIEU </h6>
              Project Management Teacher<br>
              <i>geo.mathieu@gmail.com</i><br>
              <a href="https://www.linkedin.com/in/geomathieu/" target="_blank"><img alt="" class="linkedin" src="image/linkedin.png"></a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <img class="photo" alt=" David Cessy" src="image/davidCessy.png">
              <br><br>
              <h6>David CESSY </h6>
              Computer Science Teacher<br>
              <a href="https://fr.linkedin.com/in/david-cessy-b8042239/" target="_blank"><img alt="" class="linkedin" src="image/linkedin.png"></a>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <img class="photo" alt="Tewfik Ettayeb" src="image/ettayeb.png">
              <br><br>
              <h6>Tewfik ETTAYEB</h6>
              In charge of the UNESCO Forum<br>
              <i>tewfik.ettayeb@u-pem.fr</i><br>
              <a href="https://www.linkedin.com/in/tewfikettayeb/" target="_blank"><img alt="" class="linkedin" src="image/linkedin.png"></a>
            </div>

          </div>
        </div>
      </div>
    </section>
<!--********************************** FIN EQUIPE PEDA ************************************-->

    <div class="trait"></div>

<!--********************************** PARTENAIRES ************************************-->
  <section id="partenaire" class="content-section text-center">
    <div id="home" class="carousel slide" data-ride="carousel">
      <h1>Our Partners</h1>
      <br/>

      <ul class="carousel-indicators">
        <li data-target="#home" data-slide-to="0" class="active"></li>
        <li data-target="#home" data-slide-to="1"></li>
        <li data-target="#home" data-slide-to="2"></li>
        <li data-target="#home" data-slide-to="3"></li>
        <li data-target="#home" data-slide-to="4"></li>
        <li data-target="#home" data-slide-to="5"></li>
      </ul>



      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="fond" src="image/unesco.png" alt="UNESCO">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/forumunesco.png" alt="Forum UNESCO">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/upem.png" alt="UPEM">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/idea.png" alt="IDEA">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/anr.png" alt="ANR">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="carousel-item">
          <img class="fond" src="image/investissementdavenir.png" alt="Investissement d'avenir">
          <div class="carousel-caption">
          </div>
        </div>
      </div>

    </div>
  </section>
<!--********************************** FIN PARTENAIRES ************************************-->
    <div class="trait"></div>

<!--*********************************** MERCI *************************************-->
    <section id="merci" class="content-section text-center">
      <div class="contact-section">
        <div class="container">
          <br>
          <h1>Thanks</h1>
          <br><br>

          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <h6>UNESCO and ICOMOS</h6>
              For partnership, rights and sharing of textual and photographic documents.
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <h6>Francois MOUYSSET</h6>
              For rights granted on photographs of Shenyang Palace, Fuling Tomb and Zhaoling Mausoleum.
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <h6>CassaCastell</h6>
              For rights granted on the photographs of Mount Qian Shan.
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <h6>293janeg</h6>
              For rights granted one the photographs of the Benxi Cave.
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
              <h6>Evgeny N</h6>
             For rights granted on the photographs of Mount Qian Shan.
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
<!--********************************** FIN MERCI ************************************-->


    <footer>
        <p class="m-0 text-center text-white">Copyright &copy; Shenyang - 2018</p>
    </footer>


    <script src="http://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>



    <script>
      /* Anime la descente pou evite que cela soit brusquement */
      $(function() {
        $('a[href*="#"]').on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
        });
      });
    </script>


  </body>

</html>
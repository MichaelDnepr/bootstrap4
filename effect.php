<?php
  include "header.php";
?>

    <main role="main">

      <div class="container text-center">
        <div class="row mt-4">
          <div class="col-md-12">
            <h2 class="text-center">Effects</h2>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="div1"></div>
            <button id="btn1" class="btn btn-lg btn-warning mt-4">bounce effect</button>
          </div>
          <div class="col-md-4">
            <div class="div2"></div>
            <button id="btn2" class="btn btn-lg btn-warning mt-4">explode effect</button>
          </div>
          <div class="col-md-4">
            <div class="div3"></div>
            <button id="btn3" class="btn btn-lg btn-warning mt-4">pulsate effect</button>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <h2 class="text-center">Show/Hide</h2>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="divshow"></div>
            <button id="btnshow" class="btn btn-lg btn-danger mt-4">Show div</button>
          </div>
          <div class="col-md-6">
            <div class="divhide"></div>
            <button id="btnhide" class="btn btn-lg btn-danger mt-4">Hide div</button>            
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">
            <h2 class="text-center">Add class/Remove class</h2>
          </div>
        </div>        
        <div class="row mt-4">
          <div class="col-md-6">
            <img id="pic1" src="img/3.jpg" class="img-fluid" width="200" alt="">
            <button id="btnadd" class="btn btn-lg btn-info">Add class</button>
          </div>
          <div class="col-md-6">
            <img id="pic2" src="img/1.jpg" class="img-fluid imgcircle" width="200" alt="">
            <button id="btnremove" class="btn btn-lg btn-info">Remove class</button>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">
            <h2 class="text-center">Switch class</h2>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="divtxt">
              <p class="abzac">Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Возвращайся путь назад алфавит домах там вопроса переписывается, рыбного, инициал, она ручеек коварный грустный раз своих. Однажды страна свою переписывается.</p>
            </div>
            <button id="btnswitch" class="btn btn-lg btn-default">Switch class</button>
          </div>
          <div class="col-md-6">
              <h2 class="text-center">Color Animate</h2>
              <div class="anim">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam eveniet architecto a culpa voluptatem maxime voluptatum, quo distinctio incidunt pariatur.</div>
              <button id="animbtn" class="btn btn-lg btn-primary mt-4">Color Animate</button>
          </div>
        </div>      
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container mt-4 text-center">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


<?php
include "footer.php";
?>

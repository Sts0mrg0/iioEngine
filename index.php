<?php 
	include('inc/redirector.php');
  $homepath = '';
  $title = 'Home';
	include('inc/preHeader.php');
	include('inc/header.php');
?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <div id="inner-carousel" class="carousel-inner">
    <div class="item active">
      <img id="feature-0" src="img/bnr-platformer.png" alt="">
      <div class="container">
        <div style="margin-bottom:180px; margin-left:20px" class="carousel-caption">
          <h1 style="color:white">Accelerate Development.</h1>
          <p class="lead"></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img id="feature-1" src="img/bnr-spaceShooter.png" alt="">
      <div class="container">
        <div style="margin-bottom:40px;" class="carousel-caption">
          <h1>Focus on your content.</h1>
          <p class="lead"></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span8">
          <h2>an Interactive App Framework for HTML5</h2>
          <h3>built with Canvas &amp; JavaScript</h3>
          <p>iio engine (pronounced 'ee-oh') is a framework that speeds the <span class="kwd">creation and deployment</span> of HTML5 Canvas applications. The engine has no dependencies, can be interfaced with <span class="kwd">Box2D</span>, includes an <a href="sandbox">online IDE</a>, features a new scripting language that <span class="kwd">minimizes syntax</span>, and is linked to a <span class="kwd">free publishing platform</span> at <a href="http://iioapps.com">iioApps.com</a>. The core platform is <span class="kwd">open source and free</span> to use for any purpose.</p>
        </div>
        <div class="span4">
          <h2>Free &amp; Open Source</h2>
          <p>The download includes minified and production versions of the core iio library. Collaboration and community additions to the engine and its extensions are always encouraged. Submit additions, questions, and bugs on <a href="https://github.com/sbiermanlytle/iioengine">Github</a>. General inquires may be sent to <a href="http://iiointeractive.com/contact">iio interactive</a>.</p>
        </div><!-- /.span4 -->
        <div class="message-arrows-btns span12">
          <h4 style="margin-right:29px">v1.3 features improved syntax<br/>but currently lacks Box2D.</h4>
          <div class="arrows-btns">
            <img class="big-arrow left-arrow" src="img/arrow-grey.png"/>
            <p id="sdk-dl-btn-1-3" style="min-width:190px" class="big-btn"><a style="padding:15px 49px" class="btn-iio grey" onclick="_gaq.push(['_trackEvent', 'SDK', 'Download', 'iioEngine 1.3']);" href="https://github.com/sbiermanlytle/iioengine/archive/master.zip">v1.3 Beta</a></p>
            <img class="big-arrow" src="img/arrow.png"/>
            <p id="quickstart-btn-1-3"class="big-btn"><a class="btn-iio" style="padding:15px 17px" target="_blank" href="api">API</a></p>
            <p id="quickstart-btn-1-3" class="big-btn" style="margin-left:5px;"><a class="btn-iio" target="_blank" href="http://iioapps.com">OS Demos</a></p>
          </div>
        </div>
        <div class="message-arrows-btns span12">
          <h4>Setup is easy, just download<br/>then follow the quick start guide.</h4>
          <div class="arrows-btns">
            <img class="big-arrow left-arrow" src="img/arrow-grey.png"/>
            <p id="sdk-dl-btn" style="min-width:190px" class="big-btn"><a style="padding:15px 26px" class="btn-iio grey" onclick="_gaq.push(['_trackEvent', 'SDK', 'Download', 'iioEngine 1.2.1']);" href="downloads/iio-sdk.zip">Download v1.2</a></p>
            <img class="big-arrow" src="img/arrow.png"/>
            <p id="quickstart-btn" style="min-width:181px" class="big-btn"><a class="btn-iio" href="tutorials/quick-start.php">Quick Start Guide</a></p>
          </div>
        </div>
      </div><!-- /.row -->

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

          <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span8">
          <h2>Built for Speed and Efficiency</h2>
          <p>iio was designed to be as lightweight as possible. Objects have a <span class="kwd">simple mode</span>, to prevent them from carrying any extra weight from unused data. No application is too simple to benefit from utilizing iio.</p>
        </div>
                <div class="span4">
          <h2>Only 40KB of Data</h2>
          <p>The iio Engine is not a bulky framework - its about 1/70th the size of an average mp3 file.</p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

       <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

    <!-- Three columns of text below the carousel -->
      <div class="row">
        <h2 class="featurette-heading" id="ttt-title">How Easy is it? <span class="muted" id="ttt-header">Here's Tic-Tac-Toe in 10 lines of code</span></h2>
       <div id='ttt-code' class="span7">
          <pre class="prettyprint linenums:1">//using iio 1.3
TicTacToe = function(app,s){

  var grid = app.add('center 340 outline 6 grid 3 white');
  var xTurn = true;

  grid.click = function(event,ePos,cell){

    if(!cell.taken){

      if(xTurn) cell.add('height/1.3: x red 6');
      else cell.add('height/1.3: o outline #00baff 6');
      xTurn=!xTurn;

    } cell.taken=true;
  }

}; iio.start( TicTacToe, 'canvasId' );</pre>
<!--<p>See the <a href="tutorials/tic-tac-toe.php">Tic-Tac-Toe Tutorial</a> for a step by step walkthrough.</p>-->
        </div>
        <div class="span5">
          <canvas id="ttt-demo"class="mid-square" style="margin-top:40px" width="340" height="340">Please update your browser to a version that supports canvas</canvas> 
        </div>
      </div><!-- /.row -->

    <hr class="featurette-divider">

           <div class="row">
        <div class="span8">
          <h2>The Future of Application Development</h2>
          <p>Device support for HTML5 is rapidly increasing and 2013 will see the launch of an entirely Web based mobile operating system: <a target="_new" href="http://www.mozilla.org/en-US/firefox/partners/">Firefox OS</a>. Coming with this new OS is brand new <a target="_new" href="http://www.mozilla.org/en-US/firefox/partners/">HTML5 App Marketplace</a> that will soon be <span class="kwd">ubiquitous</span> on <a target="_new" href="http://www.zdnet.com/mozillas-firefox-os-eyes-mobile-domination-with-tablets-to-follow-7000011853/">'low-cost operating systems in emerging markets'.</a></p>
          <p>Of course, <a target="_new" href="http://www.apple.com/webapps/">iOS</a>, <a target="_new" href="https://play.google.com/store">Android</a>, and <a href="http://windows.microsoft.com/en-us/windows-8/apps#Cat=t1">Windows 8</a> already have their own respective HTML5 application stores as well. Like Mozilla, Google is also betting on the future of web applications with the launch of its new Web based <a target="_new" href="http://www.google.com/intl/en/chrome/devices/chromebook-pixel/">Pixel</a> laptop.</p>
          <p>Think about this future - instead of having to constantly monitor your app's functionality across multiple platforms with every new OS change, the creators of those platforms will be scrambling to make their OS's compatible with your app.</p>
          <p>Now is the time to invest in HTML5 software... let's <a href="tutorials/quick-start.php">get started</a> with iio.</p>
          <!--<p>HTML5 is a uniquely stable platform that will continue to unify software development across all forms of media devices.</p>-->
        </div>
                <div class="span4">
          <h2>Why HTML5 &amp; JS?</h2>
          <p>Web applications are inherently <span class="kwd">cross-platform</span>.</p>
          <p> Deploy <span class="kwd">one script</span>, and your users will be able to access your app on their desktops, laptops, tablets, smartphones, e-books, ipods, xboxs, televisions, playstations, nintendo handhelds, cars, digital signs - the list goes on and it will continue to rapidly grow.</p>
          <p>See <a target="_new" href="http://mobilehtml5.org/">mobileHTML5</a> for a current update on HTML5 feature support for web browsers and mobile devices.</p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

       <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

      <div class="row">
        <div class="span7">
          <h2>The Easiest Way to Work with Box2D</h2>
          <p>iio attaches a graphics engine to Box2D by giving its Joint and Shape classes new methods and properties. This makes the Box2D workflow easier than ever. Check out this code sample - if you're familiar with Box2D, it should be very exciting. See the <a href="docs/box2d.php">iio-Box2D Docs</a> for more info.</p>
        </div>
        <div class="span5">
                    <pre class="prettyprint linenums:1 big-width-margin">
//Adding graphics with iio Engine 1.2
io.addObj(world.CreateBody(bodyDef))
   .CreateFixture(fixDef)
   .GetShape()
   .prepGraphics(io.b2Scale)
   .addImage('myImg.png')
   .setStrokeStyle('black',2)
   .setShadow('rgb(150,150,150)',10,10,4);</pre>
        </div><!-- /.span4 -->
      </div><!-- /.row -->



  <?php include('inc/footer.php'); ?>
  </div> <!-- end marketing container -->
<script type="text/javascript" src="iioEngine.min.js"></script>
<script>
  !function ($) {
    $(function(){
      $('#myCarousel').carousel()
    })
  }(window.jQuery)

  var e=document.getElementById("inner-carousel");
  var features = [];
  features[0] = $('#feature-0');
  features[1] = $('#feature-1');

  function setCarousal(){
    var leftMargin;
    for (var i=0;i<features.length;i++){
      leftMargin = window.innerWidth/2 - 940;
      if (leftMargin < 0) 
        features[i][0].style.marginLeft = leftMargin + "px";
      else { 
        features[i][0].style.marginLeft = "auto";
        features[i][0].style.marginRight = "auto";
      }

    }
  } setCarousal();
  iio.addEvent(window, 'resize', setCarousal, false);

TicTacToe=function(app,s){

  var grid = app.add('center 340 outline 6 grid 3 white');

  var xTurn = true;
  grid.click=function(event,ePos,cell){
    if(!cell.taken){
      if(xTurn) cell.add('height/1.3: x red 10');
      else cell.add('height/1.3: o outline #00baff 10');
      xTurn=!xTurn;
    } cell.taken=true;
  }

 var f=[];
  f[0] = $('#feature-0').parent();
  f[1] = $('#feature-1').parent();
  app.loop(8, function(){
    for (var i=0; i<f.length; i++)
    if (f[i].hasClass('next') || f[i].hasClass('prev'))
      f[i][0].style.zIndex=10;
   else f[i][0].style.zIndex=0;
  });
}; iio.start(TicTacToe, 'ttt-demo');
</script>
</div>
</body>
</html>
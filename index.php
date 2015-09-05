<!DOCTYPE html>
<html lang="en">

<head>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <!-- Load the d3 library. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="http://d3js.org/topojson.v1.min.js"></script>
        
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cornell student, web developer, programmer">
    <meta name="author" content="Stephanie Qian Wang">

    <title>Stephanie Qian Wang</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="me.ico">
    <style>
        #map {
          overflow:hidden;
          background: #F0F8FF;
        }
        .hidden {
          display: none;
        }
        div.tooltip {
          color: #222;
          background: #fff;
          padding: .5em;
          text-shadow: #f5f5f5 0 1px 0;
          border-radius: 2px;
          box-shadow: 0px 0px 2px 0px #a6a6a6;
          opacity: 0.9;
          position: absolute;
        }
        .country:hover{
          stroke-width: 2px;
        }
        .text{
          font-size:10px;
          text-transform:capitalize;
        }
        .graticule {
          stroke: #bbb;
          stroke-width: .5px;
          stroke-opacity: .5;
        }
        .equator {
          stroke: #ccc;
          stroke-width: 1px;
        }
    </style>
    <script>
        /*Load content only after background loads*/
        $(function() {
            $("#onload").hide();
            $("#menu-toggle").hide();
            $('header').ready(function() {
                //alert('ready');
                $('#onload').show();
                $("#menu-toggle").show();
            });
        });
    </script>
    
    <script>
        /*google analytics */
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
        ga('create', 'UA-58227440-2', 'auto');
        ga('send', 'pageview');
      
    </script>
</head>

<body>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PGXN99"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PGXN99');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">Stephanie Qian Wang</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
            <li>
                <a href="#services">Experiences</a>
            </li>
            <li>
                <a href="#portfolio">Portfolio</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
             <div class="post1" id="onload">
                <h1>It All Begins With Passion</h1>
                <h3>My Name is Stephanie Qian Wang</h3>
                <br>
                <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="post3">
                    <img src="img/stephanie.jpg" alt="My about photo" width="350"/>
                </div>
              </div>
              <div class="col-lg-8">
                  <div class="post4" style="font-size: 16px;">
                      <p>I am a senior majoring in <strong>Information Science</strong> and minoring in
                      <strong>Business</strong> at
                      <a href="http://www.cornell.edu/" target="_blank">Cornell University</a>.
                      I am also the assistant <strong>webmaster</strong> in
                      <a href="http://www.human.cornell.edu/bio.cfm?netid=qw79" target="_blank">Cornell College of Human Ecology</a>.</p>
                      <p>On campus I am the <strong>project manager coordinator</strong> of
                      <a href="http://cornellds.com" target="_blank">Cornell Data Science Club</a>
                      and I'm conducting a research project on Web Interface Design for Chinese Characters with Professor Susan Fussell in the Computer Science Department at Cornell University.
                      This semester, I am also TAing CS 2800, Discrete Structures.
                      <p>I'm actively involved in student government and volunteering. I help advise the Dean of College of Agriculture and Life Sciences (CALS) on student affairs and activities as a
                      <strong>student advisor</strong> of the CALS Student Advisory Council.
                      I volunteer as a <strong>translator and interpretor</strong> in the Cornell Public Service Center's
                      <a href="http://www.psc.cornell.edu/community-partners/translator-interpreter-program-tip" target="_blank">Translator Interpreter Program (TIP)</a>.</p>
                      <p>I'm a <strong>passionate web developer</strong> and <strong>front-end engineer</strong>. I've not only taught Professor Dan Cosley's
                      <a href="http://courses.cornell.edu/preview_course_nopop.php?catoid=12&coid=93468" target="_blank">Introduction to Web Design and Programming</a> course (INFO1300)
                      as a <strong>teaching assistant</strong>, but I've also worked as a part-time <strong>web developer</strong> for an exam preperation company,
                      <a href="http://www.ingeniusprep.com/" target="_blank">Ingenius Prep</a>, and focused on their Chinese wesite development and SEO.
                      This past summer, I worked on the UX/UI team at <a href="http://newsroom.mastercard.com/press-releases/mastercard-drives-digital-payments-innovation-nyc-technology-hub/" target="_blank">MasterCard</a> as a developer. I exercised agile software developement practice on different projects and went through many iterations of prototyping using both Axure and native code (HTML5, CSS3, and JavaScript).
                      The previous summer, I worked as a <strong>technology associate</strong> at the renown Upstate New York venture accelerator,
                      <a href="http://startfast.net/" target="_blank">StartFast</a>. I helped develope websites for several startup companies and focused mainly on back-end development using PHP. 
                      I've also worked as a <strong>research assistant</strong> on a data scrapping project using Python with Professor Tom Pepinsky at Cornell University.</p>
                      <p>I am very passionate about <strong>entrepreneurship</strong> and the <strong>startup community</strong>.
                      I am the <strong>chief curator</strong> in charge of Ithaca area at <a href="http://uvc.org/ecosystem/community-connectors/" target="_blank">Upstate Venture Connect</a>.</p>
                  </div>
              </div>
            </div>
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>My Experiences</h2>
                    <hr class="small">
                        <div class="row">   
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                <div class="post2">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-child fa-stack-1x text-primary"></i>
                                    </span>
                                </div>
                                    <h4>
                                        <strong>Webmaster</strong>
                                    </h4>
                                    <p>Manage and maintain more than 300 web pages in the website of Cornell College of Human Ecology.</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                <div class="post2">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-users fa-stack-1x text-primary"></i>
                                    </span>
                                </div>
                                    <h4>
                                        <strong>Web Developer</strong>
                                    </h4>
                                    <p>Develop functional and aesthetic websites for start-up companies and non-profit organizations using front-end and back-end skills.</p>
                                    
                                </div>
                            </div>
                           
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                <div class="post2">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-search fa-stack-1x text-primary"></i>
                                    </span>
                                </div>
                                    <h4>
                                        <strong>Undergraduate Researcher</strong>
                                    </h4>
                                    <p>
                                    Conducting research on how the unique characterstics of Chinese typography should and could affect Web Interface Design for Chinese characters.
                                    </p>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                <div class="post2">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-university fa-stack-1x text-primary"></i>
                                    </span>
                                </div>
                                    <h4>
                                        <strong>Teaching Asssitant</strong>
                                    </h4>
                                    <p>Help Cornell students better understand the foundation and concepts in web design and programming.
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <a href="pdfs/resume_WANG.pdf" class="btn btn-dark" target="_blank">View and Download My PDF Resume</a>
            </div>
        </div>
        <!-- /.container -->
    </section>
    
    <section class="about">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <span class="fa-stack fa-4x">
                        <img src="img/me.jpg" alt="My little photo" height="125" />
                </span>
                <div class="post">
                    <h2>"I LOVE facing up new challenges! <br/>
                I look foward to becoming a web developer and programmer."</h2>
                </div>
                <p class="lead"></p>
            </div>
        </div>
              <!-- /.row -->
      </div>
    </section>
    
    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <div class="post5">
                <h1>"No one lives on an island." I believe in leadership and teamwork. </h1>
            </div>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post3">
                            <div class="portfolio-item">
                                <a href="http://ingeniusprep.cn/">
                                    <img class="img-portfolio img-responsive" src="img/ingenius.png" alt="website for ingenius prep">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post4">
                            <div class="portfolio-item">
                                <a href="http://obrien-stonemasonry.com">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg" alt="website for obrien stone masonry">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post3">
                            <div class="portfolio-item">
                                <a href="http://www.marcgetzoff.com">
                                    <img class="img-portfolio img-responsive" src="img/marcgetzoff.png" alt="website for marc getzoff">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post4">
                                <div class="portfolio-item">
                                    <a href="https://massmosaic.com">
                                        <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg" alt="website for massmosaic">
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post3">
                            <div class="portfolio-item">
                                <a href="http://www.cipa.cornell.edu">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg" alt="website for CHE" >
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post4">
                            <div class="portfolio-item">
                                <a href="#">
                                <?php  header( 'Location: aepcos/index.php' ) ;  ?>
                                    <img class="img-portfolio img-responsive" src="img/ribbon.png" alt="website for aepcos-society">
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <!-- <a href="#" class="btn btn-dark">View More Items</a> -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
    <!-- Projects -->
    <section id="projects" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Projects</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post3">
                            <div class="portfolio-item">
                                <a href="http://youtu.be/MIMlmdFj918">
                                    <img class="img-portfolio img-responsive" src="img/UpAlarm.png" alt="Android Application UpAlarm">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post4">
                            <div class="portfolio-item">
                            <h3><a href="pdfs/UpAlarm.pdf" >UpAlarm: Reducing a Sedentary Lifestyle by Encouraging Standing Up and Exercising</a></h3>
                            <h3>Android Application - Ubiquitous Computing</h3>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post3">
                            <div class="portfolio-item">
                                <a href="PassportPower/index.html">
                                    <img class="img-portfolio img-responsive" src="img/passport.png" alt="Passport Power">
                                </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post4">
                            <div class="portfolio-item">
                            <h3><a href="https://github.com/stephaniewang526/Passport-Power" >D3 data visualization</a></h3>
                            <h3>See how many countries you can travel to with your passport!</h3>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    <!-- /.row (nested) -->
                    <!-- <a href="#" class="btn btn-dark">View More Items</a> -->
            </div>
                <!-- /.col-lg-10 -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action-->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="post1">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Where do I come from and where do I live now?</h3>
                    <p class="lead">"Stephanie comes from <b>Beijing</b>, studied in <b>Singapore</b>, lived in <b>St. Louis</b> and now lives in <b>Ithaca, NY.</b>"</p>
                    <h3>I am and always strive to be a <strong>global citizen</strong>.</h3>
                </div>
            </div>
            </div>
        </div>
    </aside>
    
    <!-- Map -->
    <div id="map"></div>
	
    <script>
        d3.json("cleandata.json", function (error, data){
            var numbers = data;
            
	    var width = document.getElementById('map').offsetWidth;
            var height = width / 2;
	    
            var projection,path,svg,g;
            var graticule = d3.geo.graticule();
            var tooltip = d3.select("#map").append("div").attr("class", "tooltip hidden");
            var mapfillcolor = "#CCC";
            var mapstrokecolor = "#FFF";
            
	    setup(width,height);

            function setup(width,height){
                projection = d3.geo.mercator()
                  .translate([0, 0])
                  .scale(width / 2 / Math.PI);
    
                path = d3.geo.path()
                    .projection(projection);
    
                svg = d3.select("#map").append("svg")
                    .attr("width", width)
                    .attr("height", height)
                    .append("g")
                    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
    
                g = svg.append("g");
            }
	    
            function getCountryname(code) {
                for (var i = 0; i < numbers.length; i++){
                  if (numbers[i].iso3_digit_code == code){
                    return numbers[i].country_name;
                  }

            }
                return "Unknown";
            }

	    var worldData;
	    
	    d3.json("world-topo.json", function(error, world) {
		worldData = world;
		
		// Use topojson to create an array containing one object per country.
		var countries = topojson.feature(world, world.objects.countries).features;
                topo = countries;
                draw(topo);
                
                // Ithaca
		var ithacaCoords = projection([-76, 42]);
		
		svg.append("circle")
		.attr("cx", ithacaCoords[0])
		.attr("cy", ithacaCoords[1])
		.attr("r", 5)
		.attr("fill", "red");
		
		svg.append("text")
		.attr("x", ithacaCoords[0] + 10)
		.attr("y", ithacaCoords[1])
		.text("Ithaca")
		.attr("fill", "red")
		
		// Beijing
		var beijingCoords = projection([116, 40]);
		
		svg.append("circle")
		.attr("cx", beijingCoords[0])
		.attr("cy", beijingCoords[1])
		.attr("r", 5)
		.attr("fill", "#6B9362");
		
		svg.append("text")
		.attr("x", beijingCoords[0] + 10)
		.attr("y", beijingCoords[1])
		.text("Beijing")
		.attr("fill", "#6B9362");
		
		// Singapore
		var singaporeCoords = projection([104, 1.3]);
		
		svg.append("circle")
		.attr("cx", singaporeCoords[0])
		.attr("cy", singaporeCoords[1])
		.attr("r", 5)
		.attr("fill", "#6B9362");
		
		svg.append("text")
		.attr("x", singaporeCoords[0] + 10)
		.attr("y", singaporeCoords[1])
		.text("Singapore")
		.attr("fill", "#6B9362");
                
                // St. Louis
		var stlouisCoords = projection([-90, 38.6]);
		
		svg.append("circle")
		.attr("cx", stlouisCoords[0])
		.attr("cy", stlouisCoords[1])
		.attr("r", 5)
		.attr("fill", "#6B9362");
		
		svg.append("text")
		.attr("x", stlouisCoords[0] + 10)
		.attr("y", stlouisCoords[1])
		.text("St. Louis")
		.attr("fill", "#6B9362");
            });
                
                var colorCountry = function (de, topo){

                d3.json("cleandata.json", function (error1, data1){
                    var selectedCountry = g.selectAll(".country").data(topo);

                    selectedCountry.style("fill", function (d) {
                        if (d.id == de.id){
                          return "#F3F315";
                        }
                        return mapfillcolor;
                        });

                     });
                 };
                
                function draw(topo) {
                svg.append("path")
                .datum(graticule)
                .attr("class", "graticule")
                .attr("d", path);
    
                g.append("path")
                .datum({type: "LineString", coordinates: [[-180, 0], [-90, 0], [0, 0], [90, 0], [180, 0]]})
                .attr("class", "equator")
                .attr("d", path);
    
    
                var country = g.selectAll(".country").data(topo);
    
                country.enter().insert("path")
                    .attr("class", "country")
                    .attr("d", path)
                    .style("fill", function (d) {return mapfillcolor})
                    .style("stroke", mapstrokecolor);
    
                    //ofsets plus width/height of transform, plsu 20 px of padding, plus 20 extra for tooltip offset off mouse
                    var offsetL = document.getElementById('map').offsetLeft+(width/2)+40;
                    var offsetT =document.getElementById('map').offsetTop+(height/2)+20;
    
                    //tooltips
                    country
                      .on("mouseover", function(d,i) {
                        var mouse = d3.mouse(svg.node()).map( function(d) { return parseInt(d); } );
                          tooltip
                            .classed("hidden", false)
                            .attr("style", "left:"+(mouse[0]+offsetL)+"px;top:"+(mouse[1]+offsetT)+"px")
                            .html(getCountryname(d.id))
                        })
                        .on("mouseout", function(d,i) {
                          tooltip.classed("hidden", true)
                        });
                    country
                        .on("click", function(d,i) {
                          var mouse = d3.mouse(svg.node()).map( function(d) { return parseInt(d); } );
                          colorCountry(d, topo);
                        });
                }
    
                function redraw() {
                width = document.getElementById('map').offsetWidth-60;
                height = width / 2;
                d3.select('svg').remove();
                setup(width,height);
                draw(topo);
                }
        });
    </script>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="post1">
            <div class="row">
                <div id="contact" class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Stephanie Qian Wang</strong>
                    </h4>
                    <p>G421 Martha Van Rensselaer Hall, East<br>Ithaca, NY 14850</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (314) 616-9905</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:qw79@cornell.edu">qw79@cornell.edu</a>
                        </li>
                    </ul>
                    <br>
                    
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/stephanieqianwang">
                                <div class="post6"><i class="fa fa-facebook fa-fw fa-3x"></i></div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://www.linkedin.com/profile/view?id=109604344&trk=nav_responsive_tab_profile_pic">
                                <div class="post6"><i class="fa fa-linkedin fa-fw fa-3x"></i></div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="https://plus.google.com/u/1/">
                                <div class="post6"><i class="fa fa-google-plus fa-fw fa-3x"></i></div>
                            </a>
                        </li>
                    </ul>
                    
                    <hr class="small">
                             <!-- Place this tag where you want the +1 button to render. -->
                            <div data-annotation="inline" data-width="300"></div>
                    <p class="text-muted">Copyright &copy; 2015 Stephanie Qian Wang | All Rights Reserved</p>
                    <a href= "https://plus.google.com/u/0/"></a>
                </div>
            </div>
            </div>
        </div>
    </footer>
 
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
    <script src="js/viewportchecker.js"></script> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
                jQuery('.post').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated shake',
                    offset: 100    
                   });   
        });
        
        jQuery(document).ready(function() {
                jQuery('.post1').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated fadeInUp',
                    offset: 100    
                   });   
        });
        
        jQuery(document).ready(function() {
                jQuery('.post2').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated flipInX',
                    offset: 100    
                   });   
        });
        
        jQuery(document).ready(function() {
                jQuery('.post3').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated bounceInLeft',
                    offset: 100    
                   });   
        });
        
        jQuery(document).ready(function() {
                jQuery('.post4').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated bounceInRight',
                    offset: 100    
                   });   
        });
        
        jQuery(document).ready(function() {
                jQuery('.post5').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated fadeInLeft',
                    offset: 100    
                   });   
        });
        
        jQuery(document).ready(function() {
                jQuery('.post6').addClass("hidden1").viewportChecker({
                    classToAdd: 'visible animated rotateIn',
                    offset: 100    
                   });   
        });
    </script>
    
    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
</body>

</html>

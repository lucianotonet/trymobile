<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="@tonetlds">    

    <title>TRY MOBILE.</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!--[if IE 8]><link rel='stylesheet' media='screen' href='/css/ie8.css?v=201403261325' type='text/css' /><![endif]-->
    <link rel="stylesheet" media="screen" href="css/real.css">

    <!-- <link rel="stylesheet" media="screen" href="css/perfect-scrollbar.min.css">    -->
    <link rel="stylesheet" media="screen" href="css/main.css">

   <link rel="stylesheet" media="screen" href="css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">





    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<?php if ( !isset($_GET['url']) ) { ?>
<a href="https://github.com/tonetlds/trymobile"><img style="position: absolute; top: 0; right: 0; border: 0;" src="http://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
<?php } ?>

    <div class="site-wrapper">

        <div class="site-wrapper-inner">

            <div class="cover-container">

                <div class="row cta">
                    <form action="index.php" method="get" id="url_form">
                        
                        <div class="col-md-12">
                           
                           <?php 
                              if ( !isset($_GET['url']) ) { 
                                 $url = "bahs.com";
                           ?>
                              <span class="camera_caption">
                                    <h2>TRY MOBILE.</h2>
                                    <p>Apresente projetos responsivos ao seu cliente rapidamente.
                                       <br>
                                       <!--   ( Mesmo eles não entendendo nada. ) -->
                                       <div class="roles">
                                          <div>Mesmo não dispondo de dispositivos.</div>
                                          <div>Mesmo à distância.</div>
                                          <div>Mesmo que ele não entenda nada.</div>
                                       </div>
                                    </p>
                               </span>
                              <div class="fr">
                                   <div style="display: inline-block;">
                                       <span class="addon">
                                           http://
                                       </span>
                                       <input class="col-md-6 fEmail tip-bottom" name="url" id="url" placeholder="Digite o URL..." data-placement="bottom" data-toggle="tooltip" data-original-title='Localhost também funciona!' value="">
                                       <a href="#" class="subS" onclick="reloadFrames()"> <!-- onclick="getElementById('url_form').submit()" -->
                                           <span class="glyphicon glyphicon-share-alt"></span>
                                           <span class="glyphicon glyphicon-phone"></span>
                                       </a>
                                   </div>
                               </div>


                           <?php }else{
                                    $url = @$_GET['url'];
                                 } ?>
                           

                        </div>
                    </form>
                </div>

                

            </div>

        </div>

    </div>

   <div class="clearfix"></div>

    <section id='devices'>


        <div class="container-fluid">
            <div class='iphone-5-portrait'>
                <div class="device zoom">

                    <iframe class="touch" src='http://<?php echo @$url ?>' id='iphone-5-portrait'></iframe>

                </div>
            </div>
        </div>


        &nbsp;


        <div class="container-fluid">
            <div class='iphone-5-landscape'>
                <div class="zoom device">
                    <iframe class="touch" src='http://<?php echo @$url ?>' id='iphone-5-landscape'></iframe>
                </div>
            </div>
        </div>


        &nbsp;


        <div class="container-fluid">
            <div class='ipad-portrait'>

                <div class='device zoom'>
                    <iframe class="touch" src='http://<?php echo @$url ?>' id='ipad-portrait'></iframe>
                </div>

            </div>
        </div>


        &nbsp;


        <div class="container-fluid">
            <div class='ipad-landscape'>

                <div class='device zoom'>
                    <iframe class="touch" src='http://<?php echo @$url ?>' id='ipad-landscape'></iframe>
                </div>

            </div>
        </div>

   

    </section>


   <?php if ( isset($_GET['url']) && !empty($_GET['url']) ) { ?>
   <div class="container">
   
   </div>
   <?php }else{ ?>   

      <div class="container share_link">
         <p>Envie este link para o cliente</p>
         <span class="glyphicon glyphicon-arrow-down"></span>
         <div class="text-center well">
            <a href="#" target="_new"><?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?></a>
         </div>
      </div>

   <?php } ?>


   &nbsp;

   <div class="navbar-footer navbar-inverse">
      <div class="inner">
         <p><a href="?">Try Mobile</a>. Feito com <a href="http://getbootstrap.com">Bootstrap</a>, <a href="http://laravel.com">Laravel</a> e <a>Café</a> por <a href="https://github.com/tonetlds">@tonetlds</a>.</p>
      </div>
   </div>





   <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
    
     
   <script src="js/iscroll.js"></script>

   <!-- <script src="js/screenshot.js"></script> -->

    <!-- <script type='text/javascript' src='js/script.min.js'></script> -->
    <script src="js/zoom.js"></script>
    <script>

    </script>

    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript">
    </script>


    <script>
    $(document).ready(function() {

  
        $(".tip-bottom").tooltip({
            placement: 'bottom'
        });


        $('.share_link').slideUp();
        $('input#url').on('change', function() {

            var url = $(this).val();

            //console.log(url);


            if (url == '') {               
               $('.share_link').slideUp();
            }else{
               //console.log(url);
               $('iframe').attr('src', 'http://'+url);

               $('.share_link a').attr('href', 'http://<?php echo @$_SERVER[HTTP_HOST].@$_SERVER[REQUEST_URI]?>?url='+url ).text('<?php echo @$_SERVER[HTTP_HOST].@$_SERVER[REQUEST_URI] ?>?url='+url);
               $('.share_link').slideDown();
            }
           
        });

         //ZOOM
         $('iframe').on('mouseover', function( event ) {
            event.preventDefault();
            console.log(event.target);
            zoom.to({ element: event.target });            
           
         });
         $('iframe').on('mouseout', function( event ) {
            zoom.out();
         });


         //ZOOM no input :FOCUS
         $('input#url').on('focus', function( event ) {
            event.preventDefault();
            console.log(event.target);
            zoom.to({ element: event.target });            
           
         });
         $('input#url').on('focusout', function( event ) {
            zoom.out();
         });







        //ROLES
        var current = 1; 
        var height = $('.roles').height(); 
        var numberDivs = $('.roles').children().length; 
        var first = $('.roles').find('div:nth-child(1)'); 
        setInterval(function() {
            var number = current * -height;
            first.css('margin-top', number + 'px');
            if (current === numberDivs) {
                first.css('margin-top', '0px');
                current = 1;
            } else current++;
        }, 3000);


    });
    </script>

    <script>
      var reloadFrames = function(){

            var url = $('input#url').val();

            if (url == '') {               
               $('.share_link').slideUp();
            }else{
               //console.log(url);
               $('iframe').attr('src', 'http://'+url);

               $('.share_link a').attr('href', 'http://<?php echo @$_SERVER[HTTP_HOST].@$_SERVER[REQUEST_URI]?>/?url='+url ).text('<?php echo @$_SERVER[HTTP_HOST].@$_SERVER[REQUEST_URI] ?>url='+url);
               $('.share_link').slideDown();
            }
           
      }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>        
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/sorting.js" type="text/javascript"></script>
    <script src="js/jquery.isotope.js" type="text/javascript"></script>

   <script src="js/css-beziers.js"></script>
   <script src="js/touchscroll.min.js"></script>
   <script>
       var scroller = new TouchScroll(document.querySelector("iframe"));
   </script>


</body>

</html>

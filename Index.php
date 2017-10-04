
<?php
   

    session_start();

    if (!isset($_SESSION["carrello"])) {
      $_SESSION["carrello"]="";
    }

   

    if ($_SESSION["carrello"]=="") {
      $carrello=array();
    } else {
      $carrello=explode(" ",trim($_SESSION["carrello"]));
      $carrello=array_unique($carrello);
    }

 
   ?>

<!DOCTYPE html>
<html lang="it">
    
    
  <head>
    <!-- Required meta tags -->
    <title>Crisiplastica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400" rel="stylesheet">
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/crisiplastica_s.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
      <script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
   $("a.thumb").fancybox();
</script>
    
      <style type="text/css">
          #art_shop{width: 20%;}
      </style>
    
</head>
    
    
    
  <body style="height:100%;">
      
        <script>
            jQuery(document).ready(function ($) {
            $(window).stellar();
            });
        </script>
      
      
<!-- Barra di navigazione -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <img src="Images/logoCrisiplastica.png" height="30" alt="logo-crisiplastica">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Lavori</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#anatomia">Anatomia</a>
                        <a class="dropdown-item" href="#life_casting">Life Casting</a>
                        <a class="dropdown-item" href="#tattoo">Tattoo &amp; Piercing Supplies</a>
                        <a class="dropdown-item" href="#mask">Maschere, Costumi e Sfx</a>
                        <a class="dropdown-item" href="#creature">Creature</a>
                        <a class="dropdown-item" href="#arredo">Arredo</a>
                        <a class="dropdown-item" href="#sceno">Scenografie</a>
                        <a class="dropdown-item" href="#food">Food Mock-UP</a>
                        <a class="dropdown-item" href="#props">Props</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#art_work">Shop</a>
                    </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#bio">Biografia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contatti">Contatti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registrati.php">Registrati</a>
            </li>
        </ul>
          <form class="form-inline" role="search" action="ricerca.php" method="post">
            <input name="ricerca" class="form-control mr-sm-2" id="search" type="text" placeholder="Cerca" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 search_btn" type="submit"><img src="Images/schifanella/search.png" height="25" alt="search_logo"></button>
              
              
              
              
        </form>
            <!--<button class="btn btn-outline-success my-2 my-sm-0 search_btn"><img src="Images/schifanella/carrello.png" height="25" alt="logocarrello" href="login.php">-->
           <a href="login.php">Carrello</a>
        </div>
    </nav>
<!-- Fine Barra di navigazione --> 
 
<!-- fascia testo + video -->
      <header id="contenitore" class="container-fluid">
          
            <div id="immagine1" class="s_grande" data-stellar-background-ratio="0.5">
                <img id="logo-cp-grande" src="Images/logoCrisiplastica(grande).png" alt="logo-crisiplastica">
            </div>
            <div id="immagine1" class="s_piccolo">
                <img id="logo-cp-grande" src="Images/logoCrisiplastica(grande).png" alt="logo-crisiplastica">
            </div>
            <div id="immagine1" class="s_mobile">
                <img id="logo-cp-grande" src="Images/logoCrisiplastica(grande).png" alt="logo-crisiplastica">
            </div>
          
            <div class="container" id="sottopancia">
                <div class="row">
                    <div class="col" id="testo_sottop" style="border:0px solid blue;">   
                        Realizziamo sculture, maschere, articoli plastici, calchi dal vivo, accesori per costumi, riproduzioni di cibo finto, calchi dal vivo, effetti speciali di trucco, anatomie, scenografie, oggetti di scena e molto altro. 
                        Tutto attraverso una produzione di fine artigianato.
                    </div>
                    <div class="col"  id="video_box" style="border:0px solid blue; padding-left: 25px;">
                        <div class="video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/yHksubEm4Cc" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
      </header>
<!-- fine fascia testo + video -->
      
<!-- lavori -->     
     <main>
        
        <a name="anatomia"></a> 
        <div class="lavori container-fluid">
            
            <div class="img_lavori_sx s_grande"  id="img_lavori_anatomia" data-stellar-background-ratio="0.5">
                <div class="lavori_titolo">ANATOMIA</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_anatomia" style="background: transparent;">GALLERIA</button>
                </div> 
            </div>
            <div class="img_lavori_sx s_piccolo"  id="img_lavori_anatomia">
                <div class="lavori_titolo">ANATOMIA</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_anatomia" style="background: transparent;">GALLERIA</button>
                </div> 
            </div>
            <div class="img_lavori_sx s_mobile"  id="img_lavori_anatomia">
                <div class="lavori_titolo">ANATOMIA</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="collapse" data-target="#collapse_anatomia" style="background: transparent;" aria-expanded="false" aria-controls="collapse_anatomia">INFO</button>
                </div> 
            </div>
            
            <div class="collapse" id="collapse_anatomia">
                <div class="card card-body" style="background-color:#EFE6E9">
                   <div class="testo1">
                        <p align="center">
                            Ritratti umani con effetti visivi e sensazioni tattili di grande realismo
                        </p>
                    </div>
                    <div class="testo2">
                        <p align="center">
                            Le riproduzioni anatomiche derivano dall’osservazione delle forme naturali, umane e animali   riprodotte in modelli iper-realistici che possono trovare impiego nella didattica, nel campo della prostetica medico chirurgica, in campo artistico o museale, nel cinema o nella pubblicità.<br>
                            Per ottenere un effetto di grande realismo viene utilizzata la tecnica del calco dal vivo con una particolare attenzione alla scelta dei materiali.
                        </p>
                    </div>
                </div>
            </div>
            
            
            <div class="testo_lavori_dx">
                <div class="testo1">
                    <p align="center">
                        Ritratti umani con effetti visivi e sensazioni tattili di grande realismo
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Le riproduzioni anatomiche derivano dall’osservazione delle forme naturali, umane e animali   riprodotte in modelli iper-realistici che possono trovare impiego nella didattica, nel campo della prostetica medico chirurgica, in campo artistico o museale, nel cinema o nella pubblicità.<br>
                        Per ottenere un effetto di grande realismo viene utilizzata la tecnica del calco dal vivo con una particolare attenzione alla scelta dei materiali.
                    </p>
                </div>
            </div>
        </div>
         
         
         
         
         
         
        <a name="life_casting"></a> 
        <div class="lavori container-fluid">
            <div class="img_lavori_dx s_grande"  id="img_lavori_lifecasting" data-stellar-background-ratio="0.5">
                <div class="lavori_titolo">LIFE<br />CASTING</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_life_casting" style="background: transparent;">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_dx s_piccolo"  id="img_lavori_lifecasting">
                <div class="lavori_titolo">LIFE<br />CASTING</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_life_casting" style="background: transparent;">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_dx s_mobile"  id="img_lavori_lifecasting">
                <div class="lavori_titolo">LIFE<br />CASTING</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="collapse" data-target="#collapse_life_casting" style="background: transparent;" aria-expanded="false" aria-controls="collapse_life_casting">INFO</button>
                </div> 
            </div>
            
            <div class="collapse" id="collapse_life_casting">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                    <div class="testo2">
                        <p align="center">
                            Tecnica usata per fare uno stampo del corpo (calco dal vivo) realizzata attraverso l’uso di materiali anallergici in ambiente professionale, con l’aiuto di un equipe esperta. Riproduce fedelmente ogni caratteristica, dai tratti fisiognomici fino alla texture piu minuziosa della pelle e rappresenta una vera e propria fotografia  tridimensionale. <br /> I materiali da noi utilizzati sono l'Alginato e il Silicone al platino.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="testo_lavori_sx"> 
                <div class="testo2">
                    <p align="center">
                      Tecnica usata per fare uno stampo del corpo (calco dal vivo) realizzata attraverso l’uso di materiali anallergici in ambiente professionale, con l’aiuto di un equipe esperta. Riproduce fedelmente ogni caratteristica, dai tratti fisiognomici fino alla texture piu minuziosa della pelle e rappresenta una vera e propria fotografia tridimensionale. <br /> I materiali da noi utilizzati sono l'Alginato e il Silicone al platino.
                    </p>
                </div>
            </div>
        </div>
         
         
         
         
         
        <a name="tattoo"></a>  
        <div class="lavori container-fluid">
            <div class="img_lavori_sx s_grande"  id="img_lavori_tattoo" data-stellar-background-ratio="0.5">
                <div class="lavori_titolo" style="color:#FFFFFF">TATTOO &amp;<br /> PIERCING </div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_tattoo" style="background: transparent; color:#FFFFFF;">GALLERIA</button>
                </div>       
            </div>
            <div class="img_lavori_sx s_piccolo"  id="img_lavori_tattoo">
                <div class="lavori_titolo" style="color:#FFFFFF">TATTOO &amp; <br /> PIERCING </div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_tattoo" style="background: transparent; color:#FFFFFF">GALLERIA</button>
                </div>    
            </div>
            <div class="img_lavori_sx s_mobile"  id="img_lavori_tattoo">
                <div class="lavori_titolo" style="color:#FFFFFF">TATTOO &amp; <br /> PIERCING </div>
                <div class="galleria">
                    <button type="button" style="background: transparent; color:#FFFFFF;" class="galleria" data-toggle="collapse" data-target="#collapse_tattoo" aria-expanded="false" aria-controls="collapse_tattoo">INFO</button>
                </div>    
            </div>
        
            <div class="collapse" id="collapse_tattoo">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                <div class="testo1">
                    <p align="center">
                        Supporti in silicone <br /> per artisti tatuatori e piercer
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Grazie alla riproduzione iper-realistica della pelle umana, la scultura della pelle trova impiego nell’ambito del tatuaggio, in quanto il materiale, grazie al suo colore traslucido, la sua compattezza ed elasticità si presta ad essere tatuato e bucato, restituendo il medesimo effetto che si ottiene sulla pelle umana.
                        I differenti supporti a base di gomma siliconica sono ideali per replicare l'esperienza del tatuaggio/piercing sia per l'apprendista tatuatore, sia per artisti con esperienza che possono mostrare la loro abilità esponendo il proprio lavoro su di un mezzo originale e personalizzato.  
                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_dx">
                <div class="testo1">
                    <p align="center">
                        Supporti in silicone <br /> per artisti tatuatori e piercer
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Grazie alla riproduzione iper-realistica della pelle umana, la scultura della pelle trova impiego nell’ambito del tatuaggio, in quanto il materiale, grazie al suo colore traslucido, la sua compattezza ed elasticità si presta ad essere tatuato e bucato, restituendo il medesimo effetto che si ottiene sulla pelle umana.
                        I differenti supporti a base di gomma siliconica sono ideali per replicare l'esperienza del tatuaggio/piercing sia per l'apprendista tatuatore, sia per artisti con esperienza che possono mostrare la loro abilità esponendo il proprio lavoro su di un mezzo originale e personalizzato.  
                    </p>
                </div>
            </div>
        </div>
         
           
         
         
        <a name="mask"></a>   
        <div class="lavori container-fluid">
            <div class="img_lavori_dx s_grande"  id="img_lavori_mask" data-stellar-background-ratio="0.5">
                <div class="lavori_titolo" style="padding-top:115px;">MASCHERE<br />COSTUMI<br />SFX</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_mask" style="background: transparent;">GALLERIA</button>
                </div>  
            </div>
            <div class="img_lavori_dx s_piccolo"  id="img_lavori_mask">
                <div class="lavori_titolo" style="padding-top:115px;">MASCHERE<br />COSTUMI<br />SFX</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_mask" style="background: transparent;">GALLERIA</button>
                </div>  
            </div>
            <div class="img_lavori_dx s_mobile"  id="img_lavori_mask">
                <div class="lavori_titolo" style="color:#FFFFFF">MASCHERE<br />SFX</div>
                <div class="galleria">
                    <button type="button" style="background: transparent; color:#FFFFFF;" class="galleria" data-toggle="collapse" data-target="#collapse_mask" aria-expanded="false" aria-controls="collapse_mask">INFO</button>
                </div>   
            </div>
            
            <div class="collapse" id="collapse_mask">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                <div class="testo1">
                    <p align="center">
                        Maschere, costumi, accessori <br /> ed altri effetti speciali
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Realizziamo maschere per teatro, cinema e Cosplay L'utilizzo dei materiali anallergici ed ergonomici produce maschere morbide ma realizziamo anche versioni rigide a seconda del tipo di realizzazione e uso. Realizziamo inoltre costumi, effetti fisici adattabili al corpo o altri effetti speciali di trucco prostetico come ad esempio ferite, modificazioni corporali o ibridazioni con creature fantastiche

                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_sx">
                <div class="testo1">
                    <p align="center">
                        Maschere, costumi, accessori <br /> ed altri effetti speciali
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Realizziamo maschere per teatro, cinema e Cosplay L'utilizzo dei materiali anallergici ed ergonomici produce maschere morbide ma realizziamo anche versioni rigide a seconda del tipo di realizzazione e uso. Realizziamo inoltre costumi, effetti fisici adattabili al corpo o altri effetti speciali di trucco prostetico come ad esempio ferite, modificazioni corporali o ibridazioni con creature fantastiche

                    </p>
                </div>
            </div>
        </div>
        
         
         
         
         
        <a name="creature"></a>   
        <div class="lavori container-fluid">
            <div class="img_lavori_sx s_grande"  id="img_lavori_creature" data-stellar-background-ratio="0.5">
                <div class="lavori_titolo">CREATURE</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_creature" style="background: transparent;">GALLERIA</button>
                </div>     
            </div>
            <div class="img_lavori_sx s_piccolo"  id="img_lavori_creature">
                <div class="lavori_titolo">CREATURE</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_creature" style="background: transparent;">GALLERIA</button>
                </div> 
            </div>
            <div class="img_lavori_sx s_mobile"  id="img_lavori_creature">
                <div class="lavori_titolo" style="color:#FFFFFF">CREATURE</div>
                <div class="galleria">
                    <button type="button" style="background: transparent; color:#FFFFFF;" class="galleria" data-toggle="collapse" data-target="#collapse_creature" aria-expanded="false" aria-controls="collapse_creature">INFO</button>
                </div>
            </div>
            
            <div class="collapse" id="collapse_creature">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                <div class="testo1">
                    <p align="center">
                        Sculture, interpretazioni o riproduzioni di personaggi fantastici e creature reali
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Riproduzioni di figure umanoidi, personaggi fantastici, mostri, alieni, zombie, animali per il cinema, il teatro, la televisione o per le wunderkammer dei collezionisti di stramberie e rarità.
                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_dx">
                <div class="testo1">
                    <p align="center">
                        Sculture, interpretazioni o riproduzioni di personaggi fantastici e creature reali
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Riproduzioni di figure umanoidi, personaggi fantastici, mostri, alieni, zombie, animali per il cinema, il teatro, la televisione o per le wunderkammer dei collezionisti di stramberie e rarità.
                    </p>
                </div>
            </div>
        </div>
         
         
        
         
         
        <a name="arredo"></a>  
        <div class="lavori container-fluid">
            <div class="img_lavori_dx s_grande"  id="img_lavori_arredo" data-stellar-background-ratio="0.5">
                <div class="lavori_titolo" style="color:#FFFFFF">ARREDO</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_arredo" style="background: transparent; color:#FFFFFF">GALLERIA</button>
                </div> 
            </div>
            <div class="img_lavori_dx s_piccolo"  id="img_lavori_arredo">
                <div class="lavori_titolo" style="color:#FFFFFF">ARREDO</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_arredo" style="background: transparent; color:#FFFFFF">GALLERIA</button>
                </div> 
            </div>
            <div class="img_lavori_dx s_mobile"  id="img_lavori_arredo">
                <div class="lavori_titolo" style="color:#FFFFFF">ARREDO</div>
                <div class="galleria">
                    <button type="button" style="background: transparent; color:#FFFFFF;" class="galleria" data-toggle="collapse" data-target="#collapse_arredo" aria-expanded="false" aria-controls="collapse_arredo">INFO</button>
                </div>
            </div>
            
            <div class="collapse" id="collapse_arredo">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                 <div class="testo1">
                    <p align="center">
                       Articoli di arredo e pezzi unici
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Particolari d’arredo, componenti ed accessori di nostra creazione o su vostro suggerimento ambientati nel mondo Crisiplastica, fatto di surrealismo, sogno perturbante e carne.
                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_sx"> 
                <div class="testo1">
                    <p align="center">
                       Articoli di arredo e pezzi unici
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Particolari d’arredo, componenti ed accessori di nostra creazione o su vostro suggerimento ambientati nel mondo Crisiplastica, fatto di surrealismo, sogno perturbante e carne.
                    </p>
                </div>
            </div>
        </div>
         
         
         
         
        <a name="sceno"></a>   
        <div class="lavori container-fluid">
            <div class="img_lavori_sx s_grande"  id="img_lavori_scenografie" data-stellar-background-ratio="0.5" >
                <div class="lavori_titolo" style="color:#FFFFFF">SCENO-<br />GRAFIE</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_sceno" style="background: transparent; color:#FFFFFF">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_sx s_piccolo"  id="img_lavori_scenografie">
                <div class="lavori_titolo" style="color:#FFFFFF">SCENO-<br />GRAFIE</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_sceno" style="background: transparent; color:#FFFFFF">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_sx s_mobile"  id="img_lavori_scenografie">
                <div class="lavori_titolo" style="color:#FFFFFF">SCENO-<br />GRAFIE</div>
                <div class="galleria">
                    <button type="button" style="background: transparent; color:#FFFFFF;" class="galleria" data-toggle="collapse" data-target="#collapse_sceno" aria-expanded="false" aria-controls="collapse_sceno">INFO</button>
                </div>
            </div>
            
            <div class="collapse" id="collapse_sceno">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                <div class="testo1">
                    <p align="center">
                        Scenografie, allestimenti, plastici <br /> e altre ambientazioni
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Progettiamo scenografie, allestimenti scenici, effetti murali e di superficie o ambientazioni di vario genere. 
                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_dx">
                <div class="testo1">
                    <p align="center">
                        Scenografie, allestimenti, plastici <br /> e altre ambientazioni
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Progettiamo scenografie, allestimenti scenici, effetti murali e di superficie o ambientazioni di vario genere. 
                    </p>
                </div>
            </div>
        </div>
         
         
         
         
        <a name="food"></a>   
        <div class="lavori container-fluid">
            <div class="img_lavori_dx s_grande"  id="img_lavori_food" data-stellar-background-ratio="0.5">
               <div class="lavori_titolo">FOOD<br />MOCK-UP</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_food" style="background: transparent;">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_dx s_piccolo"  id="img_lavori_food">
                <div class="lavori_titolo">FOOD<br />MOCK-UP</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_food" style="background: transparent;">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_dx s_mobile"  id="img_lavori_food">
                <div class="lavori_titolo" style="color:#FFFFFF">FOOD<br />MOCK-UP</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="collapse" data-target="#collapse_food" style="background: transparent; color:#FFFFFF" aria-expanded="false" aria-controls="collapse_food">INFO</button>
                </div>
            </div>
            
             <div class="collapse" id="collapse_food">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                <div class="testo1">
                    <p align="center">
                        Riproduzioni plastiche di cibi e bevande
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Il food mock up è impiegato per illustrare cibi, bevande e piatti per l’esposizione, la vetrinistica o la pubblicità. Riprodotti fedelmente nella loro forma e colore, resistenti alla luce, alla variazione della temperatura e al deterioramento fisico, questi modelli sono utili all'esigenza di creare appetito attraverso uno stimolo visivo. <br /><br />
                        Progettiamo sculture giganti per truck food, allestimenti e sculture culinarie e riproduciamo piatti molto realistici.
                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_sx">
                <div class="testo1">
                    <p align="center">
                        Riproduzioni plastiche di cibi e bevande
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Il food mock up è impiegato per illustrare cibi, bevande e piatti per l’esposizione, la vetrinistica o la pubblicità. Riprodotti fedelmente nella loro forma e colore, resistenti alla luce, alla variazione della temperatura e al deterioramento fisico, questi modelli sono utili all'esigenza di creare appetito attraverso uno stimolo visivo. <br /><br />
                        Progettiamo sculture giganti per truck food, allestimenti e sculture culinarie e riproduciamo piatti molto realistici.
                    </p>
                </div>
            </div>
        </div>
        
         
         
         
        <a name="props"></a>   
        <div class="lavori container-fluid">
            <div class="img_lavori_sx s_grande"  id="img_lavori_props" data-stellar-background-ratio="0.5">
                 <div class="lavori_titolo">PROPS</div>
                 <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_props" style="background: transparent;">GALLERIA</button>
                 </div>
            </div>
            <div class="img_lavori_sx s_piccolo"  id="img_lavori_props">
                <div class="lavori_titolo">PROPS</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="modal" data-target=".slide_props" style="background: transparent;">GALLERIA</button>
                </div>
            </div>
            <div class="img_lavori_sx s_mobile"  id="img_lavori_props">
                <div class="lavori_titolo">PROPS</div>
                <div class="galleria">
                    <button type="button" class="galleria" data-toggle="collapse" data-target="#collapse_props" style="background: transparent;" aria-expanded="false" aria-controls="collapse_props">INFO</button>
                </div>
            </div>
            
            <div class="collapse" id="collapse_props">
                <div class="card card-body" style="background-color:#EFE6E9"> 
                <div class="testo1">
                    <p align="center">
                        Oggetti di scena
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Materiale di scena o riproduzione di oggetti, necessari per allestire un set o una scenografia teatrale
                        Realizziamo ex novo materiale non disponibile tipo storico e/o di fantasia secondo disegni e progetti ben definiti o oggetti specifici per ogni tipo di contesto scenico 
                    </p>
                </div>
                </div>
            </div>
            
            <div class="testo_lavori_dx">
                <div class="testo1">
                    <p align="center">
                        Oggetti di scena
                    </p>
                </div>
                <div class="testo2">
                    <p align="center">
                        Materiale di scena o riproduzione di oggetti, necessari per allestire un set o una scenografia teatrale
                        Realizziamo ex novo materiale non disponibile tipo storico e/o di fantasia secondo disegni e progetti ben definiti o oggetti specifici per ogni tipo di contesto scenico 
                    </p>
                </div>
            </div>
        </div>
         
      
<!-- fine lavori -->

<!-- biografia -->
         
        <a name="bio"></a> 
        <div id="biografia" class="container-fluid">
            <div class="container" id="biografia">
                <div class="row">
                    <div class="col" id="titolo_biografia" style=" border:0px solid red;">
                        Biografia
                    </div>
                </div>
                <div class="row">
                    <div class="col" id="bio_testo">
                        <p>
                        Cristina Accettulli è un'artigiana creativa, da sempre innamorata del grottesco e del surreale. Dopo il diploma come tecnico della costruzione di scenografie teatrali e cinematografiche alle Scuole S. Carlo di Torino, lavora al fianco di un noto creatore d'effetti speciali, realizzando articoli plastici per numerosi artisti nternazionali, il cinema, il teatro e l'arte contemporanea .
                        Specializzata nel plasmare la materia, sperimentatrice di materiali speciali come resine, poliuretani espansi, cere, gesso, gomme siliconiche e lattice applicati alla scultura. I suoi lavori sono richiesti da registi, attori, prototype designers, videomakers e fotografi. Attualmente opera nel suo laboratorio di Torino, spazio creativo aperto alle collaborazioni con numerosi artisti.</p>
                    </div>
                    <div class="col" id="bio_cont_foto">
                        <img id="bio_foto" src="Images/biografia2.jpg" alt="foto_crisiplastica_bio">
                    </div>
                </div>
            </div>
        </div>
      
      
<!-- fine biografia -->
         
<!-- art-work -->
        
        <a name="art_work"></a>   

        <div class="container-fluid" id="art-work">
                <div>
        <?php
      
         include('dbConfig.php');
       
                  // ho provato a fare diverse gallerie per tutte le sezioni della home
                  //MA: punto primo si caricano lentissimamente
                  //punto secondo sbaglio qualcosa nelle funzioni e le cose risultano a cazzo di cane
                  //        QUINDI: ci inventiamo una galleria shop, come se fosse una categoria dei vari prodotti, e questa è l'unica che apre le immagini qua sotto, collegate al carrello
        $query = $db->query("SELECT * FROM articoli_cp");
        
        if($query->num_rows > 0){
            while($row1 = $query->fetch_assoc()){
                
                $imageURL = 'images/articoli/'.$row1["nome_file"];
                $note_realizzazione=substr($row1["note_realizzazione"],0,100)."...";
                $prezzo=$row1["prezzo"];
                $id=$row1["id"];
                
        ?>
            <a class="thumb" rel="gallery0" href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row1["nome"],  
            "<br>$note_realizzazione<br>",
            $row1["prezzo"],
                "euro",
            "<a href='aggiungicarrello.php?id=$id'><br>aggiungi al carrello</a>";
               
               ?>" >
                <?php }
          }               
                ?>
               <img src="images/shop.png" alt="" style="margin-top:7em; width:20%">
                    
        </a>
            
        </div> 
        </div>
         
         
        <div class="container-fluid s_mobile" id="art-work">
            <div id="testo1_art-work">ART - WORK</div>
            <div id="testo2_art-work">
                <button type="button" id="testo2_art-work" data-toggle="modal" data-target=".slide_art" style="background: transparent;">GALLERIA</button>
        </div>
        </div>
         
     </main>  
<!-- fine art-work -->
 
<!-- contatti -->
      <a name="contatti"></a> 
      <section>
            
          <div class="container-fluid" id="contatti">
            <div class="row">
                <div class="col" id="titolo_biografia" style=" border:0px solid red;">
                        Contatti
                </div>
            </div>
              
            <div class="container" id="contatti_contenuto">
                <div class="row">
                    <div class="col" style="border:0px solid red">
                        <form id="contatti_form">
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="form-group" style="margin-top:20px;">
                                <label for="oggetto" class="col-form-label">Oggetto</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group" style="margin-top:20px;">
                                <label for="messaggio" class="col-form-label">Messaggio</label>
                                <textarea class="form-control" id="form_messaggio"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="invia" style="margin-top:20px; font-weight:300;">INVIA</button>
                        </form>
                    </div>
                    <div class="col"  id="testo_contatti" style="border:0px solid blue">
                        Se hai un’idea o un progetto da elaborare, scrivici tutte le informazioni che possono essere utili per capire di cosa hai bisogno.<br />
                        Ti risponderemo al più presto!
                    </div>
                </div>
            </div>
        </div>   
   
      </section>
      
<!-- fine contatti -->
      
<!-- footer -->
      
      <footer>
        <div class="container_fluid" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col" id="footer_logo" style="border: 0px solid red">
                        <img id="footer_logo_img" src="Images/logoCrisiplastica.png" alt="logo-crisiplastica">
                        <p style="margin-top:8px; margin-left:0;">by <b>Cristina Accettulli</b></p>
                    </div>
                    <div class="col" id="footer_contatti">
                        <div id="footer_cornice_contatti">
                            <p id="footer_p">phone: <b class="b_left"> +39 347 05 07 768 </b> <br />
                            email: <b class="b_left"> cristinaaccettulli@gmail.com </b> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="border: 0px solid green">
                        
                    </div>
                    <div class="col" id="footer_social" style="border: 0px solid yellow">
                        <a href="https://www.facebook.com/Crisiplastica/"><img class="footer_social_img" src="Images/facebook.png" alt="link_facebook_page"></a>
                        <a href="https://www.instagram.com/crisiplastica/" style="margin-right:30px; margin-left:30px";><img src="Images/instagram.png" class="footer_social_img" alt="link_instagram_page"></a>
                        <a href="https://www.youtube.com/channel/UCwSWNPoReBodEkhLW95v3vA"><img src="Images/you_tube.png" class="footer_social_img" alt="link_youtube_page"></a>
                    </div>
                </div>
            </div>
        </div>
      </footer>

<!-- fine footer -->
      
      
<!-- modal -->
     
      <div class="modal fade slide_anatomia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_anatomia" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_anatomia" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_anatomia" data-slide-to="1"></li>
                            <li data-target="#carousel_anatomia" data-slide-to="2"></li>
                            <li data-target="#carousel_anatomia" data-slide-to="3"></li>
                            <li data-target="#carousel_anatomia" data-slide-to="4"></li>               
                            <li data-target="#carousel_anatomia" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/anatomia/foto1.JPG" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/anatomia/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/anatomia/foto3.jpg" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/anatomia/foto4.jpeg" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/anatomia/foto5.jpg" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/anatomia/foto6.JPG" alt="sesta slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_anatomia" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_anatomia" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      
      <div class="modal fade slide_life_casting" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_life_casting" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_life_casting" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_life_casting" data-slide-to="1"></li>
                            <li data-target="#carousel_life_casting" data-slide-to="2"></li>
                            <li data-target="#carousel_life_casting" data-slide-to="3"></li>
                            <li data-target="#carousel_life_casting" data-slide-to="4"></li>               
                            <li data-target="#carousel_life_casting" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/life_casting/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/life_casting/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/life_casting/foto3.jpg" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/life_casting/foto4.JPG" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/life_casting/foto5.JPG" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/life_casting/foto6.JPG" alt="sesta slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_life_casting" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_life_casting" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      
      <div class="modal fade slide_tattoo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_tattoo" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_tattoo" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_tattoo" data-slide-to="1"></li>
                            <li data-target="#carousel_tattoo" data-slide-to="2"></li>
                            <li data-target="#carousel_tattoo" data-slide-to="3"></li>
                            <li data-target="#carousel_tattoo" data-slide-to="4"></li>              
                            <li data-target="#carousel_tattoo" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/tattoo/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/tattoo/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/tattoo/foto3.JPG" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/tattoo/foto4.JPG" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/tattoo/foto5.jpg" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/tattoo/foto6.JPG" alt="sesta slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_tattoo" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_tattoo" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_mask" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_mask" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_mask" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_mask" data-slide-to="1"></li>
                            <li data-target="#carousel_mask" data-slide-to="2"></li>
                            <li data-target="#carousel_mask" data-slide-to="3"></li>
                            <li data-target="#carousel_mask" data-slide-to="4"></li>              
                            <li data-target="#carousel_mask" data-slide-to="5"></li>
                            <li data-target="#carousel_mask" data-slide-to="7"></li>
                            <li data-target="#carousel_mask" data-slide-to="8"></li>
                            <li data-target="#carousel_mask" data-slide-to="9"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/mask/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/foto2.JPG" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/Foto3.jpg" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/Foto4.jpg" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/foto5.jpg" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/foto6.jpg" alt="sesta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/foto7.jpg" alt="settima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/foto8.JPG" alt="ottava slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mask/foto9.jpg" alt="nona slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_mask" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_mask" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_creature" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_creature" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_creature" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_creature" data-slide-to="1"></li>
                            <li data-target="#carousel_creature" data-slide-to="2"></li>
                            <li data-target="#carousel_creature" data-slide-to="3"></li>
                            <li data-target="#carousel_creature" data-slide-to="4"></li>              
                            <li data-target="#carousel_creature" data-slide-to="5"></li>
                            <li data-target="#carousel_creature" data-slide-to="7"></li>
                            <li data-target="#carousel_creature" data-slide-to="8"></li>
                            <li data-target="#carousel_creature" data-slide-to="9"></li>
                            <li data-target="#carousel_creature" data-slide-to="10"></li>
                            <li data-target="#carousel_creature" data-slide-to="11"></li>
                            <li data-target="#carousel_creature" data-slide-to="12"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/creature/foto1.JPG" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto3.JPG" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto4.JPG" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto5.JPG" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto6.JPG" alt="sesta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto7.jpg" alt="settima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto8.JPG" alt="ottava slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto9.JPG" alt="nona slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto10.jpg" alt="decima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto11.jpg" alt="undicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/creature/foto12.jpg" alt="dodicesima slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_creature" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_creature" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_arredo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_arredo" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_arredo" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_arredo" data-slide-to="1"></li>
                            <li data-target="#carousel_arredo" data-slide-to="2"></li>
                            <li data-target="#carousel_arredo" data-slide-to="3"></li>
                            <li data-target="#carousel_arredo" data-slide-to="4"></li>              
                            <li data-target="#carousel_arredo" data-slide-to="5"></li>
                            <li data-target="#carousel_arredo" data-slide-to="7"></li>
                            <li data-target="#carousel_arredo" data-slide-to="8"></li>
                            <li data-target="#carousel_arredo" data-slide-to="9"></li>
                            <li data-target="#carousel_arredo" data-slide-to="10"></li>
                            <li data-target="#carousel_arredo" data-slide-to="11"></li>
                            <li data-target="#carousel_arredo" data-slide-to="12"></li>
                            <li data-target="#carousel_arredo" data-slide-to="13"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/arredo/foto1.JPG" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto2.JPG" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto3.JPG" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto4.JPG" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto5.JPG" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto6.JPG" alt="sesta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto7.jpg" alt="settima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto8.jpg" alt="ottava slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto9.jpg" alt="nona slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto10.jpg" alt="decima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto11.jpg" alt="undicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto12.jpg" alt="dodicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/arredo/foto13.jpg" alt="tredicesima slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_arredo" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_arredo" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_sceno" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_sceno" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_sceno" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_sceno" data-slide-to="1"></li>
                            <li data-target="#carousel_sceno" data-slide-to="2"></li>
                            <li data-target="#carousel_sceno" data-slide-to="3"></li>
                            <li data-target="#carousel_sceno" data-slide-to="4"></li>              
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/scenografie/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/scenografie/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/scenografie/foto3.JPG" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/scenografie/foto4.jpg" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/scenografie/foto5.jpg" alt="quinta slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_sceno" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_sceno" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_food" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_food" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_arredo" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_food" data-slide-to="1"></li>
                            <li data-target="#carousel_food" data-slide-to="2"></li>
                            <li data-target="#carousel_food" data-slide-to="3"></li>
                            <li data-target="#carousel_food" data-slide-to="4"></li>              
                            <li data-target="#carousel_food" data-slide-to="5"></li>
                            <li data-target="#carousel_food" data-slide-to="7"></li>
                            <li data-target="#carousel_food" data-slide-to="8"></li>
                            <li data-target="#carousel_food" data-slide-to="9"></li>
                            <li data-target="#carousel_food" data-slide-to="10"></li>
                            <li data-target="#carousel_food" data-slide-to="11"></li>
                            <li data-target="#carousel_food" data-slide-to="12"></li>
                            <li data-target="#carousel_food" data-slide-to="13"></li>
                            <li data-target="#carousel_food" data-slide-to="14"></li>
                            <li data-target="#carousel_food" data-slide-to="15"></li>
                            <li data-target="#carousel_food" data-slide-to="16"></li>              
                            <li data-target="#carousel_food" data-slide-to="17"></li>
                            <li data-target="#carousel_food" data-slide-to="18"></li>
                            <li data-target="#carousel_food" data-slide-to="19"></li>
                            <li data-target="#carousel_food" data-slide-to="20"></li>
                            <li data-target="#carousel_food" data-slide-to="21"></li>
                            <li data-target="#carousel_food" data-slide-to="22"></li>
                            <li data-target="#carousel_food" data-slide-to="23"></li>
                            <li data-target="#carousel_food" data-slide-to="24"></li>
                            <li data-target="#carousel_food" data-slide-to="25"></li>
                            <li data-target="#carousel_food" data-slide-to="26"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/mockup/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto3.jpg" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto4.jpg" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto5.JPG" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto6.JPG" alt="sesta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto7.JPG" alt="settima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto8.JPG" alt="ottava slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto9.JPG" alt="nona slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto10.JPG" alt="decima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto11.JPG" alt="undicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto12.JPG" alt="dodicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto13.JPG" alt="tredicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto14.JPG" alt="quattordicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto15.JPG" alt="quindicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto16.JPG" alt="sedicesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto17.JPG" alt="diciassettesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto18.JPG" alt="diciottesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto19.JPG" alt="diciannovesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto20.JPG" alt="ventesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto21.JPG" alt="ventunesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto22.JPG" alt="ventiduesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto23.jpg" alt="ventitreesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto24.JPG" alt="ventiquattresima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto25.jpg" alt="venticinquesima slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/mockup/foto26.jpg" alt="ventiseiesima slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_food" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_food" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_props" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_props" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_props" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_props" data-slide-to="1"></li>
                            <li data-target="#carousel_props" data-slide-to="2"></li>
                            <li data-target="#carousel_props" data-slide-to="3"></li>
                            <li data-target="#carousel_props" data-slide-to="4"></li>              
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/props/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/props/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/props/foto3.jpg" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/props/foto4.jpg" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/props/foto5.JPG" alt="quinta slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_props" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_props" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal fade slide_art" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="background-color:black;">
                    <div id="carousel_art" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_art" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_art" data-slide-to="1"></li>
                            <li data-target="#carousel_art" data-slide-to="2"></li>
                            <li data-target="#carousel_art" data-slide-to="3"></li>
                            <li data-target="#carousel_art" data-slide-to="4"></li>
                            <li data-target="#carousel_art" data-slide-to="5"></li>
                            <li data-target="#carousel_art" data-slide-to="6"></li> 
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="Images/slide/art_work/foto1.jpg" alt="prima slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3></h3>
                                        <p></p>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/art_work/foto2.jpg" alt="seconda slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/art_work/foto3.JPG" alt="terza slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/art_work/foto4.JPG" alt="quarta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/art_work/foto5.JPG" alt="quinta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/art_work/foto6.jpg" alt="sesta slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="Images/slide/art_work/foto7.jpg" alt="settima slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_art" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_art" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
<!-- fine modal -->      

      
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
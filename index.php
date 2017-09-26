<!DOCTYPE html>

<head>
<title>prova</title>
<!-- fancybox CSS library -->
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<!-- JS library -->
<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>

<script type="text/javascript">
    $(".fancybox").fancybox({ });
</script>

<style type="text/css">
.gallery img {
    width: 20%;
    height: auto;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}
</style>
</head>
<body>
<div class="container">
	
    <div class="gallery">
        <?php
        //Include database configuration file
        include('dbConfig.php');
        
        //get images from database
        $queryAnatomia = $db->query("SELECT * FROM articoli_cp WHERE categoria='anatomia'");
        $query = $db->query("SELECT * FROM articoli_cp WHERE categoria='arredo'");
        if($queryAnatomia->num_rows > 0){
            while($row1 = $queryAnatomia->fetch_assoc()){
                
                $imageURL = 'images/anatomia/'.$row1["nome_file"];
                $note_realizzazione=substr($row1["note_realizzazione"],0,100)."...";
                $prezzo=$row1["prezzo"];
                $id=$row1["id"];
                
        ?>
            <a class="fancybox" rel="gallery0" href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row1["nome"],  
            "<br>$note_realizzazione<br>",
            $row1["prezzo"],
            "<a href='aggiungicarrello.php?id=$id'><br>aggiungi al carrello</a>";
               
               ?>" >
                <?php }
          }               
                ?>
               <img src="images/arredo/corniceocchio.jpg" alt="" />
                    
        </a>
            
        
    </div>
    <div class="gallery">
    
    <?php
        //Include database configuration file
       
        
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                
                $imageURL = 'images/arredo/'.$row["nome_file"];
                $note_realizzazione=substr($row["note_realizzazione"],0,100)."...";
                $prezzo=$row["prezzo"];
                $id=$row["id"];
        ?>
            <a class="fancybox" rel="gallery1" href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["nome"],  
            "<br>$note_realizzazione<br>",
            $row["prezzo"],
            "<a href='aggiungicarrello.php?id=$id'><br>aggiungi al carrello</a>";
               
               ?>" >
                <?php }
          }?>
               <img src="images/arredo/cuore.jpg" alt="" />
            </a>
    </div>
</div>
</body>
     

</html>

<?php 
$ofertas = "SELECT * FROM contenidos";

?>



<section class="items-tab section">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                            <div class="row">


                            <?php
                    //ejecucion y consulta
                    $resultado = mysqli_query($conexion, $ofertas);
                    while ($row = mysqli_fetch_assoc($resultado)) { ?>


                                <div class="col-lg-3 col-md-4 col-12">

                                    <div class="single-item-grid">
                                        <div class="image">
                                            <a href="item-details.html"><img src="<?php echo $row["fts_1"]; ?>" alt="#"></a>
                                            
                                            <span class="flat-badge sale">Hot</span>
                                        </div>
                                        <div class="content">
                                           
                                            <h3 class="title">
                                                <a href="item-details.html"><?php echo $row["nombre"]; ?></a>
                                            </h3>
                                            
                                            
                                    </div>

                                </div>

                                <?php  } ?>



                            


                                                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
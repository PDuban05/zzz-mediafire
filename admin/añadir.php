<?php
session_start();
require '../conexion/database.php';


if (!empty($_POST['nombre']) ) {

    $nombre = $_POST['nombre'];
    
    $categoria = $_POST['categoria'];

    $drive = $_POST['drive'];

    $mediafire = $_POST['mediafire'];
    
    date_default_timezone_set('America/Bogota');
    $fecha = date('Y-m-d H:i:s');

   

    if (!empty($_SESSION['imagenes'])) {
        $imagen = $_SESSION['imagenes'];
    } else {
        $imagen = "";
    }


    

  

    $sql = "INSERT INTO contenidos(nombre,categorias,fecha_carga,fts_1,mediafire,drive) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->execute([$nombre,$categoria,$fecha,$imagen,$mediafire,$drive ]);

    $_SESSION['insert']="se ha añadido correctamente";

    


}

unset(
    $_SESSION['imagenes'],
    

);






?>


<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
?>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="upload/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">
    <link href="upload/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="upload/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="upload/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="upload/js/fileinput.js" type="text/javascript"></script>
    <script src="upload/js/locales/fr.js" type="text/javascript"></script>
    <script src="upload/js/locales/es.js" type="text/javascript"></script>
    <script src="upload/themes/gly/theme.js" type="text/javascript"></script>
    <script src="upload/themes/fas/theme.js" type="text/javascript"></script>
    <script src="upload/themes/explorer-fas/theme.js" type="text/javascript"></script>
    <script>
        $.fn.fileinput.defaults.theme = 'fas';
    </script>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php
        include 'loading.php';
        ?>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        include 'menu.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            
        <?php
        include 'navbar.php';
        ?>

            <!-- Navbar End -->



            <section class="pc-container">
        <div class="pcoded-content">

            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Añardir nuevo</h3>
                        </div>
                        <div class="card-body">


                            <div class="row">
                                <div class="col-md-6">
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-group">
                                            <label class="form-label" for="">Nombre</label>
                                            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="nombre" required>

                                        </div>
                                        

                                        <div class="form-group">
                                            <label class="form-label">Categorias</label>
                                            <input type="text" class="form-control" name="categoria" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Mediafire</label>
                                            <input type="text" class="form-control" name="mediafire" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">drive</label>
                                            <input type="text" class="form-control" name="drive" placeholder="" required>
                                        </div>
                                        


                                       



                                        <div class="card-body">

                                            <button type="submit" class="btn btn-success"><i class="mr-2" data-feather="check-circle"></i>Guardar </button>

                                        </div>
                                </div>



                                <div class="col-md-6">

                                    

                                    


                                    <div class="form-group">
                                        <label class="form-label">Imagenes</label>

                                        <small class="form-text text-muted">Solo se permite arhivos .jpg,png</small>
                                    </div>


                                    <div class="input-group mb-3">
                                        <div class="file-loading">
                                            <input id="archivos" name="imagenes[]" type="file" data-browse-on-zone-click="true" multiple="true" >
                                        </div>

                                    </div>




                                    </form>
                                </div>

                                <?php
                                $directory = "imagenes_/";
                                $images = glob($directory . "*.*");
                                ?>

                                <script>
                                    $("#archivos").fileinput({
                                        theme: 'fas',
                                        language: 'es',
                                        uploadUrl: "upload.php",
                                        uploadAsync: false,
                                        minFileCount: 1,
                                        maxFileCount: 3,
                                        allowedFileExtensions: ['jpg', 'png', 'jpeg'],
                                        showUpload: false,
                                        showRemove: false,


                                    });
                                    
                                </script>



                            </div>

                           

                        </div>
                    </div>
                </div>




            </div>

        </div>
    </section>

 


            <!-- Footer Start -->

            <?php
        include 'footer.php';
        ?>
            
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <?php
        include 'libraryjs.php';
        ?>
</body>

</html>
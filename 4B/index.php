<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeDumb Find</title>

    <!-- icon -->
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">

    <!-- mycss -->
    <link rel="stylesheet" href="assets/mycss/style.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

</head>
<body>
    
    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">PokeDumb Find</h3>    
                            </div>

                            <div class="card-body ml-auto">
                                <a href="add_pokemon.php" class="btn btn-primary pop">Add Pokemon</a>
                                <a href="add_element.php" class="btn btn-primary pop">Add Element</a>
                                </div>

                            <!-- add element modal -->

                                <div class="modal fade" id="add_element" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add element</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="" id="formaddelement" enctype="multipart/form-data">                                       
                                                    <div class="form-group">
                                                        <label>Pokemon Name</label>
                                                        <input type="text" name="tnama" class="form-control" placeholder="Enter Pokemon Name!" required>
                                                    </div>   
                                                    <div class="form-group">
                                                        <label>Pokemon Element</label>
                                                        <input type="text" name="tnama" class="form-control" placeholder="Enter Pokemon Str!" required>
                                                    </div> 
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                                                    <button type="submit" name="bsimpan" class="btn btn-primary" form="formaddelement">Save</button>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                            <!-- ending add element modal -->

                            <!-- main -->
                
                            <div class="card-container">
                                <div class="card">
                                    <img src="assets/photo/bulbasur.png" alt="Random photo" class="card-img">
                                    <div class="card-body">
                                    <h1>Pokemon</h1>
                                    <br>
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>
                                                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                                    Grass
                                                </div>
                                            </li>
                                            <li>
                                                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                                    Poison
                                                </div>
                                            </li>
                                            <hr>
                                            <a href="" class="button_footer">View</a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="assets/photo/pikachu.png" alt="Random photo" class="card-img">
                                    <div class="card-body">
                                    <h1>Pikachu</h1>
                                    <br>
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>
                                                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                                    Electric
                                                </div>
                                            </li>
                                            <hr>
                                            <a href="" class="button_footer">View</a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="assets/photo/rayquaza.png" alt="Random photo" class="card-img">
                                    <div class="card-body">
                                    <h1>Rayquaza</h1>
                                    <br>
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>
                                                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                                    Dragon
                                                </div>
                                            </li>
                                            <li>
                                                <div class="badge badge-primary text-wrap" style="width: 6rem;">
                                                    Flying
                                                </div>
                                            </li>
                                            <hr>
                                            <a href="" class="button_footer">View</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- ending main -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- jquery -->
    <script src="assets/bootstrap/js/jquery-3.6.0.min.js"></script>

    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- myjs -->
    <script src="assets/myjs/add_pokemon.js"></script>

</body>
</html>
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
                                <a href="index.php" class="btn btn-primary pop">Back</a>   
                            </div>

                            <div class="container">
                                <form method="post" action="add_pokemon.php" id="formaddpokemon" enctype="multipart/form-data">                                       
                                    <div class="form-group">
                                        <label>Pokemon Name</label>
                                        <input type="text" name="tname" class="form-control" placeholder="Enter Pokemon Name!" required>
                                    </div>   
                                    <div class="form-group">
                                        <label>Pokemon Element</label>
                                        <input type="text" name="tstr" class="form-control" placeholder="Enter Pokemon Str!" required>
                                    </div>   
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                            
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
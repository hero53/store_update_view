<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Utilisateur | Gestion de bien </title>
</head>


<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
</style>


<!-- Custom styles for this template -->
<!-- <link href="pricing.css" rel="stylesheet"> -->
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <img src="http://scoutascci.org/ressources/images/logo-01.png" alt="" width="50">
                    </svg>
                    <span class="fs-4 text-success">Inscription ASSCI</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
                    <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
                    <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a>
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-primary">Gestion de bien</h1>
                <p class="fs-5 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo ipsam ea
                    dolorum mollitia dolorem velit maxime perspiciatis. Quas, voluptatibus beatae architecto facilis
                    omnis accusantium quis quae et quaerat perferendis nobis.</p>
            </div>
        </header>
        <main>
            <h2 class="text-center mb-4 h2 text-primary">Ajouter un nouveau propriétaire</h2>
            <div class="">
                <form class="row mb-3">
                    <div class="mb-3 col-sm-12 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Nom</label>
                        <input type="text" name="nomProprietaire" class="form-control" id="exampleFormControlInput1" placeholder="Konan" required>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                        <input type="text" name="prenomProprietaire" class="form-control" id="exampleFormControlInput1" placeholder="Konan">
                    </div>
                    <div class="mb-3 col-sm-12 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Sexe</label>
                        <select class="form-select" aria-label="Default select example" name="sexProprietaire">
                            <option value="M" selected>M</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    <div class="mb-3 col-sm-12 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Nom du bien</label>
                        <input type="text" name="nomBien" class="form-control" id="" placeholder="residence X">

                    </div>
                    <div class="mb-3 col-sm-12 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de chambre</label>
                        <input type="text" name="chambreBien" class="form-control" id="exampleFormControlInput1" min="1">
                    </div>
                    <div class="mb-3 col-sm-12 col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de sallon</label>
                        <input type="text" name="sallonBien" class="form-control" id="exampleFormControlInput1" min="1">
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-danger me-md-2" type="button">Annuler</button>
                        <button class="btn btn-primary" type="submit" id="storeData">Enregistrer</button>
                    </div>
                </form>
            </div>

            <h2 class="text-center mb-4 h2 text-primary">Liste des propriétaires</h2>

            <div class="table-responsive">
                <?php
                /* Inclure le fichier config */
                require_once "config/databse.php";

                /* select query execution */
                $sql = "SELECT * FROM proprietaires";

                if ($result = mysqli_query($link, $sql)) {

                    if (mysqli_num_rows($result) > 0) {
                        echo '<table class="table text-center">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>#</th>";
                        echo "<th>Nom</th>";
                        echo "<th>Prenom</th>";
                        echo "<th>Sexe</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['nom'] . "</td>";
                            echo "<td>" . $row['prenom'] . "</td>";
                            echo "<td>" . $row['sexe'] . "</td>";
                            echo "<td>";
                            echo '<a href="#" class="me-3 btn btn-primary btn-sm " ><span class="bi bi-eye"></span>Ajouter</a>';
                            echo '<a href="#" class="me-3 btn btn-warning btn-sm data-update" data-id="' . $row['id'] . '" data-name="' . $row['nom'] . '" data-prenom="' . $row['prenom'] . '" data-sexe="' . $row['sexe'] . '"><span class="bi bi-pencil"></span>Modifier</a>';
                            echo "</td>";
                            // echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        /* Free result set */
                        mysqli_free_result($result);
                    } else {
                        echo '<div class="alert alert-danger"><em>Pas d\'enregistrement</em></div>';
                    }
                } else {
                    echo "Oops! Une erreur est survenue";
                }

                /* Fermer connection */
                mysqli_close($link);
                ?>

                <!-- <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="">Nom</th>
                            <th style="">Prenom</th>
                            <th style="">Sexe</th>
                            <th style="">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table_id">
                        <tr>
                            <th scope="row" class="">Kouassi</th>
                            <td>Israel</td>
                            <td>M</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary " title="Ajouter un bien">
                                    Ajouter
                                </button>
                                <button type="button" class="btn btn-sm btn-warning data-update" title="modifier un bien">
                                    Modifier
                                </button>
                            </td>
                        </tr>

                    </tbody>


                </table> -->
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="http://scoutascci.org/ressources/images/logo-01.png" alt="" width="30">
                    <small class="d-block mb-3 text-muted">&copy; 2023</small>
                </div>
            </div>
        </footer>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal modal-lg fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifier le propietaire <span id="presente" class="proprietaireName"></span>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row mb-3">
                        <input type="hidden" name="updateId" id="proprietaireId">
                        <div class="mb-3 col-sm-12 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" name="updateNom" class="form-control" id="proprietaireNom">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                            <input type="text" name="updatePrenom" class="form-control" id="proprietairePrenom">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Sexe</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="M" selected>M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-danger me-md-2" type="button">Annuler</button>
                            <button class="btn btn-primary" type="submit" id="updateData">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="jquery.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="script.js"></script>
<script>
    $(document).ready(function(e) {
        // $('.data-update').each(function() {
        //     $('.data-update').click(function() {
        //         e.preventDefault();
        //         alert("hhh");
        //         var id = $(this).attr('data-id');
        //         var nom = $(this).attr('data-nam');
        //         var prenom = $(this).attr('data-prenom');
        //         var sexe = $(this).attr('data-sexe');
        //         console.log(id, nom, prenom, sexe);
        //         // $('#proprietaireId').attr('value', id)
        //         // $('#proprietaireNom').attr('value', nom)
        //         // $('proprietairePrenom').attr('value', prenom)
        //         // // $('select[set-dat-type] option[value="' + result.type +
        //         // //     '"]').attr('selected', 'true')
        //         // $('[set-dat-description]').text(result.description)
        //         // $('#justify_update').modal({
        //         //     backdrop: 'static',
        //         //     keyboard: false
        //         // });
        //     })

        // });

        $(".data-update").each(function(index) {
            $(this).on("click", function(e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                var nom = $(this).attr('data-name');
                var prenom = $(this).attr('data-prenom');
                var sexe = $(this).attr('data-sexe');
                console.log(id, nom, prenom, sexe);

                $('#proprietaireId').attr('value', id)
                $('#proprietaireNom').attr('value', nom)
                $('#proprietairePrenom').attr('value', prenom)
                $('#presente').text(nom + ' ' + prenom)
                $('#staticBackdrop').modal('toggle');
                // $('#staticBackdrop').modal({
                //     backdrop: 'static',
                //     keyboard: false
                // });
                // alert("hhh");
                // // For the boolean value
                // var boolKey = $(this).data('selected');
                // // For the mammal value
                // var mammalKey = $(this).attr('id');
            });
        });
        $.get("http://127.0.0.1:8085/api/propiretaires", function(data) {
            $.each(data, function(key, value) {
                $('#table_id').append(`<tr>
                            <th scope="row" class="">${value.nom}</th>
                            <td>${value.prenom}</td>
                            <td>${value.sexe}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" title="Ajouter un bien" >
                                    Ajouter
                                </button>
                                
                                <button type="submit" class="btn btn-sm btn-warning data-update" title="modifier un bien" data-name="${value.nom}" data-prenom="${value.nom}" data-id="${value.id}" >
                                    Modifier
                                </button>
                            </td>
                        </tr>`);
            });
        });
    });
</script>
<script>
    $("#storeData").click(function(e) {
        e.preventDefault();
        var nomProprietaire = $('[name="nomProprietaire"]').val();
        var prenomProprietaire = $('[name="prenomProprietaire"]').val();
        var sexProprietaire = $('[name="sexProprietaire"]').select();

        var chambreBien = $('[name="chambreBien"]').val();
        var sallonBien = $('[name="sallonBien"]').val();
        var nomBien = $('[name="nomBien"]').val();


        var param = {
            'nomProprietaire': nomProprietaire,
            'prenomProprietaire': prenomProprietaire,
            'sexProprietaire': "M",
            'chambreBien': chambreBien,
            'sallonBien': sallonBien,
            'nomBien': nomBien,
        }
        console.log(param);
        // $.post("http://127.0.0.1:8000/api/proprietaires", {
        //     'nom': nom,
        //     'prenom': prenom,
        //     'sex': sex,
        //     'sex': sex,
        // }).done(function (data) {
        //     alert("Data Loaded: " + data);
        // });
        $.ajax({
            type: 'post',
            url: 'http://localhost:8085/api/propiretaire/store',
            processData: false,
            headers: {
                'Content-Type': 'application/json',
            },
            data: JSON.stringify(param),

            success: function(result) {
                location.reload(true);
            },
            error: function(error) {
                console.log(error.message)
            }
        });

        // fetch('http://127.0.0.1:8000/api/proprietaireStore', {
        //     method: 'POST', // or 'PUT'
        //     headers: {
        //         'Content-Type': 'application/json',
        //     },
        //     body: JSON.stringify(data),
        // })
        //     .then((response) => response.json())
        //     .then((data) => {
        //         console.log('Success:', data);
        //     })
        //     .catch((error) => {
        //         console.error('Error:', error);
        //     });



    });
    $('#updateData').click(function(e) {
        e.preventDefault();
        var id = $('[name="updateId"]').val();

        var param = {
            'nom': $('[name="updateNom"]').val(),
            'prenom': $('[name="updatePrenom"]').val(),
            // 'id': $('[name="updateId"]').val(),

        }
        console.log(param);
        fetch(`http://localhost:3001/update/${id}`, {
                method: 'POST', // or 'PUT'
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(param),
            }).then((response) => response.json())
            .then((data) => {
                console.log('Success:', data);
                location.reload(true);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        // var nom = $('[name="updateNom"]').val();
        // var prenom = $('[name="updatePrenom"]').val();
        // var id = $('[name="updateId"]').select();
    });
</script>

</html>
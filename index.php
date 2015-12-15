<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>School Of Net - Projeto 1</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <style type="text/css">


            .nav > ul {
                background:grey; 
                padding: 15px;
                border-radius:5px;
            }

            .nav > ul a {
                text-decoration: none;
                color: white;
            }
            .nav > ul a:visited {
                text-decoration: none;
                color: white;
            }
            .nav > ul a:hover {
                text-decoration: none;
                color: silver;
            }
            .nav > ul a:active {
                text-decoration: none;
                color: #515151;
            }


        </style>

    </head>
    <body>
        <div class="container-fluid">

            <div class="container">

                <h1 class="text-center">Projeto de Exemplo 1</h1>

                <div class="nav">
                    <ul class="list-unstyled list-inline">
                        <li><a href="?uri=home"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="?uri=empresa"><i class="fa fa-building"></i> Empresa</a></li>
                        <li><a href="?uri=produtos"><i class="fa fa-asterisk"></i> Produtos</a></li>
                        <li><a href="?uri=servicos"><i class="fa fa-asterisk"></i> Servicos</a></li>
                        <li><a href="?uri=contato"><i class="fa fa-asterisk"></i> Contato</a></li>
                    </ul>
                </div>


                <div class="content">
                    <?php
                    //Filter GET Input
                    $Uri = (filter_input(INPUT_GET, 'uri', FILTER_SANITIZE_STRING) ? filter_input(INPUT_GET, 'uri', FILTER_SANITIZE_STRING) : null);

                    //Verify Conditional
                    if (isset($Uri) && file_exists('inc/' . $Uri . '.php')):

                        //Add file
                        require_once('inc/' . $Uri . '.php');

                    else:

                        require_once('inc/home.php');

                    endif;
                    ?>


                </div>

            </div>
        </div>


        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity = "sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin = "anonymous"></script>
    </body>
</html>

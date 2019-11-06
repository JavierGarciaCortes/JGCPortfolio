<?php
session_start();
if(isset($_SESSION['contador'])){
    $_SESSION['contador']=4;
    
}else{
    $_SESSION['contador']=0;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>JGC's Portafolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="JGC's Portfolio, Web developer. You can see my projects during my studies and my work done to date" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script>
        var a = <?php echo $_SESSION['contador'] ?>;
    </script>
    <script type="text/javascript" src="js/main.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <style>
        img {
            max-width: 100%;
            vertical-align: top;
        }
        body{ Background: #fffff1; }

        /* Me y burbujas de dialogos */
        #medib {
            width: 25%;
            cursor: pointer;
            position: absolute;
            right: 0;
            bottom: 0;
        }
        #dialog {
            background-color: bisque;
            color: #441c00;
            padding: 10px;
            font-size: 4vw;
            width: 65%;
            height: auto;
            text-align: center;
            border-radius: 60px 60px 0 60px;
            user-select: none;
            position: absolute;
            bottom: 20%;
        }
        #talking {
            padding: 20px;
        }
        .chose {
            color: #007bff;
            cursor: pointer;
            user-select: none;
            padding: 5px;
        }
        .chose:hover {
            font-weight: bold;
        }
        .thinking {
            background-color: bisque;
            color: #441c00;
        }
        #cloud {
            width: auto;
            padding: 5px 10px;
            border-radius: 50%;
            text-align: center;
            font-size: 3vw;
            user-select: none;
            position: absolute;
            top: -20px;
            left: 0px;
            display: none;
        }

        a {
            text-decoration: none;
        }

        @media only screen and (min-width:820px) {
            #cloud {
                top: -50px;
            }
            #cloudback {
                top: -30px;
            }
        }
        @media only screen and (min-width:1260px) {
            #cloud {
                top: -75px;
            }
            #cloudback {
                top: -30px;
            }
        }

    </style>
</head>

<body>
    <header class="container-fluid">
        <div class="container">
            <div class="row d-flex justify-content-end" style="height: 20px">
                <div class="col-auto pr-1 align-self-center" style="height: 17px;"><img style="width: 17px; cursor: pointer;" src="img/info1.png" alt="Show info" onclick="sayinfo()"></div>
                <div class="col-auto pr-1 align-self-center" style="height: 17px;"><img style="width: 17px; cursor: pointer;" src="img/info.png" alt="Show phone number" onclick="phone()"></div>
                <div class="col-auto pr-1 align-self-center" style="height: 17px;"><a href="mailto:garciacortesjavier@gmail.com"><img style="width: 17px;" class="iconcontact" src="img/sobre.png" alt="send email"></a></div>
                <div class="col-auto pr-1 align-self-center" style="height: 17px;"><a href="https://www.linkedin.com/in/javiergarciacortes/" target="_blank"><img style="width: 17px;" class="iconcontact" src="img/ln.ico" alt="go to linkedin"></a></div>
                <div class="col-auto pr-1 align-self-center" style="height: 17px;"><a href="https://github.com/JavierGarciaCortes" target="_blank"><img style="height: 100%;" class="iconcontact" src="img/github.png" alt="go to GitHub"></a></div>
            </div>
        </div>
    </header>
    <main>
        <aside id="me">
            <div id="dialog">
                <div id="talking"></div>
                <div id="cloud" class="thinking"></div>
            </div>
            <img id="medib" src="img/MeDib.png" alt="dibujo de Javier García Cortes">
        </aside>
        
    </main>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--ICONO-->
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/icono.png">

    <!--METAS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Jonathan Ezequiel Ordoñez">
    <meta name="keyword" content="CV, Curriculum, Filosofia, Letras, Libros, Lectura">
    <meta http-equiv="60">

    <title>C.V Alberto Camus</title>
</head>
    <!--HEADER-->
    <?php include ('header.php') ?>
<body>
    <main>
        <section>
            <div class="row" id="sect1-div">
                <div class="col-5" id="sect1-div1">
                    <picture>
                        <source media="(max-width: 768px)" srcset="imagenes/Albert-Camus-Ciencia-del-Sur.jpg">
                        <img src="imagenes/camus2vertical.jpg">
                    </picture>
                </div>

                <div class="col-7" id="sect1-div2">
                    <h1>Quien soy</h1>
                    <p>Novelista, ensayista, filosofo con experiencia previa en periodismo de nacionalidad franco-argelina. 
                    Empecé mis estudios de filosofía en la Universidad de Argel. Reconocido por mis novelas "La Peste", "El Extranjero", 
                    "El mito de Sisifo" y como promulgador de la filosofia del Absurdo.</p>
                    <div class="container">
                        <button id="boton" onclick="mostrarQuote()">Cita</button>
                        <script src="javascript.js"></script>
                        <p id="quote"></p>
                    </div>
                </div>
            </div>

        </section>
            <div class="row" id="sect2-div">
                <div class="col-12" id="sect2-div1" >
                    <h1>Experiencia Laboral</h1>
                    <h3>Escritor</h3>
                    <p>El Extranjero - 1942</p>
                    <p>El Mito de Sisifo - 1942</p>
                    <p>La Peste - 1947</p>
                    <h3>Periodista</h3>
                    <p>Sud 1932</p>
                    <p>Alger Républicain</p>
                    <p>Actuelles III 1958</p>
                    <p>Diario del Frente Popular</p>
                </div>
            </div>
        <section>


        </section>
    </main>
    <!--FOOTER-->
    <?php include ('footer.php') ?>
</body>

</html>
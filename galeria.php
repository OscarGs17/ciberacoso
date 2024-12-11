<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Estilo del encabezado */
    header {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: white;
        text-align: center;
        padding: 5rem 0;
    }

    header h1 {
        font-size: 3.5rem;
        font-weight: bold;
    }

    header p {
        font-size: 1.25rem;
    }

    /* Estilo de las tarjetas */
    .card {
        border: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    .card img {
        max-height: 200px;
        object-fit: cover;
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    .btn-primary {
        background-color: #2575fc;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #6a11cb;
    }

    /* Pie de página */
    footer {
        background-color: #f8f9fa;
        color: #6c757d;
        text-align: center;
        padding: 2rem 0;
    }

    .social-icons a {
        color: #6c757d;
        margin: 0 10px;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: #2575fc;
    }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Encabezado -->
    <header>
        <div class="container">
            <h1>Casos de ciberacoso</h1>
            <p>Donde comparten de forma anonima el como es vivir un caso de ciber acoso.</p>

        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container my-5" id="posts">
        <div class="row g-4">
            <!-- Publicación 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sextorsión</h5>
                        <p class="card-text">
                            Detrás de este tipo de acoso generalmente se encuentran casos de pedofilia y pederastia.
                            Regularmente
                            es derivado del ciberacoso denominado grooming. Se caracteriza principalmente por la
                            extorsión hacia la
                            víctima con intenciones de carácter sexual, en la que se le amenaza con exponer contenido
                            sexual de la misma...
                        </p>
                    </div>
                </div>
            </div>

            <!-- Publicación 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ciberbullying</h5>
                        <p class="card-text">
                            También llamado ciberacoso escolar, se caracteriza por presentarse generalmente entre
                            menores de edad de manera intencional y reiterada. .</p>
                    </div>
                </div>
            </div>
            <!-- Publicación 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sexting</h5>
                        <p class="card-text">
                            Consiste en el envío de imágenes de índole sexual entre dos personas, generalmente de manera
                            consensuada. Si bien esta práctica no constituye un tipo de acoso, la persona que lo
                            practica debe de ser consciente del riesgo que podría suponer el envío de este tipo de
                            contenido ya que podría derivar en sextorsión. !</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <div class="container">
            <p>Walls Gracias.</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Enlace a Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Enlace a íconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
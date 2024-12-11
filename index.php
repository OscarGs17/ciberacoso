<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberbullying</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilo para hover en imágenes */
        .img-fluid {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .img-fluid:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para botones */
        .btn {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            background-color: #0056b3;
        }

        /* Efecto para secciones */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInEffect 1s forwards;
        }
        @keyframes fadeInEffect {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer efecto en íconos */
        .footer-icons a {
            transition: transform 0.3s ease, color 0.3s ease;
        }
        .footer-icons a:hover {
            transform: scale(1.2);
            color: #007bff;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Encabezado -->
    <header class="jumbotron text-center bg-primary text-white py-5 fade-in">
        <h1 class="display-4"><i class="fas fa-shield-alt"></i> Cyberbullying en Redes Sociales</h1>
        <p class="lead"><i class="fas fa-info-circle"></i> Foro informativo para crear conciencia y buscar ayuda.</p>
        <a href="servicios.php" class="btn btn-light btn-lg">
            <i class="fas fa-book-open"></i> Acceder a Información
        </a>
    </header>

    <!-- Contenido principal -->
    <div class="container my-5">
        <!-- Dónde Buscar Ayuda -->
        <section class="fade-in">
            <h2 class="text-center mb-4">Dónde Buscar Ayuda</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="img/imagen1.jpg" class="img-fluid rounded" alt="Centro de apoyo psicológico">
                </div>
                <div class="col-md-4">
                    <img src="img/imagen2.jpg" class="img-fluid rounded" alt="Línea de atención cibernética">
                </div>
                <div class="col-md-4">
                    <img src="img/imagen3.jpg" class="img-fluid rounded" alt="Grupos de apoyo">
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="ayuda.php" class="btn btn-secondary">
                    <i class="fas fa-question-circle"></i> Más Información
                </a>
            </div>
        </section>

        <!-- Casos de Ciberacoso -->
        <section class="mt-5 fade-in">
            <h2 class="text-center mb-4">Casos de Ciberacoso</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="img/casos.jpg" class="img-fluid rounded shadow" alt="Casos de ciberacoso">
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="galeria.php" class="btn btn-secondary">
                    <i class="fas fa-images"></i> Leer Casos
                </a>
            </div>
        </section>

        <!-- Consejos de Seguridad -->
        <section class="mt-5 bg-light p-4 rounded shadow fade-in">
            <h2 class="text-center mb-3">Consejos de Seguridad en Internet</h2>
            <p class="text-center">Protégete y aprende cómo evitar situaciones de riesgo.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Usa contraseñas seguras y únicas para cada cuenta.</li>
                <li class="list-group-item">Evita compartir información personal en perfiles públicos.</li>
                <li class="list-group-item">Bloquea y reporta cuentas que te acosen o intimiden.</li>
                <li class="list-group-item">Configura adecuadamente la privacidad de tus perfiles.</li>
            </ul>
            <div class="text-center mt-4">
                <a href="consejos.php" class="btn btn-info">
                    <i class="fas fa-lightbulb"></i> Leer Más Consejos
                </a>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 footer-icons">
        <p>&copy; 2024 WallsGS </p>
        <p>
            <a href="https://www.facebook.com/oscar.oscart.5" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/oscargsss/" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/oscargsss/" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

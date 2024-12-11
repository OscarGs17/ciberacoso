<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Animación al aparecer los elementos */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Efectos para las imágenes */
        img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
        }

        img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Tarjetas para cada sección */
        .info-card {
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Botón con efecto hover */
        .btn-primary {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #004085;
            transform: translateY(-3px);
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4 fade-in">Foro informativo</h2>
        <p class="text-center fade-in">Ofrecemos información sobre los tipos de ciberbullying.</p>

        <div class="row fade-in">
            <div class="col-md-6 info-card">
                <img src="img/imagen1.jpg" alt="Descripción de la imagen" class="img-fluid mb-3">
                <h5><strong>El cyberbullying o ciberacoso</strong></h5>
                <p>Se refiere al uso de tecnologías de la información y comunicación para hostigar, amenazar, avergonzar o intimidar a alguien de manera constante.</p>
                <p>Este tipo de acoso ocurre principalmente en plataformas como Facebook, Instagram, Twitter y WhatsApp.</p>
            </div>

            <div class="col-md-6 info-card">
                <img src="img/imagen5.jpg" alt="Descripción de la imagen" class="img-fluid mb-3">
                <h5><strong>Características del Cyberbullying</strong></h5>
                <ul>
                    <li><strong>Anonimato:</strong> Los agresores pueden ocultarse tras perfiles falsos.</li>
                    <li><strong>Permanencia:</strong> El contenido publicado permanece en internet.</li>
                    <li><strong>Amplia audiencia:</strong> Las publicaciones ofensivas pueden viralizarse.</li>
                    <li><strong>Acceso constante:</strong> Las víctimas pueden ser atacadas en cualquier momento.</li>
                </ul>
            </div>

            <div class="col-md-6 info-card">
                <img src="img/imagen6.jpg" alt="Descripción de la imagen" class="img-fluid mb-3">
                <h5><strong>Prevención y Recomendaciones</strong></h5>
                <ul>
                    <li><strong>Educación:</strong> Promover el respeto en el uso de internet.</li>
                    <li><strong>Privacidad:</strong> Configurar adecuadamente los perfiles en redes sociales.</li>
                    <li><strong>Reporte y bloqueo:</strong> Usar las herramientas disponibles en plataformas.</li>
                    <li><strong>Buscar apoyo:</strong> Hablar con amigos o profesionales si eres víctima.</li>
                </ul>
            </div>

            <div class="col-md-6 info-card">
                <img src="img/imagen7.jpg" alt="Descripción de la imagen" class="img-fluid mb-3">
                <h5><strong>Consecuencias del Cyberbullying</strong></h5>
                <ul>
                    <li><strong>Emocionales:</strong> Ansiedad, depresión, baja autoestima.</li>
                    <li><strong>Aislamiento social:</strong> Miedo y vergüenza.</li>
                    <li><strong>Dificultades académicas:</strong> Bajo rendimiento escolar o laboral.</li>
                    <li><strong>Casos extremos:</strong> Pensamientos suicidas.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center my-5 fade-in">
        <a href="index.php" class="btn btn-primary">
            <i class="fas fa-book-open"></i> Regresar al Inicio
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

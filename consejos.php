<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Efectos para las imágenes */
        img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        /* Efecto de aparición para los elementos */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInEffect 1s ease forwards;
        }
        @keyframes fadeInEffect {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Efecto hover en los botones */
        .btn {
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn:hover {
            transform: translateY(-3px);
            background-color: #0056b3;
        }

        /* Espaciado entre elementos */
        .tip {
            margin-bottom: 2rem;
        }

        /* Fondo y borde para los consejos */
        .tip {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>

    <div class="container mt-5 fade-in">
        <h2 class="text-center mb-4">Consejos</h2>
        <p class="text-center">Algunas formas de prevención contra el ciberacoso.</p>

        <!-- Consejos -->
        <div class="row">
            <div class="col-md-6 tip">
                <img src="img/imagen10.jpg" alt="Mantén la privacidad" class="img-fluid rounded mb-3">
                <h5><strong>Mantén la privacidad</strong></h5>
                <p>Configura tus perfiles de redes sociales como privados. Asegúrate de que solo tus amigos o personas de confianza puedan ver tu información personal.</p>
                <p>No compartas detalles privados como tu dirección, número de teléfono o lugar de trabajo en línea.</p>
            </div>

            <div class="col-md-6 tip">
                <img src="img/imagen11.jpg" alt="Sé cauteloso con las interacciones" class="img-fluid rounded mb-3">
                <h5><strong>Sé cauteloso con las interacciones</strong></h5>
                <p>Piensa antes de publicar. Reflexiona sobre cómo tus palabras y fotos pueden ser interpretadas o utilizadas por otras personas.</p>
                <p>Evita interactuar con personas que no conoces o que no te generan confianza.</p>
            </div>

            <div class="col-md-6 tip">
                <img src="img/imagen13.jpg" alt="No respondas al acoso" class="img-fluid rounded mb-3">
                <h5><strong>No respondas al acoso</strong></h5>
                <p>Si alguien te acosa en línea, no respondas ni sigas la discusión. Muchas veces, los acosadores buscan una reacción, y no darles lo que quieren puede disminuir su motivación.</p>
            </div>

            <div class="col-md-6 tip">
                <img src="img/imagen14.jpg" alt="Bloquea y reporta" class="img-fluid rounded mb-3">
                <h5><strong>Bloquea y reporta</strong></h5>
                <p>Bloquea a los acosadores en redes sociales o plataformas de mensajería. Utiliza las funciones de seguridad que ofrecen estas plataformas.</p>
                <p>Reporta cualquier comportamiento abusivo a los administradores del sitio o la red social para que tomen medidas.</p>
            </div>

            <div class="col-md-6 tip">
                <img src="img/imagen15.jpg" alt="Conversa sobre el problema" class="img-fluid rounded mb-3">
                <h5><strong>Conversa sobre el problema</strong></h5>
                <p>Habla con un amigo cercano, familiar o consejero si sientes que estás siendo acosado. No te guardes el problema, ya que puede afectar tu bienestar emocional.</p>
            </div>

            <div class="col-md-6 tip">
                <img src="img/imagen16.jpg" alt="Usa contraseñas seguras" class="img-fluid rounded mb-3">
                <h5><strong>Usa contraseñas seguras</strong></h5>
                <p>Utiliza contraseñas robustas para tus cuentas y cámbialas regularmente. Esto evitará que otros accedan a tu información y puedan usarla en tu contra.</p>
            </div>
        </div>
    </div>

    <div class="text-center my-5">
        <a href="index.php" class="btn btn-primary">
            <i class="fas fa-book-open"></i> Regresar al Inicio
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

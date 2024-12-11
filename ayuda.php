<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda contra el Ciberacoso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #004085;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
        }

        .header p {
            font-size: 1.2rem;
        }

        .info-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .info-card h4 {
            color: #004085;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .info-card ul {
            list-style-type: none;
            padding-left: 0;
        }

        .info-card ul li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .info-card ul li i {
            color: #004085;
        }

        .btn-custom {
            background-color: #004085;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #003366;
        }

        .container {
            padding: 3rem 0;
        }
    </style>
</head>

<body>
    
<?php include 'navbar.php'; ?>

    <header class="header">
        <h1>Centro de Ayuda Contra el Ciberacoso</h1>
        <p>Encuentra recursos y apoyo para enfrentar el ciberacoso</p>
    </header>

    <div class="container">
        <div class="row">
            <!-- Sección de recursos importantes -->
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-phone-alt"></i> Llama a la Línea de Emergencia</h4>
                    <p>Si estás siendo acosado, puedes comunicarte con las líneas de emergencia para recibir apoyo inmediato
                    Correo electrónico: ucontacto@ssc.cdmx.gob.mx.</p>
                    <a href="tel:55 5208 9898" class="btn-custom"><i class="fas fa-phone-alt"></i> Llamar al 55 5208 9898-</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-shield-alt"></i> Reporta el Ciberacoso</h4>
                    <p>Si eres víctima de ciberacoso, puedes reportar el incidente a las plataformas o autoridades competentes.</p>
                    <a href="https://www.ssc.cdmx.gob.mx/organizacion-policial/subsecretaria-de-inteligencia-e-investigacion-policial/policia-cibernetica" target="_blank" class="btn-custom"><i class="fas fa-exclamation-circle"></i> Reportar Ahora</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-user-friends"></i> Busca Apoyo Psicológico</h4>
                    <p>El ciberacoso puede afectar tu salud mental. Busca ayuda con un profesional para superar el trauma.</p>
                    <a href="https://www.ayuda-psicologica.com" target="_blank" class="btn-custom"><i class="fas fa-comments"></i> Buscar Apoyo</a>
                </div>
            </div>
        </div>

        <!-- Sección de recomendaciones y prevención -->
        <div class="row">
            <div class="col-md-6">
                <div class="info-card">
                    <h4><i class="fas fa-lock"></i> Protege tu Privacidad</h4>
                    <ul>
                        <li><i class="fas fa-check"></i> Configura tus perfiles de redes sociales como privados.</li>
                        <li><i class="fas fa-check"></i> No compartas información personal como direcciones o números telefónicos.</li>
                        <li><i class="fas fa-check"></i> Usa contraseñas seguras y cámbialas regularmente.</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="info-card">
                    <h4><i class="fas fa-hand-paper"></i> Cómo reaccionar ante el Ciberacoso</h4>
                    <ul>
                        <li><i class="fas fa-check"></i> No respondas a los acosadores. Ellos buscan una reacción.</li>
                        <li><i class="fas fa-check"></i> Guarda evidencia del acoso: capturas de pantalla, mensajes, etc.</li>
                        <li><i class="fas fa-check"></i> Bloquea a los agresores en redes sociales o plataformas de mensajería.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Botón de ayuda general -->
        <div class="text-center mt-5">
            <a href="index.php" class="btn-custom"><i class="fas fa-arrow-left"></i> Volver al Inicio</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

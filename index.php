<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camadas de Rede - Do Básico ao Avançado</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Camadas de Rede</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="camada1.php">Camada Física</a></li>
                    <li class="nav-item"><a class="nav-link" href="camada2.php">Camada de Enlace</a></li>
                    <li class="nav-item"><a class="nav-link" href="camada3.php">Camada de Rede</a></li>
                    <li class="nav-item"><a class="nav-link" href="camada4.php">Camada de Transporte</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="jumbotron text-center text-light bg-primary" data-aos="fade-down">
        <h1 class="display-4">Bem-vindo ao Guia de Camadas de Rede</h1>
        <p class="lead">Entenda as quatro camadas essenciais da rede, do básico ao avançado.</p>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <h2>O que são camadas de rede?</h2>
                <p>As camadas de rede são fundamentais para a comunicação entre dispositivos em uma rede. Cada camada tem suas próprias funções e protocolos específicos.</p>
                <a href="camada1.php" class="btn btn-outline-primary" data-aos="zoom-in">Explorar</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="img/network-layers.png" class="img-fluid" alt="Camadas de Rede">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-center text-light py-3" data-aos="fade-up">
        <p>&copy; 2024 Camadas de Rede. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

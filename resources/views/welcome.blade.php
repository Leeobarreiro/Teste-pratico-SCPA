<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f3f4f6, #e5e7eb);
            color: #333;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #1f2937;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #4b5563;
        }
        .hero .btn {
            margin: 0.5rem;
            padding: 0.75rem 2rem;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: all 0.3s ease-in-out;
        }
        .hero .btn:hover {
            transform: scale(1.05);
        }
        .hero .btn-primary {
            background-color: #3b82f6;
            border: none;
        }
        .hero .btn-primary:hover {
            background-color: #2563eb;
        }
        .hero .btn-secondary {
            background-color: #6b7280;
            border: none;
        }
        .hero .btn-secondary:hover {
            background-color: #4b5563;
        }
        .hero .btn-success {
            background-color: #10b981;
            border: none;
        }
        .hero .btn-success:hover {
            background-color: #059669;
        }
        footer {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #6b7280;
            font-size: 0.9rem;
        }
        footer a {
            color: #3b82f6;
            text-decoration: underline;
        }
        footer a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero">
            <h1><i class="fas fa-tools"></i> Bem-vindo ao Teste Prático!</h1>
            <p>Gerencie usuários e permissões com facilidade e eficiência.</p>
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg">
                    <i class="fas fa-tachometer-alt"></i> Ir para o Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">
                    <i class="fas fa-user-plus"></i> Registrar
                </a>
            @endauth
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} Leonardo Barreiro. Todos os direitos reservados. |</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

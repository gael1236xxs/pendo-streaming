<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENDO - @yield('title')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        .header {
            background-color: white;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .play-button {
            background-color: #6366f1;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16px;
        }
        .title {
            color: #6366f1;
            font-size: 28px;
            font-weight: bold;
        }
        .subtitle {
            color: #7c3aed;
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 15px;
            padding: 15px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            flex-wrap: wrap;
        }
        .menu a {
            text-decoration: none;
            color: #6366f1;
            font-weight: bold;
            font-size: 14px;
            padding: 5px 10px;
        }
        .menu a:hover {
            color: #7c3aed;
        }
        .content {
            padding: 15px;
            min-height: 500px;
        }
        @media (min-width: 768px) {
            .title {
                font-size: 36px;
            }
            .subtitle {
                font-size: 18px;
            }
            .menu a {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <div class="play-button">▶</div>
            <div class="title">PENDO</div>
        </div>
        <div class="subtitle">STREAMING A MUY BAJO PRECIO</div>
    </div>
    <div class="menu">
        <a href="/">Inicio</a>
        <a href="/streaming">Streaming</a>
        <a href="/musica">Música</a>
        <a href="/contacto">Contacto</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>

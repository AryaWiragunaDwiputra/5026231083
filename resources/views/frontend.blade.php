<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Latihan Routes</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2rem;
            letter-spacing: 1px;
        }

        .link-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 80%;
            max-width: 400px;
        }

        .link-container a {
            display: block;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            background-color: #ffffff;
            color: #4e54c8;
            border-radius: 10px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .link-container a:hover {
            background-color: #d1d4ff;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <h1>Latihan Routes</h1>
    <div class="link-container">
        <a href="bootstrap1">Bootstrap 1</a>
        <a href="bootstrap2">Bootstrap 2</a>
        <a href="learnjs1">Learn JS 1</a>
        <a href="learnjs2">Learn JS 2</a>
        <a href="linktree">Tugas Linktree</a>
        <a href="new">Page sewa Kamera</a>
    </div>
</body>
</html>

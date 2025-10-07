<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exercises</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(270deg, #b2f2bb, #ffffff);
            background-size: 400% 400%;
            animation: gradientShift 10s ease infinite;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding: 40px 20px;
            position: relative;
        }

        /* Texture overlay */
        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: url('https://www.transparenttextures.com/patterns/diamond-upholstery.png');
            opacity: 0.2;
            z-index: 0;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1, p {
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1em;
            margin-bottom: 30px;
        }

        .exercise-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            width: 100%;
            max-width: 600px;
            position: relative;
            z-index: 1;
        }

        .exercise-list a {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px;
            background-color: rgba(255, 255, 255, 0.85);
            color: #2e8b57;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .exercise-list a:hover {
            background-color: #e6ffe6;
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>PHP Exercises</h1>
    <p>Select an exercise to begin:</p>

    <div class="exercise-list">
        <?php
        $files = scandir(__DIR__);
        foreach ($files as $file) {
            if (preg_match('/^Exercise_\d+\.php$/', $file)) {
                echo "<a href='$file'>$file</a>";
            }
        }
        ?>
    </div>
</body>
</html>

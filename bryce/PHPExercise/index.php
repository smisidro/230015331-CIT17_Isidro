<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Exercises</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to bottom right,rgb(255, 226, 120), #FFFFFF);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
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
            width: 100%;
            max-width: 400px;
        }
        .exercise-list a {
            display: block;
            padding: 12px 20px;
            margin: 8px 0;
            background-color: rgba(255, 255, 255, 0.85);
            color: #B8860B;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s ease;
        }
        .exercise-list a:hover {
            background-color: #fff3d1;
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

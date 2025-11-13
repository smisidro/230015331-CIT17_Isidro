<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add User</title>
<style>
    /* 🌸 Soft Pastel Yellow Palette */
    :root {
        --soft-yellow: #fffbea;
        --pastel-yellow: #fff7d1;
        --light-cream: #fff2b5;
        --accent-yellow: #f7e47b;
        --accent-hover: #e5d46a;
        --text-dark: #4a4a2f;
        --white: #ffffff;
    }

    /* 🌈 Animated Background Gradient */
    body {
        margin: 0;
        padding: 40px;
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        background: linear-gradient(270deg, var(--soft-yellow), var(--pastel-yellow), var(--light-cream));
        background-size: 400% 400%;
        animation: moveGradient 15s ease infinite;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @keyframes moveGradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* 🌼 Form Container */
    .form-container {
        background: rgba(255, 255, 255, 0.9);
        padding: 35px 45px;
        border-radius: 18px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        backdrop-filter: blur(5px);
        width: 100%;
        max-width: 450px;
        text-align: center;
    }

    h2 {
        margin-bottom: 25px;
        font-weight: 700;
        color: var(--text-dark);
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }

    label {
        text-align: left;
        font-weight: 600;
        margin-bottom: 5px;
    }

    input[type="text"], 
    input[type="email"] {
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #e6e2b5;
        border-radius: 8px;
        font-size: 15px;
        background-color: #fffdf5;
        transition: 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
        border-color: var(--accent-hover);
        box-shadow: 0 0 5px rgba(247, 228, 123, 0.5);
        outline: none;
    }

    .btn {
        background-color: var(--accent-yellow);
        color: var(--text-dark);
        padding: 10px 0;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s ease;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
    }

    .btn:hover {
        background-color: var(--accent-hover);
        transform: translateY(-2px);
    }

    .back-link {
        display: inline-block;
        margin-top: 15px;
        text-decoration: none;
        color: var(--accent-hover);
        font-weight: 600;
    }

    .back-link:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="form-container">
        <h2>🌻 Add New User</h2>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" required>

            <input type="submit" name="save" value="Save" class="btn">
        </form>

        <a href="index.php" class="back-link">⬅ Back to User List</a>
    </div>
</body>
</html>

<?php
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

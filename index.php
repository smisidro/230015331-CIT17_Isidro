<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Management</title>
<style>
    /* 🌼 Light Pastel Yellow Theme */
    :root {
        --soft-yellow: #fffbea;
        --pastel-yellow: #fff7d1;
        --light-cream: #fff2b5;
        --accent-yellow: #f7e47b;
        --accent-hover: #e5d46a;
        --text-dark: #4a4a2f;
        --delete-red: #d86161;
        --white: #ffffff;
    }

    /* 🎨 Animated Gradient Background */
    body {
        margin: 0;
        padding: 40px;
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        background: linear-gradient(270deg, var(--soft-yellow), var(--pastel-yellow), var(--light-cream));
        background-size: 400% 400%;
        animation: moveGradient 15s ease infinite;
        min-height: 100vh;
    }

    @keyframes moveGradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    h2 {
        text-align: center;
        color: var(--text-dark);
        font-weight: 700;
        margin-bottom: 25px;
        letter-spacing: 0.5px;
    }

    h2::before {
        content: "🌸 ";
    }

    .container {
        max-width: 900px;
        margin: auto;
        background: rgba(255, 255, 255, 0.9);
        padding: 25px;
        border-radius: 18px;
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
        backdrop-filter: blur(5px);
    }

    .add-btn {
        display: inline-block;
        margin-bottom: 20px;
        background-color: var(--accent-yellow);
        color: var(--text-dark);
        padding: 10px 18px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: 0.3s ease;
    }

    .add-btn:hover {
        background-color: var(--accent-hover);
        transform: translateY(-2px);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: var(--white);
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 3px 8px rgba(0,0,0,0.05);
    }

    th, td {
        padding: 14px 16px;
        text-align: left;
    }

    th {
        background-color: var(--accent-yellow);
        color: var(--text-dark);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 14px;
    }

    tr:nth-child(even) {
        background-color: #fffdf3;
    }

    tr:hover {
        background-color: var(--pastel-yellow);
    }

    td a {
        color: var(--accent-hover);
        text-decoration: none;
        font-weight: 600;
    }

    td a:hover {
        text-decoration: underline;
    }

    .delete-link {
        color: var(--delete-red);
    }

    /* 📱 Responsive for mobile */
    @media (max-width: 600px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }

        tr {
            margin-bottom: 15px;
            border: 1px solid #f7e47b;
            border-radius: 10px;
            padding: 10px;
            background-color: #fffef5;
        }

        td {
            border: none;
            padding: 10px;
            display: flex;
            justify-content: space-between;
        }

        td:before {
            content: attr(data-label);
            font-weight: bold;
            color: var(--accent-hover);
        }

        th {
            display: none;
        }
    }
</style>
</head>
<body>
    <div class="container">
        <h2>User List</h2>
        <a href="add.php" class="add-btn">➕ Add New User</a>

        <table>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th>
            </tr>

            <?php
            $result = $conn->query("SELECT * FROM users");
            while($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td data-label="ID"><?= $row['id']; ?></td>
                <td data-label="Name"><?= htmlspecialchars($row['name']); ?></td>
                <td data-label="Email"><?= htmlspecialchars($row['email']); ?></td>
                <td data-label="Phone"><?= htmlspecialchars($row['phone']); ?></td>
                <td data-label="Action">
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?= $row['id']; ?>" class="delete-link" onclick="return confirm('Delete this record?');">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>

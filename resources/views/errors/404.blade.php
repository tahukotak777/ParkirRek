<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Styling Body */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Container */
        .not-found-container {
            text-align: center;
        }

        /* Title */
        .not-found-container h1 {
            font-size: 6rem;
            color: #ff6b6b;
        }

        /* Message */
        .not-found-container p {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        /* Button */
        .not-found-container a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff6b6b;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .not-found-container a:hover {
            background-color: #ff4c4c;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .not-found-container h1 {
                font-size: 4rem;
            }

            .not-found-container p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="not-found-container">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <a href="/">Go Back Home</a>
    </div>
</body>
</html>

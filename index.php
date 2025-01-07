<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333333;
        }

        input[type="url"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #dddddd;
            font-size: 16px;
        }

        input[type="url"]:focus {
            border-color: #5cb85c;
            outline: none;
        }

        button {
            background: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #4cae4c;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }

        .result a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .result a:hover {
            text-decoration: underline;
        }

        .error {
            color: #ff0000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>URL Shortener</h1>
        <form method="POST" action='shorten.php'>
             <input type="url" name="original_url" id="original_url" required>
            <button type="submit">Shorten URL</button>
        </form>
        
</body>
</html>

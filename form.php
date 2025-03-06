<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Input Form</title>
    <style>
        body {
            background-color: #ffe4e1; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #ffc0cb; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            color: #ff69b4; 
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 2px solid #ff1493; 
            border-radius: 5px;
        }
        button {
            background-color: #ff69b4; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color:rgb(233, 23, 135); 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="process.php" method="post">
            <label for="integers">Enter integers separated by commas:</label>
            <input type="text" name="integers" id="integers">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

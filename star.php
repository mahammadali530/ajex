
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Pattern</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
        }
        
        input[type="text"] {
            margin-bottom: 10px;
            width: 150px;
        }
        
        button {
            margin-top: 10px;
            width: 80px;
        }
        
        p {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter a number" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $rows = intval($_POST['name']); 
    if ($rows > 0) { 
        echo "<pre>"; 
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$j";
            }
            echo "\n"; 
        }
        echo "</pre>";
    } else {
        // echo "<p>Please enter a positive number!</p>";
    }
}
?>
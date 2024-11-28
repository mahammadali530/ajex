<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Pattern</title>
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
        <input type="text" name="start" placeholder="Enter number of rows" required>
        <input type="text" name="end" placeholder="Enter number of rows" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $start = intval($_POST['start']); 
        
        $end = intval($_POST['end']); 
        
        if ($start > 0 && $end > $start) { 
            echo "<br>"; 
            $current = $start;
            for ($i = 1; $current <= $end; $i++) {
                
                for ($j = 1; $j <= $i; $j++) {
                    if ($current > $end) break; 
                    echo $current . " "; 
                    $current++; 
                }
                echo "\n"; 
            }
            echo "</pre>";
        } else {
            echo "<p>Please enter a valid starting and ending number!</p>";
        }
    }
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Submitted Inputs</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { max-width: 80%; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; color: #333; }
        pre { background: #e9ecef; padding: 10px; border-radius: 4px; width: 99%;}
        a { display: block; text-align: center; margin-top: 20px; color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Rants and Bants</h1>
        <?php
        echo "<pre>" . htmlspecialchars(file_get_contents('rants_and_bants.txt')) . "</pre>"
        ?>
        <a href='index.php'>Back to Make Posts</a>
    </div>
</body>
</html>

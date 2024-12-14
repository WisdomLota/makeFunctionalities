<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>

    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        h1 { text-align: center;}
        .container { max-width: 60%; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
        label { display: block; margin: 10px 0 5px; }
        input[type=text], input[type=email], textarea { width: 98%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 15px; }
        input[type=submit] { background-color: #28a745; color: white; border: none; border-radius: 4px; padding: 10px; cursor: pointer; width: 98%; }
        input[type=submit]:hover { background-color: #218838; }
        .message { text-align: center; margin: 10px 0; color: #28a745; width: 90%; }
        .view-link { display: block; text-align: center; margin-top: 15px; color: #007bff; text-decoration: none; }
        .view-link:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rant and Bant</h1>
        <?php 
        //Display success or error message
        if(isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo '<div class="message" style="color: green;">Posted!</div>';
            } else {
                echo '<div class="message" style="color: red;">Could not make post</div>';
            }
        }
        ?>
    
    <form action="save.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="headline">Headline:</label>
        <input type="text" id="headline" name="headline" required><br><br>

        <label for="message">Details:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
        <input type="submit" value="Post">
    </form>
    <a href="view.php" class="view-link">View Posts</a>
    </div>
</body>
        
</html>
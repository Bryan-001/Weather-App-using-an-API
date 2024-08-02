<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Weather App</h1>
        <form action="weather.php" method="GET">
            <input type="text" name="city" placeholder="Enter city" required>
            <button type="submit">Get Weather</button>
        </form>
        
        <?php if(isset($_GET['city'])): ?>
            <div class="weather-info">
                <?php include 'weather.php'; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

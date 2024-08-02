<?php
<?php
if(isset($_GET['city'])) {
    $city = htmlspecialchars($_GET['city']);
    $apiKey = 'YOUR API KEY'; // Replace with your OpenWeatherMap Default API key
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}&units=metric";

    $weatherData = file_get_contents($apiUrl);
    $weatherArray = json_decode($weatherData, true);

    if($weatherArray['cod'] == 200) {
        $temperature = $weatherArray['main']['temp'];
        $description = $weatherArray['weather'][0]['description'];
        $icon = $weatherArray['weather'][0]['icon'];
        $cityName = $weatherArray['name'];
        $country = $weatherArray['sys']['country'];

        echo "<h2>Weather in {$cityName}, {$country}</h2>";
        echo "<p><img src='https://openweathermap.org/img/wn/{$icon}.png' alt='{$description}'> {$temperature}°C - {$description}</p>";
    } else {
        echo "<p>City not found. Please try again.</p>";
    }
}
?>


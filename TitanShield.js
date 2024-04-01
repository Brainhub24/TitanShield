/**
 * TitanShield.js
 * Version: 1.1.0 Beta
 * Description: This script provides frame blocking functionality to prevent clickjacking attacks by ensuring the website is not loaded within an iframe.
 * 
 * Repository: https://github.com/Brainhub24/TitanShield
 * Developer : Jan Gebser (Brainhub24)
 * Contact   : github@brainhub24.com
 */

(function() {
    // Check if the current window is the topmost window
    if (window !== window.top) {
        // If not, replace the URL of the top window with the current URL
        window.top.location.href = window.location.href;
    }
})();

// Check if the current window is the topmost window
if (top !== self) {
    // If not, replace the URL of the top window with the current URL
    top.location.replace(document.location);
}

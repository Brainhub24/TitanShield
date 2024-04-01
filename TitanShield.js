// Check if the current window is the topmost window
if (window !== window.top) {
    // If not, redirect the top window to the current location
    window.top.location.href = window.location.href;
}

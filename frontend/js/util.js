// Immediately show loader when this script loads
document.getElementById('loading-overlay').classList.remove('opacity-0');

// Hide loader when DOM is fully parsed (but before images/stylesheets load)
document.addEventListener('DOMContentLoaded', () => {
  const loader = document.getElementById('loading-overlay');
  loader.classList.add('opacity-0');
  
  // Remove from DOM after fade-out animation completes
  setTimeout(() => {
    loader.remove();
  }, 300); // Match this with your transition duration
});

// Fallback: hide loader if DOMContentLoaded takes too long
setTimeout(() => {
  if (document.getElementById('loading-overlay')) {
    document.getElementById('loding-overlay').remove();
  }
}, 5000); // 5 second timeout as safety net
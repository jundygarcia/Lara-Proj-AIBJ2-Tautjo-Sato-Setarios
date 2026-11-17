const toggleBtn = document.getElementById('theme-toggle');

function applyTheme(isDark) {
    document.body.classList.toggle('dark', isDark);
    toggleBtn.textContent = isDark ? '☀️ Light mode' : '🌙 Dark mode';
}

// Restore the saved choice
let savedDark = false;
try { savedDark = localStorage.getItem('theme') === 'dark'; } catch (e) {}
applyTheme(savedDark);

// Toggle on click
toggleBtn.addEventListener('click', () => {
    const isDark = !document.body.classList.contains('dark');
    applyTheme(isDark);
    try { localStorage.setItem('theme', isDark ? 'dark' : 'light'); } catch (e) {}
});

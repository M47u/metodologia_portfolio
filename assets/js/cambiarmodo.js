// verificar el modo
const themeToggle = document.getElementById('themeToggle');
const themeIcon = document.getElementById('themeIcon');

function toggleTheme() {
  const isDark = document.body.classList.toggle('dark-mode');

  if (isDark) {
    themeToggle.classList.remove('light');
    themeToggle.classList.add('dark');
    themeIcon.src = 'assets/images/icon-luna.png';
    themeIcon.alt = 'Modo oscuro';
    localStorage.setItem('theme', 'dark');
  } else {
    themeToggle.classList.remove('dark');
    themeToggle.classList.add('light');
    themeIcon.src = 'assets/images/icon-sol.png';
    themeIcon.alt = 'Modo claro';
    localStorage.setItem('theme', 'light');
  }
}

themeToggle.addEventListener('click', toggleTheme);

// Cargar tema guardado
document.addEventListener('DOMContentLoaded', () => {
  const savedTheme = localStorage.getItem('theme');
  if (savedTheme === 'dark') {
    document.body.classList.add('dark-mode');
    themeToggle.classList.add('dark');
    themeIcon.src = 'assets/images/icon-luna.png';
  } else {
    document.body.classList.remove('dark-mode');
    themeToggle.classList.add('light');
    themeIcon.src = 'assets/images/icon-sol.png';
  }
});

// cambiar modo de los neons json
document.getElementById("toggle-mode").addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");

  const configFile = document.body.classList.contains("dark-mode")
    ? "assets/js/particles-dark.json"
    : "assets/js/particles-dark.json";

  // destruir canvas anterior (opcional)
  document.querySelector("#particles-js").innerHTML = "";

  // recargar partículas
  particlesJS.load("particles-js", configFile);
});


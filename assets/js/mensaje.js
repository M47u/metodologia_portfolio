document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const form = this;
  const nombre = form.nombre.value.trim();
  const email = form.email.value.trim();
  const telefono = form.telefono.value.trim();
  const mensaje = form.mensaje.value.trim();

  const emailRegex = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
  const telefonoRegex = /^\d{10,}$/;

  if (nombre.length < 3) {
    const mensajeConfirmacion = document.getElementById("mensajeConfirmacion");
    mensajeConfirmacion.textContent = "El nombre debe tener al menos 3 caracteres❌";
    mensajeConfirmacion.classList.add("mensajeria2");
    setTimeout(() => {
      mensajeConfirmacion.textContent = "";
      mensajeConfirmacion.classList.remove("mensajeria2");
      }, 2000);
    return;
  }

  if (!emailRegex.test(email)) {
    const mensajeConfirmacion = document.getElementById("mensajeConfirmacion");
    mensajeConfirmacion.textContent = "El correo electrónico no es válido❌";
    mensajeConfirmacion.classList.add("mensajeria2");
    setTimeout(() => {
      mensajeConfirmacion.textContent = "";
      mensajeConfirmacion.classList.remove("mensajeria2");
      }, 2000);
    return;
  }

  if (!telefonoRegex.test(telefono)) {
    const mensajeConfirmacion = document.getElementById("mensajeConfirmacion");
    mensajeConfirmacion.textContent = "El teléfono debe contener al menos 10 dígitos❌";
    mensajeConfirmacion.classList.add("mensajeria2");
    setTimeout(() => {
      mensajeConfirmacion.textContent = "";
      mensajeConfirmacion.classList.remove("mensajeria2");
      }, 2000);
    return;
  }

  if (mensaje.length === 0) {
    const mensajeConfirmacion = document.getElementById("mensajeConfirmacion");
    mensajeConfirmacion.textContent = "El mensaje no puede estar vacío❌";
    mensajeConfirmacion.classList.add("mensajeria2");
    setTimeout(() => {
      mensajeConfirmacion.textContent = "";
      mensajeConfirmacion.classList.remove("mensajeria2");
      }, 2000);
    return;
  }
  const formData = new FormData(form);

  fetch("./login/contacto.php", {
    method: "POST",
    body: formData
  })
  .then(response => {
    if (!response.ok) {
      throw new Error("Error en el servidor");
    }
    return response.text();
  })
  .then(result => {
    if (result.trim() === "ok") {
      document.getElementById("mensajeConfirmacion").classList.remove("mensajeria2");
      if(result.trim() === "ok"){
      const mensajeConfirmacion = document.getElementById("mensajeConfirmacion");
      mensajeConfirmacion.textContent = "Mensaje enviado ✅";
      mensajeConfirmacion.classList.add("mensajeria");
      form.reset();

      setTimeout(() => {
      mensajeConfirmacion.textContent = "";
      mensajeConfirmacion.classList.remove("mensajeria");
      }, 3000);
      return;
      }
    }
  })
  .catch(error => {
    console.error("Error al enviar:", error);
    alert("El mensaje no fue enviado.");
  });
});
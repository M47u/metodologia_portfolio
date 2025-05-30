CREATE DATABASE IF NOT EXISTS portfolio;
USE portfolio;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(100),
    contrasena VARCHAR(100),
    creado_en DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS mensajes (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_creado DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS informacion_personal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT,
    correo_personal VARCHAR(255),
    sede VARCHAR(100)
);

INSERT INTO mensajes VALUES 
(1,'Patricia','patri@gmail.com','3704000001','Son geniales\r\n','2025-05-24 05:01:42'),
(2,'Luana Gomez','luana@gmail.com','3704000002','Quisiera conocer mas de usted','2025-05-24 05:10:15'),
(3,'Luis Molina','Luis@gmail.com','3704000003','Es un muy buen desarrollador','2025-05-24 06:08:24'),
(4,'Belen','bel@gmail.com','3704000004','Espero respuesta','2025-05-24 08:37:54'),
(5,'Lujan Villalba','lu@gmail.com','3704000005','Espero poder trabajar con usted','2025-05-24 17:03:51'),
(6,'Pablo Rios','pablo@gmail.com','3704000006','Quisiera un presupuesto','2025-05-24 17:05:15');

INSERT INTO informacion_personal(descripcion, correo_personal, sede) VALUES
('Programador especializado en crear soluciones digitales completas, desde el diseño de interfaces intuitivas hasta la lógica y la arquitectura que las hace funcionar. Combinando creatividad y funcionalidad para desarrollar plataformas escalables, modernas y fáciles de usar. Me apasiona convertir ideas en experiencias digitales reales, limpias y accesibles.', 'benjamingz@gmail.com', 'Formosa,Argentina');
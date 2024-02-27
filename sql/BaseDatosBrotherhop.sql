CREATE DATABASE IF NOT EXISTS bd_brotherhop;
USE bd_brotherhop;
/*-----------------------------------------------------------------------TABLAS----------------------------------------------------------------------------------*/
CREATE TABLE t_contacto (
    id_contacto INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    email VARCHAR(255),
    asunto VARCHAR(255),
    mensaje TEXT
);
CREATE TABLE t_cervezas (
    id_cerveza INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    estilo VARCHAR(255),
    img VARCHAR(255)
);
CREATE TABLE t_concursos (
    id_concurso INT PRIMARY KEY AUTO_INCREMENT,
    nombre_concurso VARCHAR(255),
    id_cerveza INT,
    descripcion TEXT,
    img VARCHAR(255),
    fecha DATE,
    FOREIGN KEY (id_cerveza) REFERENCES t_cervezas(id_cerveza)
);
CREATE TABLE t_usuarios (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    password VARCHAR(255),
    tipo ENUM('admin', 'usuario', 'visitante')
);
CREATE TABLE t_recetas (
    id_receta INT PRIMARY KEY AUTO_INCREMENT,
    id_cerveza INT,
    id_usuario INT,
    nombre VARCHAR(255),
    descripcion TEXT,
    ABV DECIMAL(5,2),
    img VARCHAR(255),
    estilo VARCHAR(255),
    FOREIGN KEY (id_cerveza) REFERENCES t_cervezas(id_cerveza),
    FOREIGN KEY (id_usuario) REFERENCES t_usuarios(id_usuario)
);
CREATE TABLE t_crearReceta (
    id_recetaNueva INT PRIMARY KEY AUTO_INCREMENT,
    id_receta INT,
    nombre VARCHAR(255),
    descripcion TEXT,
    img VARCHAR(255),
    ABV DECIMAL(5,2),
    estilo VARCHAR(255),
    FOREIGN KEY (id_receta) REFERENCES t_recetas(id_receta)
);
CREATE TABLE t_nosotros (
    id_info INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255),
    descripcion TEXT,
    subtitulo1 VARCHAR(255),
    subtitulo2 VARCHAR(255),
    descripcion2 TEXT,
    eslogan VARCHAR(255),
    img1 VARCHAR(255),
    img2 VARCHAR(255),
    img3 VARCHAR(255)
);
CREATE TABLE t_barrel_project (
    id_barrel INT PRIMARY KEY AUTO_INCREMENT,
    descripcion TEXT,
    subtitulo1 VARCHAR(255),
    subtitulo2 VARCHAR(255),
    descripcion2 TEXT,
    eslogan VARCHAR(255)
);
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
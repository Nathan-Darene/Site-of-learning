-- Table Users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    telephone VARCHAR(20),
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

-- Table Admin
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

-- Table Formateur
CREATE TABLE formateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    telephone VARCHAR(20),
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

-- Table Courses
CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_formateur INT,
    FOREIGN KEY (id_formateur) REFERENCES formateur(id)
);

-- Table Modules
CREATE TABLE modules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    id_cours INT,
    FOREIGN KEY (id_cours) REFERENCES courses(id)
);

-- Table Evaluations
CREATE TABLE evaluations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    id_module INT,
    FOREIGN KEY (id_module) REFERENCES modules(id)
);

-- Table Progression
CREATE TABLE progression (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    id_module INT,
    pourcentage FLOAT,
    FOREIGN KEY (id_utilisateur) REFERENCES users(id),
    FOREIGN KEY (id_module) REFERENCES modules(id)
);

-- Table Certificats
CREATE TABLE certificats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateur INT,
    id_cours INT,
    date_délivrance DATETIME DEFAULT CURRENT_TIMESTAMP,
    code_certificat VARCHAR(255) UNIQUE NOT NULL,
    FOREIGN KEY (id_utilisateur) REFERENCES users(id),
    FOREIGN KEY (id_cours) REFERENCES courses(id)
);

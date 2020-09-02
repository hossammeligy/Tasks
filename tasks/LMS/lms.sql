CREATE TABLE instructors (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone VARCHAR(255) UNIQUE NOT NULL,
    occupation VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE students (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    education VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(255) UNIQUE NOT NULL,
    occupation VARCHAR(255) NOT NULL
);

CREATE TABLE subjects (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE courses (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    instructor_id INT (100) NOT NULL,
)

ALTER TABLE courses ADD CONSTRAINT instructor_id_fk FOREIGN KEY courses(instructor_id) REFERENCES instructors(id);

CREATE TABLE rounds (
    id INT(100) PRIMARY KEY AUTO_INCREMENT,
    start_date TIMESTAMP NOT NULL,
    course_id INT(100) NOT NULL,
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

CREATE TABLE course_subject(
    course_id INT(100) NOT NULL,
    subject_id INT(100) NOT NULL,

    FOREIGN KEY (course_id) REFERENCES courses(id),
    FOREIGN KEY (subject_id) REFERENCES subjects(id)
)

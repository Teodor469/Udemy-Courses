CREATE TABLE posts(
    id INT AUTOINCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO posts (title, body) VALUES ('Post one', 'This is post one');

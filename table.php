<?php
// Include the file with the database connection
include("config.php");

// Your SQL query to create the table
$queryc = "CREATE TABLE users (
    college_id INT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    department VARCHAR(255),
    email_id VARCHAR(255) UNIQUE NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    has_voted_poll_ids varchar(25)
)";



$queryd = "CREATE TABLE IF NOT EXISTS poll (
    poll_id INT PRIMARY KEY AUTO_INCREMENT,
    poll_title VARCHAR(255) NOT NULL,
    poll_description TEXT,
    poll_creator VARCHAR(255) NOT NULL,
    poll_create_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    poll_end_time TIMESTAMP,
    poll_yes_votes INT DEFAULT 0,
    poll_no_votes INT DEFAULT 0
)";

// Execute the queries
if ($conn->query($queryc) === TRUE) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table 'users': " . $conn->error . "<br>";
}

if ($conn->query($queryd) === TRUE) {
    echo "Table 'poll' created successfully<br>";
} else {
    echo "Error creating table 'poll': " . $conn->error . "<br>";
}

if ($conn->query($querya) === TRUE) {
    echo "Table 'events' created successfully<br>";
} else {
    echo "Error creating table 'events': " . $conn->error . "<br>";
}

if ($conn->query($queryb) === TRUE) {
    echo "Table 'resource' created successfully<br>";
} else {
    echo "Error creating table 'resource': " . $conn->error . "<br>";
}

// Close the database connection
$conn->close();
?>

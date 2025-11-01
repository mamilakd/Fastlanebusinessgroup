<?php
// This file is responsible for running database migrations, applying changes to the database schema as needed.

require_once '../src/db.php';

function migrate() {
    $db = getDatabaseConnection();

    // Load the schema from the SQL file
    $schema = file_get_contents('../sql/schema.sql');

    // Execute the schema to create tables
    if ($db->exec($schema) === false) {
        echo "Error creating database schema: " . implode(", ", $db->errorInfo());
        return;
    }

    echo "Database migration completed successfully.";
}

// Run the migration
migrate();
?>
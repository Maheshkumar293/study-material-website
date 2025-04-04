<?php
// Database setup script
require_once 'config.php';

try {
    // Create connection without database name first
    $conn = new mysqli($host, $username, $password);
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Read and execute database creation SQL
    $create_sql = file_get_contents('create_database.sql');
    if ($conn->multi_query($create_sql)) {
        do {
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->next_result());
    }
    
    // Connect to the new database
    $conn->select_db('study_materials');
    
    // Read and execute schema SQL
    $schema_sql = file_get_contents('schema.sql');
    
    // Execute multi query
    if ($conn->multi_query($schema_sql)) {
        do {
            // Store first result set
            if ($result = $conn->store_result()) {
                $result->free();
            }
        } while ($conn->next_result());
    }

    if ($conn->error) {
        throw new Exception("Error executing SQL: " . $conn->error);
    }

    echo "Database setup completed successfully!\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
} finally {
    if (isset($conn)) {
        $conn->close();
    }
}
?>
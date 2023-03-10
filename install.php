<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_chashlock";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        // sql to create table
        $sql = "CREATE OR REPLACE TABLE clientes (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        endereco VARCHAR(255) NOT NULL,
        telefone VARCHAR(11)
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table clientes created successfully";
        } else {
          echo "Error creating table: " . $conn->error;
        }

         //inclusão de clientes


         $sql = "INSERT INTO clientes (nome, endereco, telefone) VALUES ('Jonas', 'Dom pedro', '819440288922')";
            
         if ($conn->query($sql) === TRUE) {
           echo "Inserir cliente feito successfully";
         } else {
           echo "Error creating table: " . $conn->error;
         }

         $sql = "INSERT INTO clientes (nome, endereco, telefone) VALUES ('Ewerton', 'Dom Pedro II', '8194404040')";
            
         if ($conn->query($sql) === TRUE) {
           echo "Inserir cliente feito successfully";
         } else {
           echo "Error creating table: " . $conn->error;
         }

         $sql = "INSERT INTO clientes (nome, endereco, telefone) VALUES ('Rafael', 'Dom carlos', '8195589008')";
            
         if ($conn->query($sql) === TRUE) {
           echo "Inserir cliente feito successfully";
         } else {
           echo "Error creating table: " . $conn->error;
         }
       
        $conn->close();
        ?>
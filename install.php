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
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
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
       


        //criar banco de usuario
        // sql to create table
        $sql = "CREATE OR REPLACE TABLE usuarios (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          email VARCHAR(255) NOT NULL,
          senha VARCHAR(255) NOT NULL
          )";
          
          if ($conn->query($sql) === TRUE) {
            echo "Table usuarios created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }
  
           //inclusão de clientes
           $sql = "INSERT INTO usuarios (email, senha) VALUES ('jonas@gmail.com', '123')";
              
           if ($conn->query($sql) === TRUE) {
             echo "Inserir usuario feito successfully";
           } else {
             echo "Error creating table: " . $conn->error;
           }

          // sql to create table
          $sql = "CREATE OR REPLACE TABLE titulos_receber (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          id_cliente INT UNSIGNED,
          valor float,
          pago float,
          saldo float,
          data_emissao date,
          data_pagamento date,
          FOREIGN KEY (id_cliente) REFERENCES clientes(id)
          )";
          
          if ($conn->query($sql) === TRUE) {
            echo "Table titulos_receber created successfully";
          } else {
            echo "Error creating table: " . $conn->error;
          }
  
           //inclusão de clientes
           $sql = "INSERT INTO titulos_receber (id_cliente, valor,pago,saldo,data_emissao,data_pagamento) VALUES ('1','100','10','90','2023-03-01','2023-03-10')";
              
           if ($conn->query($sql) === TRUE) {
             echo "Inserir titulos_receber feito successfully";
           } else {
             echo "Error creating table: " . $conn->error;
           }

          // sql to create table
          $sql = "CREATE OR REPLACE TABLE fornecedor (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome varchar(100),
            telefone varchar(50),
            cpf varchar(50)
            )";
            
            if ($conn->query($sql) === TRUE) {
              echo "Table titulos_receber created successfully";
            } else {
              echo "Error creating table: " . $conn->error;
            }
    
             //inclusão de clientes
             $sql = "INSERT INTO fornecedor (nome, telefone, cpf) VALUES ('Rafael','940028922','12345678910')";
                
             if ($conn->query($sql) === TRUE) {
               echo "Inserir titulos_receber feito successfully";
             } else {
               echo "Error creating table: " . $conn->error;
             }

        $conn->close();
        ?>
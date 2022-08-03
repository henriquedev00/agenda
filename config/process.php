<?php

session_start();

include_once('connections.php');
include_once('url.php');

$data = $_POST;

if(!empty($data)) {
    if($data['type'] === 'create') {
        try {
            $name = $data['name'];
            $phone = $data['phone'];
            $observations = $data['observations'];

            $query = 'INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)';

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':observations', $observations);

            $stmt->execute();

            $_SESSION['msg'] = 'Contato criado com sucesso!';
        } catch(PDOException $e) {
            $error = $e->getMessage();

            $_SESSION['msg'] = $error;
        }
    } elseif($data['type'] === 'edit') {
        try {
            $id = $data['id'];
            $name = $data['name'];
            $phone = $data['phone'];
            $observations = $data['observations'];

            $query = 'UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id';

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':observations', $observations);
            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $_SESSION['msg'] = 'Contato atualizado com sucesso!';
        } catch(PDOException $e) {
            $error = $e->getMessage();

            $_SESSION['msg'] = $error;
        }
    } elseif($data['type'] === 'delete') {
        try {
            $id = $data['id'];

            $query = 'DELETE FROM contacts WHERE id = :id';

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $_SESSION['msg'] = 'Contato deletado com sucesso!';
        } catch(PDOException $e) {
            $error = $e->getMessage();

            $_SESSION['msg'] = $error;
        }
    }
    
    header("Location: " . $BASE_URL . "../index.php");
} else {
    $id;

    if(!empty($_GET)) {
        $id = $_GET['id'];
    }

    if(!empty($id)) {
        try {
            $id = $_GET['id'];

            $query = 'SELECT * FROM contacts WHERE id = :id';

            $stmt = $conn->prepare($query);

            $stmt->bindParam(':id', $id);
        
            $stmt->execute();
    
            $contact = $stmt->fetch();
        } catch(PDOException $e) {
            $error = $e->getMessage();

            $_SESSION['msg'] = $error;
        }
        
    } else {
        try {
            $query = 'SELECT * FROM contacts';

            $stmt = $conn->prepare($query);
    
            $stmt->execute();
    
            $contacts = $stmt->fetchAll();
        } catch(PDOException $e) {
            $error = $e->getMessage();

            $_SESSION['msg'] = $error;
        }
    } 
}  

$conn = null;

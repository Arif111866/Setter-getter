<?php

include 'Book.php';
include 'Customer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["create_book"])) {
        $isbn = $_POST["isbn"];
        $title = $_POST["title"];
        $author = $_POST["author"];
        $available = $_POST["available"];

        $book = new Book($isbn, $title, $author, $available);
        echo "Book Created: $book";
    } elseif (isset($_POST["create_customer"])) {
        $id = $_POST["customer_id"];
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $email = $_POST["email"];

        $customer = new Customer($id, $firstName, $lastName, $email);
        echo "Customer Created: $customer";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Book and Customer Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Book Information</h1>
    <form action="main.php" method="post">
        ISBN: <input type="text" name="isbn"><br>
        Title: <input type="text" name="title"><br>
        Author: <input type="text" name="author"><br>
        Available Copies: <input type="text" name="available"><br>
        <input type="submit" name="create_book" value="Create Book">
    </form>

    <h1>Customer Information</h1>
    <form action="main.php" method="post">
        ID: <input type="text" name="customer_id"><br>
        First Name: <input type="text" name="first_name"><br>
        Last Name: <input type="text" name="last_name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="create_customer" value="Create Customer">
    </form>
</body>
</html>

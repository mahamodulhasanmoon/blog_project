<?php

class BlogApp {
    public function __construct() {
        // database user pass name and host
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'blogapp';

        // Check if the MySQLi extension is enabled
        if (!extension_loaded('mysqli')) {
            die('MySQLi extension is not enabled. Please enable it in your PHP configuration.');
        }

        // Create a connection to the database
        $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        // Check the connection
        if ($this->conn->connect_error) {
            die('Can not connect to the database: ' . $this->conn->connect_error);
        }
    }

    public function admin_login($data) {
        $email = $data['email'];
        $password = md5($data['password']);

        $query = "SELECT * FROM `admin_info` WHERE email='$email' AND password='$password'";
         
        $admin_info = mysqli_query($this->conn, $query);

        if ($admin_info) {
            header('location: dashboard.php');

           $admin_Data = mysqli_fetch_assoc($admin_info);

           session_start();

           $_SESSION['adminID'] = $admin_Data['id'];
           $_SESSION['adminName'] = $admin_Data['name'];

        } else {
            echo 'Login failed. Please check your credentials.';
        }
    }

    public function adminLogout() {
        unset($_SESSION['adminID']);
        unset($_SESSION['adminName']);
        header('location: index.php');
    }

    //  for add Category Functions

    public function add_category($data) {
        $cat_name = $data['category_name'];
        $cat_des = $data['category_description'];

        $query = "INSERT INTO categories (category_name, category_description) VALUES ('$cat_name', '$cat_des')";
        if ($conn->query($query) === TRUE) {
            return "Category added successfully";
        } else {
            return "Error adding category";
        }

    }
}

?>

    <?php
    include('./config/db.php');

        if (isset($_POST['btncreate'])) {
            if(isset($_SESSION["shopping_cart"]))  
            { 
                $query = "SELECT prd_id FROM product WHERE prd_id = item_id LIMIT 1";
                $ord_prd_id = mysqli_query($conn, $query);
                $firstname= $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $postcode = $_POST['postcode'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $note = $_POST['note'];
                $query = "INSERT INTO purchase (firstname,ord_prd_id,lastname,address,city,postcode,email,phone,note) VALUES ('$firstname','$ord_prd_id ','$lastname','$address','$city','$postcode','$email','$phone','$note')";
                $result = mysqli_query($conn, $query);
                if(!$result) {
                    die("Query Failed.");
                }else {
                    header('Location: success.php');
                }
        }
}
    ?>
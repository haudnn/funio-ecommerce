    <?php
    include('./config/db.php');
    if(isset($_SESSION["shopping_cart"]))  
      {  
        if (isset($_POST['btncreate'])) {
                $firstname= $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $postcode = $_POST['postcode'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $note = $_POST['note'];
                $query = "INSERT INTO purchase (firstname,lastname,address,city,postcode,email,phone,note) VALUES ('$firstname','$lastname','$address','$city','$postcode','$email','$phone','$note')";
                $result = mysqli_query($conn, $query);
                if(!$result) {
                    die("Query Failed.");
                }else {
                    header('Location: success.php');
                }
        }
}
    ?>
<?php
include("connection.php");
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $delete_query = mysqli_query($connection, "delete from tbl_event where id='$id'");
}

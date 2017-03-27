
        <?php

        header('Access-Control-Allow-Origin: *');


        $connection = mysqli_connect("localhost","root","");

        if(!$connection) {
                die('Could not connect: ' . mysqli_error($connection));
        } 
        // else {
        //         echo "Connected successfully";
        // }


        mysqli_select_db($connection,'userInfo_db') or die('Could not select database:' .mysqli_error($connection));

        
        if($_POST['userId']) {

                $userId = $_POST['userId'];
                $password = $_POST['pswd'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $address = $_POST['address'];
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $ans1 = $_POST['ans1'];
                $ans2 = $_POST['ans2'];
                $interest = $_POST['interest'];


                // $dataString = "userId= " +$userId+ ", password= "+$password+ 
                // ", email= "+$email+ ", mobile= "+$mobile;


                $q = "INSERT INTO userIn VALUES ('$userId','$password',
                        '$email','$mobile','$address','$q1','$q2','$ans1','$ans2','$interest')";

                $query = mysqli_query($connection,$q);

                if($query) {
                        echo "Data inserted into the database successfully!!";
                } else {
                        die('Insertion Failed:' .mysqli_error($connection)) ;
                }
        }
?>



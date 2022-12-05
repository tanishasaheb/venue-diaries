<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="contact-form">
        <h1>Book Now</h1>
        <form action="#" method="POST">
        <div class="txtb">
            <label>Full Name</label>
            <input type="text" name="name" value="" placeholder="Enter Your name">
        </div>


        <div class="txtb">
            <label>Phone Number :</label>
            <input type="text" name="num" value="" placeholder="Enter Your Phone Number">
        </div>

        <div class="txtb">
            <label>Date:</label>
            <input type="date" name="dt" >
        </div>

        <div class="txtb">
            <label>Time :</label>
            <input type="text" name="tim" placeholder="Suitable time">
        </div>
        <button name="book" class="btn">Book</button>
    </div>
</form>
    <div class="footer-main-div" style="margin-top: 50%">
            <div class="footer-social-icon">
                <ul>
                    <li><a href="#" target="blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="blank"><i class="fa fa-youtube"></i></a></li>

                </ul>   
            </div>

            <div class="footer-content">
                <ul>
                    <li><a href="about.html" target=center>About Us</a></li>
                    <li><a href="contact.html" target=center>Contact Us</a></li>
                    <li><a href="terms.html">Terms and Conditions</a></li>

                </ul>   
            </div>  
        </div>
    </body>
    </html>
    <?php
        if(isset($_POST['book'])){

        if(empty($_POST['name'])||
        empty($_POST['num']) ||
        empty($_POST['dt']) ||
        empty($_POST['tim'])){
            echo"<script>alert('All fields required');</script>";
        }
        else{
            if(!strlen($_POST['num']) == 10){
                echo'<script>alert("Mobile number should be of 10 digits only");</script>';
            }else{
    
                $fullname=$_POST['name'];
                $c_num=$_POST['num'];
                $date=$_POST['dt'];
                $time=$_POST['tim'];

                $con =  mysqli_connect('localhost','root','','venue_diaries');
                mysqli_select_db($con,'venue_diaries');
                $sql="INSERT INTO book(`fullname`, `phonenumber`, `date`, `time`) VALUES('$fullname','$c_num', '$date', '$time')";
				$query=mysqli_query($con,$sql);
				if($query)
                {
					echo"<script>alert('Your venue has been booked!! We will contact you soon!!'); location='home.php';</script>";
                }
                else
                {
                    echo"<script>alert('Invalid Insertion!!');</script>";
                }



            }
    
            
        }
       
        }
    ?>
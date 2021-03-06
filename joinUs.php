<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ACE | JoinUs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/calendar.css" />
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro|Quicksand|Raleway|Rozha+One" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/calendar.js"></script>
    <link rel="shortcut icon" href="img/smalllogo.png" />
</head>

<body class="joinus">
    <a class="anchor slideshow" id="anchor"></a>
    <div class="header" id="navigation">
        <a href="index.html">
            <img class="logo" src="img/logo.png">
        </a>
        <a href="classes.html">Classes</a>
        <a href="trainers.html">Trainers</a>
        <a href="clients.html">Clients</a>
        <a href="programs.html">Programs</a>
        <a href="business.html">Business</a>
        <a href="joinUs.php">Join Us</a>
        <a href="javascript:void(0)" class="icon" onclick="response()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="headerInvisible" id="headerInvisible">
        <div class="link">
            <a href="classes.html">Classes</a>
            <a href="trainers.html">Trainers</a>
            <a href="clients.html">Clients</a>
            <a href="programs.html">Programs</a>
            <a href="business.html">Business</a>
            <a href="joinUs.php">Join Us</a>
        </div>
    </div>

    <div class="containerContact">
        <div class="calendar">
            <div id="header">
                <div id="date">
                    <p id="datetext"></p>
                </div>
                <div id="today">
                    <button id="todaybutton">Today</button>
                </div>
            </div>
            <div class="datelistcontainer">
                <div class="datelist">
                    <div id="datelist">
                        <div>
                            <button class="w3-button2 w3-display-left2 w3-black2">&#10094;</button>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week1">
                    
                            </div>
                            <div class="day" id="day1">
                    
                            </div>
                            <div class="calendarcircle" id="circle1">
                    
                            </div>
                            <div class="indicator" id="indicator1">
                    
                            </div>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week2">
                    
                            </div>
                            <div class="day" id="day2">
                    
                            </div>
                            <div class="calendarcircle" id="circle2">
                    
                            </div>
                            <div class="indicator" id="indicator2">
                    
                            </div>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week3">
                    
                            </div>
                            <div class="day" id="day3">
                    
                            </div>
                            <div class="calendarcircle" id="circle3">
                    
                            </div>
                            <div class="indicator" id="indicator3">
                    
                            </div>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week4">
                    
                            </div>
                            <div class="day" id="day4">
                    
                            </div>
                            <div class="calendarcircle" id="circle4">
                    
                            </div>
                            <div class="indicator" id="indicator4">
                    
                            </div>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week5">
                    
                            </div>
                            <div class="day" id="day5">
                    
                            </div>
                            <div class="calendarcircle" id="circle5">
                    
                            </div>
                            <div class="indicator" id="indicator5">
                    
                            </div>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week6">
                    
                            </div>
                            <div class="day" id="day6">
                    
                            </div>
                            <div class="calendarcircle" id="circle6">
                    
                            </div>
                            <div class="indicator" id="indicator6">
                    
                            </div>
                        </div>
                        <div class="date notcurrentdate">
                            <div class="week" id="week7">
                    
                            </div>
                            <div class="day" id="day7">
                    
                            </div>
                            <div class="calendarcircle" id="circle7">
                    
                            </div>
                            <div class="indicator" id="indicator7">
                    
                            </div>
                        </div>
                        <div>
                            <button class="w3-button2 w3-display-right2 w3-black2">&#10095;</button>
                        </div>
                    </div>
                </div>
                <div class="agenda">

                </div>

                <div class="detail" id="myModal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact">
            <p id="title">We welcome your<br> concern!</p>
            <p id="address">
                <span>931 Progress Ave unit 13</span>
                <br>
                <span>Scarborough, ON M1G 3V5</span>
            </p>
            <p id="phone">
                <span>Tel: 647&#8208;606&#8208;9655</span>
            </p>
            <p id="wechat">Wechat: teamace2016</p>
            <p id="instagram">Instagram: acewarehousegym</p>

            <form name="contactus" onsubmit="return validateForm()" action="" method="post">
                <input type="text" placeholder="Name*" name="name" required>
                <br>
                <input type="text" placeholder="Email*" name="email" required>
                <br>
                <input type="text" placeholder="Phone" name="phone">
                <br>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                <br>
                <input id="button" type="submit" value="Send">
            </form>
        </div>
    </div>

    <div class="footer">
        <div class="author">
            <p>&copy; 2018 by Cherrina Hong.</p>
        </div>
        <div class="backtop">
            <a href="#anchor"><i class="fas fa-angle-up"></i></a>
        </div>
    </div>    
</body>

</html>

<?php
if(isset($_POST['email'])) {

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $message = $_POST['message']; // not required


    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to1 = "info@acewarehousegym.ca";
    $email_subject1 = "Form details";
    $email_to2 = $email;
    $email_subject2 = "Thanks for contacting us!";

    
    $email_message1 = "Form details below.\n\n";
    $email_message1 .= "Name: ".$name."\n";
    $email_message1 .= "Email: ".$email."\n";
    $email_message1 .= "Telephone: ".$phone."\n";
    $email_message1 .= "Message: ".$message."\n";

    $email_message2 = "Thank you for contacting us. We will be in touch with you very soon.\n\n";

    
    // create email headers
    $headers1 = "From: ACE Warehouse Gym<$email>"."\r\n" ."Reply-To: ACE Warehouse Gym<$email>"."\r\n" .'X-Mailer: PHP/' . phpversion();
    $headers2 = "From: ACE Warehouse Gym<$email_to1>"."\r\n" ."Reply-To: ACE Warehouse Gym<$email_to1>"."\r\n" .'X-Mailer: PHP/' . phpversion();

    $status = mail($email_to1, $email_subject1, $email_message1, $headers1);  
    mail($email_to2, $email_subject2, $email_message2, $headers2); 
}
?>
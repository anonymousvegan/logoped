<?php
if(isset($_POST["button"])){
    $ime=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $poruka=$_POST["message"];
    $to = "majjunjulavgust@gmail.com";
    $subject ='pitanje sa sajta';
    $message='<p>imate novo pitanje na  sajtu logopedijaOT</p> <br> <br>';
    $message.='<p>ime='.$ime."<p></br>";
    $message.='<p>Email='.$email."<p></br>";
    $message.='<p>predmet='.$subject."<p></br>";
    $message.='<p>poruka:<br>'.$poruka."<p></br>";
    $hendlers ="From: mojapesma <podrska@mojapesma.com>\r\n";
    $hendlers .="Replay-To: podrska@mojapesma.com\r\n";
    $hendlers .="Content-type: text/html\r\n";
    mail($to, $subject, $message, $hendlers);
    header("location: index.php?send=yes");
}
else{
    header("location: index.html?send=no");
}
?>
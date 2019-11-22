<?php 
    if (isset($_POST['submit'])) {
        require 'phpmailer/PHPMailerAutoload.php';

        function sendmail($to, $from, $fromname, $body, $attachment){
            $mail = new PHPMailer();
            $mail->setFrom($from, $fromName);
            $mail->addAddress($to);
            $mail->addAttachment($attachment);
            $mail->Subject = 'Contact Form - Email';
            $mail->Body = $body;
            $mail->isHTML(isHtml: false);

            return $mail->send();
        }

        $name = $_POST['username'];
        $email = $_POST['email'];
        $body= $_POST['body']

        $file = "attachment/" . basename($_FILES['attachment']['name']);
        echo "<pre>";
        print_r($_FILES);
    }
?>

<!DOCTYPE html>
 <html lang="us">
  <html>
   <head>
   	 <title>Welcome | Landing Page!</title>
   	  <link rel="icon" href="https://img.icons8.com/office/40/000000/virus-free.png">
   	  <meta charset="utf-8">
   	  <meta name="viewport" consent="width=device-width, initial-scale=1, user-scable=no">
        <meta http-equiv="X=UA-Compatible" content="IE=edge">
   	  <!-- Access code for SARIN-->
   	  <meta name="Keywords" content="V-F32K0R32KD320JF032HFJASD324J3DKKHDK3RKNR32IF32NKJ3FKJNF32UIFN23JNFMDSKF3RF84FN842NF42JKFN4U-KEYCLEARANCE-341KD31KMD31VFDVMK42VK42LVXCKLVW2424KL42542LKFM42F24">
   	  <meta name="description" content="POSTIVE RESULT (ACOMPLISH:C1L)">
   	  <!-- Link to resource sheets -->
   	  <link rel="stylesheet" href="css/navbar/navbar.css"/>
        <link rel="stylesheet" href="css/index2/slideshow.css"/>
   	  <!-- Should SARIN link in Google Fonts? (Not Secure) -->
   	  <link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland|Neucha|Neuton" rel="stylesheet">
   	  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Anton|Bebas+Neue|Big+Shoulders+Text|Bowlby+One+SC|Caveat|Dancing+Script|Hind|Indie+Flower|Lato|Lobster|Montserrat|Open+Sans+Condensed:300|Oswald|Pacifico|Permanent+Marker|Playfair+Display|Raleway|Shadows+Into+Light|Staatliches|Teko|Trade+Winds&display=swap" rel="stylesheet">
   	  <!-- Is SARIN using external APIS? If so hook below? -->
   	  <script language="JavaScript" src="https://ssl.geoplugin.net/javascript.gp?k=8b890b3eb8bfe361" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
    <!-- Navigation Bar-->
     <body>
       <nav>
         <label class="logo">FreePhotos.io</label>
         <ul>
            <li><a class="current" href="index1.html">Services</a></li>
            <li><a href="index2.html">About</a></li>
            <li><a href="index3.html">Team</a></li>
            <li><a href="index4.html">Contact</a></li>
         </ul>
         <label id="icon"><i class="fas fa-bars"></i></label>
      </nav>
       <!-- Mobile Scrolling -->
        <section></section>
          <script type="text/javascript">
             $(document).ready(function(){
               $('#icon').click(function(){
                  $('ul').toggleClass('active');
               });
             });
          </script>
           <!-- Addresses navbar rulling over content bug -->
            <div class="godown-50" id="godown"></div>
           <!-- Fixes godowns problems -->
          <script>
            $("#navMenu").resize(function () {
               $('#godown').height($("#navMenu").height() + 10);
               });
                  if ($("#navMenu").height() > $('#godown').height()) $('#godown').height($("#navMenu").height() + 10);
          </script>
          <style type="text/css">
            input, textarea {
              width: 250px;
              height: 27px;
              margin-bottom: 10px;
            }

            textarea {
              height: 100px;
              resize: vertical;
            }

            body {
              text-align: center;
              margin-top: 250px;

            }

          </style>
          <img src="https://img.icons8.com/office/40/000000/virus-free.png"><br><br>
          <form method="post" action="index4.php" enctype="multipart/form-data">
              <input type="text" name="username" placeholder="Name..." required><br>
              <input type="email" name="email" placeholder="Email..." required><br>
              <textarea name="body" required></textarea><br>
              <input type="file" name="attachment" required><br>
              <input type="submit" name="submit" value="Send Email">
          </form>


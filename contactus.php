<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  /* Google Font CDN Link */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  body {
    background-color: rgba(20, 108, 68, 0.1);
  }

  .container-fluid {
    width: 85%;
    background: #fff;
    border-radius: 6px;
    margin-top: 30px;
    padding: 20px 60px 30px 40px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  .container-fluid .content {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .container-fluid .content .left-side {
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
  }

  .content .left-side::before {
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
  }

  .content .left-side .details {
    margin: 14px;
    text-align: center;
  }

  .content .left-side .details i {
    font-size: 30px;
    color: #198754;
    margin-bottom: 10px;
  }

  .content .left-side .details .topic {
    font-size: 18px;
    font-weight: 500;
  }

  .content .left-side .details .text-one,
  .content .left-side .details .text-two {
    font-size: 14px;
    color: #afafb6;
  }

  .container-fluid .content .right-side {
    width: 75%;
    margin-left: 75px;
  }

  .content .right-side .topic-text {
    font-size: 23px;
    font-weight: 600;
    color: #198754;
  }

  .right-side .input-box {
    height: 50px;
    width: 100%;
    margin: 12px 0;
  }

  .right-side .input-box input,
  .right-side .input-box textarea {
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
  }

  .right-side .message-box {
    min-height: 110px;
  }

  .right-side .input-box textarea {
    padding-top: 6px;
  }

  .right-side .button {
    display: inline-block;
    margin-top: 12px;
  }

  @media (max-width: 950px) {
    .container-fluid {
      width: 90%;
      padding: 30px 40px 40px 35px;
    }

    .container-fluid .content .right-side {
      width: 75%;
      margin-left: 55px;
    }
  }

  @media (max-width: 820px) {
    .container-fluid {
      margin: 40px 0;
      height: 100%;
    }

    .container-fluid .content {
      flex-direction: column-reverse;
    }

    .container-fluid .content .left-side {
      width: 100%;
      flex-direction: row;
      margin-top: 40px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .container-fluid .content .left-side::before {
      display: none;
    }

    .container-fluid .content .right-side {
      width: 100%;
      margin-left: 0;
    }
  }

  .right-side .button input[type="submit"] {
    color: #fff;
    outline: none;
    border: none;
    font-size: 18px;
    border-radius: 6px;
    background-color: #198754;
    cursor: pointer;
    padding: 8px 16px;
    transition: all 0.3s ease;
  }

  .button input[type="submit"]:hover {
    background-color: #146c44;
  }

  nav a:hover {
    font-size: 1.1em;
    font-weight: 500;

  }
</style>

<body>
  <!-- the menu bar -->
  <nav class="navbar sticky navbar-light bg-success">
    <div class="container">
      <p class="navbar-brand text-white styling">
        <strong>GreenWorks</strong>
      </p>
      <a class="nav-link active text-white" href="globallistofworks.php">Les GreenWorks</a>
      <a class="nav-link text-white" href="login.php">Mes GreenWorks</a>
      <a class="nav-link text-white" href="whoarewe.php">Qui sommes Nous</a>
      <a class="nav-link text-white" href="contactus.php">Contactez-nous</a>
    </div>
  </nav>
  <!-- ccontent -->
  <div class="container-fluid">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adresse</div>
          <div class="text-one">34 rue 34</div>
          <div class="text-two">Tetouan ,Maroc</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Telephone</div>
          <div class="text-one">+212 000000</div>
          <div class="text-two">+212 567465</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">GreenWorks@gmail.com</div>
          <div class="text-two">info.greenworks@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Envoyer un message</div>
        <p>Si vous avez des questions en ce qui concerne notre projet, ou recontrer des problemes n'hesitez pas de nous messager, il nous fait plaisir de vous aider. </p>
        <form action="#" method="POST">
          <div class="input-box">
            <input type="text" name="name" placeholder="Entrer votre nom">
          </div>
          <div class="input-box">
            <input type="text" name="email" placeholder="Entrer votre email">
          </div>
          <div class="input-box message-box">
            <textarea name="msg" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="button ">
            <input class="btn btn-success" type="submit" name="submit" value="Envoyer">
          </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
          extract($_POST);
          try{
            include('dbconnexion.php');
            $t=$db->prepare("INSERT INTO messages(name,email,msg) values(?,?,?)");
            $t->execute([$name,$email,$msg]);
          }catch(PDOException $ttt){
            die("error while insertin ".$ttt->getMessage());
          }
        }
//         use PHPMailer\PHPMailer\PHPMailer; 
// use PHPMailer\PHPMailer\Exception; 
 
// require 'PHPMailer/Exception.php'; 
// require 'PHPMailer/PHPMailer.php'; 
// require 'PHPMailer/SMTP.php'; 
 
// $mail = new PHPMailer; 
 
// $mail->isSMTP();                      // Set mailer to use SMTP 
// $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
// $mail->SMTPAuth = true;               // Enable SMTP authentication 
// $mail->Username = 'user@gmail.com';   // SMTP username 
// $mail->Password = 'gmail_password';   // SMTP password 
// $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
// $mail->Port = 587;                    // TCP port to connect to 
 
// // Sender info 
// $mail->setFrom('sender@codexworld.com', 'CodexWorld'); 
// $mail->addReplyTo('reply@codexworld.com', 'CodexWorld'); 
 
// // Add a recipient 
// $mail->addAddress('recipient@example.com'); 
 
// //$mail->addCC('cc@example.com'); 
// //$mail->addBCC('bcc@example.com'); 
 
// // Set email format to HTML 
// $mail->isHTML(true); 
 
// // Mail subject 
// $mail->Subject = 'Email from Localhost by CodexWorld'; 
 
// // Mail body content 
// $bodyContent = '<h1>How to Send Email from Localhost using PHP by CodexWorld</h1>'; 
// $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
// $mail->Body    = $bodyContent; 
 
// // Send email 
// if(!$mail->send()) { 
//     echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
// } else { 
//     echo 'Message has been sent.'; 
// } 
 
?>
       

      </div>
    </div>
  </div>
  <footer class="navbar mt-2 py-3 bg-light">
    <div class="container">
      <span class="text-muted">GreenWorks 2022/2021</span>
      <a class="navbar-brand" href="Homepage.php">Acceuil</a>
    </div>
  </footer>
</body>

</html>
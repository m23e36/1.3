<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pop-Up Box Desing</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form id="contact" action="mail.php" method="post">
    <textarea name="message" placeholder="اكتب...!" tabindex="5" class="ssa"></textarea><br>
    <input onclick="OpnePopUpBox()" type="submit" class="btn"  name="send" id="contact-submit"  value="أرسل">
    </form>

</body>
</html>
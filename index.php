<?php

if (isset($_POST['download'])) {
  $imgUrl = $_POST['imgUrl'];
  $ch = curl_init($imgUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $download = curl_exec($ch);
  curl_close($ch);
  header('Content-type: image/jpg');
  header('Content-Disposition: attachment; filename="thumbnail.jpg"');
  echo $download;
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/svg+xml" href="./assets/reshot-icon-download-G65USJMV9W.svg" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Downloadd Thumbnails</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header class="header">Download Thumbnail</header>
    <div class="url-input">
      <span class="title"> Paste video URL : </span>
      <div class="field">
        <input class="url" type="text" placeholder="https://www.youtube.com/watch?v=g6ZH3gS8Vc8&list=RDMMg6ZH3gS8Vc8&start_radio=1" required />
        <input class="hidden-input" type="hidden" name="imgUrl" />
      </div>
    </div>
    <div class="preview-area">
      <img src="" alt="" class="thumbnail" />
      <i class="icon fas fa-cloud-download-alt"></i>
      <span class="paste-video">Paste video url to see preview</span>
    </div>
    <button class="download-btn" type="submit" name="download">Download</button>
  </form>










  <script src="script.js"></script>
</body>

</html>
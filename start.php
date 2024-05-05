<?php 
$view_head_height = 100

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML Input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

<?php require_once("iframe-css.php") ?>
  
<script>
var sendButton = 0;  // クリックされたボタン番号をセット
function checkForm() {
  if ( sendButton == 1 ) {
    if ( !confirm( "送信1 が使用されました。\n\n送信しますか?" ) ) {
      return false;
    }
  }
  if ( sendButton == 2 ) {
    if ( !confirm( "送信2 が使用されました。\n\n送信しますか?" ) ) {
      return false;
    }
  }
  return true;
}
</script>
  
</head>
<body>
<h1 class="alert alert-primary">FORM 送信時、クリックしたボタンを判断する</h1>

<div id="main" class="m-4">

  <form
      onsubmit="return checkForm();"
      action="form-action.php"
      target="myframe">

    <input
      type="submit"
      name="send"
      value="送信1"
      onclick="sendButton=1"
      class="btn btn-primary">
    
    <input
      type="submit"
      name="send"
      value="送信2"
      onclick="sendButton=2"
      class="btn btn-success ms-4">

  </form>

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

</div>

<iframe id="extend" src="about:blank" name="myframe"></iframe>
</body>
</html>



<?//php phpinfo() ?>
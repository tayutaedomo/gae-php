<?php
session_start();

$key = 'count';
if (is_null($_SESSION[$key])) {
  $_SESSION[$key] = 0;
}
$_SESSION[$key] += 1;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>session</title>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<!-- Compressed CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.1.1/foundation.min.css">
<!-- Compressed JavaScript -->
<script src="https://cdn.jsdelivr.net/foundation/6.1.1/foundation.min.js"></script>
</head>
<body>
<div class="row">
  <div class="small-12">
    <div class="success callout">
      <p>Count: <?php print $_SESSION[$key] ?></p>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function(){ $(document).foundation(); });
</script>
</body>
</html>


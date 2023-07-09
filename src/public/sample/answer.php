<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Reiwa;


$reiwa = filter_input(INPUT_POST, 'time');
try {
    $reiwaObj = new Reiwa($reiwa);
    $ad = $reiwaObj->toAD()->value();
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./index.php');
    exit();
}
?>

<body>

  <h1><?php echo $ad; ?></h1>
  
  <a href="./index.php">Top画面へ</a>
</body>
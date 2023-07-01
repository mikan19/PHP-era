<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\EraConverter;

$era = filter_input(INPUT_POST, 'era', FILTER_VALIDATE_INT);
$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);

try {
    $converter = new EraConverter();
    $convertedYear = $converter->warekiToGregorian($era, $year);
} catch (\Exception $e) {
    session_start();
    $_SESSION['errorMessage'] = $e->getMessage();
    header('Location: ./index.php');
    exit();
}
?>

<body>
  <h1><?php echo $convertedYear; ?></h1>
  <a href="./index.php">Top画面へ</a>
</body>

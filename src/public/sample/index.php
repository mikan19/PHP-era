<?php
session_start();
$errorMessage = $_SESSION['errorMessage'] ?? '';
unset($_SESSION['errorMessage']);
?>

<body>

<h1>和暦を西暦に変換しよう</h1>

<p><?php echo $errorMessage; ?></p>

  <form action="./answer.php" method="post">

    <table>

      <tr>
        <td><p>令和</p></td>
        <td><p><input type="number" name="time" placeholder="年"></p></td>
      </tr>

    </table>

    <input type="submit" value="何年か確認してみよう"> 

  </form>

  <a href="../index.php">Topへ</a>

</body>


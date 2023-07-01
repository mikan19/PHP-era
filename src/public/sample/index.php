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
      <td><p>和暦</p></td>
      <td>
        <select name="era">
          <option value="0">大正</option>
          <option value="1">昭和</option>
          <option value="2">平成</option>
          <option value="3">令和</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><p>年</p></td>
      <td><input type="number" name="year" placeholder="年" /></td>
    </tr>
  </table>
  <input type="submit" value="西暦を確認してみよう" />
</form>

<a href="../index.php">Topへ</a>

</body>

<!DOCTYPE html>
<html>
<body>

<h1> 暗証番号検索</h1>
<form method="post">
    <h3>名前とパスワードを入力すると、暗証番号が表示されます。</h3>
    名前: <input name="name" type="text" style="width: 200px; margin-right:20px"> パスワード: <input name="password" type="text" style="width: 200px">
    <br><input type="submit" value="送信">
</form>

<?php
    if(isset($_POST["name"]) && isset($_POST["password"])) {
        $name = $_POST["name"];
        $password= $_POST["password"];
        $sql = "SELECT * FROM users WHERE name=".$name." AND password=".$password;
    }
?>

</body>
</html>
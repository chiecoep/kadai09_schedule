<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>mamabi</title>
</head>

<body>

<div class="header">
    <?php include 'header.php'; ?>
</div>

<div class="menu">
    <?php include 'menu.php'; ?>
</div>

<div class="top_bg">
    <div class="top_bg_text">
        TITLE
    </div>
</div>

<form>
    <p><strong>ログイン</strong></p>
    <p>UserName：<input type="text" placeholder="Username" /></p>
    <p>PASSWord：<input type="password" placeholder="Password" /></p>
    <p><button type="submit" ref=>login</button></p>
</form>

<button onclick="location.href='entry.php'" class="linkds">登録ページ</button> / 
<button onclick="location.href='list.php'" class="linkds">検索ページ</button>


</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規アンケート登録</title>
  <link href="css/test.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="body">


<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="only.php">データ一覧を見る</a><br>
    <a class="navbar-brand" href="index.php">更新</a>
    </div>
    </div>
  </nav>
</header>

<div id ="haikei">
<form method="post" action="insert.php">
  <div class="jumbotron">
  <fieldset>
<legend>新規入場者登録画面</legend>
  
    <table border="1" width="500" bordercolor="#333333">
  <tr><td width="150">名前</td><td><input type="text" name="name" id="name"></td></tr>
  <tr><td width="150">Email</td><td><input type="email" name="email" id="email"></td></tr>
  <tr><td width="150">年齢</td><td><input type="text" style="width:50px" name="year">歳</td></tr>
  <tr><td width="150">所属会社</td><td><input type="text" name="company"></td></tr>
  <tr><td width="150">生年月日</td><td><select id = "nengo1" style="width:100px" name = "birth">
                <option value="昭和">昭和</option>
                <option value="平成">平成</option>
                </select>
            <input type="text" id = "birthday-year" style="width:50px" name="birthday-year">年
            <input type="text" id = "birthday-month"style="width:50px" name="birthday-month">月
            <input type="text" id = "birthday-day" style="width:50px" name="birthday-day">日 </td></tr>
  <tr><td width="150">性別</td><td><select id = "sex" style="width:50px" name="sex">
                <option value="男">男</option>
                <option value="女">女</option>
                </select></td></tr>
  <tr><td width="150">職種</td><td><input type="text" name="job"></td></tr><br>
  <tr><td width="150">経験年数</td><td><input type="text" style="width:50px" name="experience">年</td></tr>
     
    
     </table>
     <input type="submit" value="送信"><br>
     </fieldset>
  </div>

</form>
<form action="select.php" method="post" >
<fieldset>
<legend>会社名で検索</legend>
<label>会社名：<input type="text" name="keyword"></label>
 <input type="submit" value="検索"　width=100>
 </fieldset>
    </form>
    </div>


</body>
</html>

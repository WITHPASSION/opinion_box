<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "utf-8">
<title>新規質問作成画面</title>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form action = "" method = "post">
<div class = "container-fluid"
<div class = "col-xs-6 col-xs-offset-3">
	<label for = "name"> アンケート名</label>
	<div class = "form-group">
	<input type = "text"  name = "name" size = "30" placeholder = "アンケート名">	
	</div>
	<label for = "content">内容</label>
	<div class = "form-group">
	<textarea name = "content" cols = "30" rows = "4" placeholder = "アンケート内容"></textarea>
	</div>
	<label for = "choice1">選択肢1</label>
	<div class = "form-group">
	<input type = "text" name = "choice1" size = "30" placeholder = "選択肢１">
	</div>
	<label for = "choice2">選択肢２</label>
	<div class = "form-group">
	<input type = "text" name = "choice2" size = "30" placeholder = "選択肢２">
	</div>
	</div>
				   
	</form>
</body>　
</html>

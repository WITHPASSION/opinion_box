<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "utf-8">
<title>新規質問作成画面</title>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form class = "form-horizontal" role = "form">
<div class = "col-xs-offset-3">
	<h3>アンケート作成画面</h3>
	<div class = "form-group">
	<label for = "name" class = "col-sm-2 control-label"> アンケート名</label>
	<div class = "col-xs-4">
	<input type = "text" class = "form-control"name = "name"  placeholder = "アンケート名">	
	</div>
	</div>
	<div class = "form-group">
	<label for = "content" class = "col-sm-2 control-label">内容</label>
	<div class = "col-xs-4">
	<textarea class = "form-control" rows = "4" placeholder = "アンケート内容"></textarea>
	</div>
	</div>
	<div class = "form-group">
	<label for = "choice1" class = "col-sm-2 control-label">選択肢1</label>
	<div class = "col-xs-3">
	<input type = "text" class = "form-control"  name = "choice1" placeholder = "選択肢１">
	</div>
	</div>
	<div class = "form-group">
	<label for = "choice2" class = "col-sm-2 control-label">選択肢２</label>
	<div class = "col-xs-3">
	<input type = "text" class = "form-control" name = "choice2"  placeholder = "選択肢２">
	</div>
	</div>
	</div>
	<div class ="form-group">
	<div class = "col-sm-offset-6 col-xs-10">
	<input type = "button" class = "btn-primary" value = "選択肢追加">
	</div>
	</div>
	<div class = "col-sm-offset-6">
	<input type = "button" class = "btn-primary" value = "確認">
	<input type =  "button" class = "btn-primary" value = "戻る">
	</div>
				   
</form>
</body>　
</html>

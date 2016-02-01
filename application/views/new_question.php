<!DOCTYPE html>
<?php
	defined('BASEPATH') OR exit('NO direct script access allowe')
?>

<html lang = "ja">
<head>
	<meta charset = "utf-8">
	<title>新規質問作成画面</title>
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<script src = "/assets/js/bootstrap.min.js"></script>
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
					<textarea class = "form-control" rows = "4" name = "content" placeholder = "アンケート内容"></textarea>
				</div>
			</div>
			<div class = "form-group">
				<label for = "choice1" class = "col-sm-2 control-label">選択肢1</label>
				<div class = "col-xs-4">
					<input type = "text" class = "form-control"  name = "choice1" placeholder = "選択肢１">
				</div>
			</div>
			<div class = "form-group">
				<label for = "choice2" class = "col-sm-2 control-label">選択肢２</label>
				<div class = "col-xs-4">
				<input type = "text" class = "form-control" name = "choice2"  placeholder = "選択肢２">
				</div>
			</div>
		</div>
		<br>
		<div class ="form-group">
			<div class = "col-sm-offset-6 col-xs-10">
				<input type = "button" class = "btn-primary" value = "選択肢追加">
			</div>
		</div>
		<br>
		<div class = "form-inline">
				<input type = "button" class = "btn btn-defult col-xs-offset-4 col-xs-1" value = "戻る">
				<button type = "button" class = "btn btn-dfult col-sm-offset-1 col-xs-1" data-toggle="modal" data-target="#modal-confirm">確認</button>
		</div>
	</form>
</body>
</html>

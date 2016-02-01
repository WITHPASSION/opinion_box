<!DOCTYPE html>
<?php 
	defined('BASEPATH') OR exit('NO direct script access allowed');
?>

<html long = "ja">
<head>
	<meta charset = "utf-8">
	<link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
	<title>アンケート選択画面</title>
	</head>
	<body>

	<script src = "/assets/js/bootstrap.min.js"></script>
	<form class = "form-horizontal" role = "form">
		<div class = "col-xs-offset-3">
		<h3>アンケート選択画面</h3>
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
				<div class = "checkbox">
					<label>
						<input type = "checkbox" value = "checkbox">テスト１
					</label>
			</div>
			</div>
			<div class = "form-group">
				<div class = "checkbox">
					<label>
						<input type = "checkbox" value = "checkbox">テスト２
					</label>
				</div>
			</div>
		</div>
		</div>
		<br>
		<div class = "form-inline">
				<input type = "button" class = "btn btn-defult col-xs-offset-4 col-xs-1" value = "戻る">
				<button type = "button" class = "btn btn-dfult col-sm-offset-1 col-xs-1" data-toggle="modal" data-target="#modal-confirm">回答</button>
		</div>
	</form>
</body>
</html> 

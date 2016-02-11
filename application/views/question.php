<!DOCTYPE html>
<?php
	defined('BASEPATH') OR exit('NO direct script access allowe')
?>

<html lang = "ja">
<head>
	<meta charset = "utf-8">
	<title>新規質問作成画面</title>
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">	
	<script src = "/assets/js/jquery-2.2.0.min.js"></script>
			<script>
				$(function(){
						$('#sampleButton').click(function(){
								$('sampleModal').modal();
						});
				});
				</script>
	<script src = "/assets/js/bootstrap.min.js"></script>	
</head>
<body>
	<form class = "form-horizontal" role = "form" method = "post" >
		<div class = "col-xs-offset-3">
			<h3>アンケート作成画面</h3>

			<div class = "form-group">
				<label for = "name" class = "col-sm-2 control-label"> アンケート名</label>
				<div class = "col-xs-4">
					<input type = "text" class = "form-control"name = "question_name"  placeholder = "アンケート名">	
				</div>
			</div>
			<div class = "form-group">
				<label for = "content" class = "col-sm-2 control-label">内容</label>
				<div class = "col-xs-4">
					<textarea class = "form-control" rows = "4" name = "question_content" placeholder = "アンケート内容"></textarea>
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
				<input type = "button" class = "btn btn-primary" value = "選択肢追加">
			</div>
		</div>
		<br>
		<div class = "form-inline">
				<input type="button" class="btn btn-defult col-xs-offset-4 col-xs-1" value = "戻る" onclick = "history.back()">
				<button type="button" id="sampleButton" class="btn btn-defalut"> 確認</button>
		</div>
				<div class="modal fade" id="sampleModal" tabindex = "-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span>x</span>
								</button>
								<h4 class="modal-title">入力確認</h4>
							</div>
							<div class="modal-body">
								本文
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
								<button type="button" class="btn btn-primary">回答</button>
							</div>
						</div>
					</div>
				</div>
		</div>
	</form>
</body>
</html>

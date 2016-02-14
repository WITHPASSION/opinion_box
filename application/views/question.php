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
	<script src = "/assets/js/bootstrap.min.js"></script>
</head>
<body>

	<form id ="new_question_form"class = "form-horizontal" action = "Question_controller/create"  method = "post">
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
			<div  class = "form-group">
				<label for = "choice" class = "col-sm-2 control-label">選択肢</label>
				<div id = "textadd" class = "col-xs-4">
					<input type = "text"  class = "form-control"  name = "choice[]" placeholder = "選択肢">
				</div>
			</div>
		</div>
		<br>
		<div class ="form-group">
			<div class = "col-sm-offset-6 col-xs-10">
				<input id = "btnadd" type ="button" class = "btn btn-xs  btn-primary" value = "選択肢追加">
				<input id = "btn"type = "button" class = "btn btn-xs  btn-primary" value = "選択肢消去">
			</div>
		</div>

		<!--textbox自動追加js-->
		<script>
			$("#btnadd").on("click",function(){
				$("#textadd").append('<input type = "text" class = "form-control" name ="choice[]" placeholder = "選択肢"/>' );
			});
			$("#btn").on("click", function(){
					$("#textadd input:last-child").remove();
					});
	</script>

		<br>
		<div class = "form-inline">
				<input type="button" class="btn btn-defult col-xs-offset-4 col-xs-1" value = "戻る" onclick = "history.back()">
				<input type="submit" id = "confrim"class="btn btn-defalut col-xs-offset-1 col-xs-1" data-toggle = "modal" data-target = "#modal-confrim" value = "確認">
		</div>
				<!--<div class="modal fade" id="modal-confrim" tabindex = "-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span>x</span>
								</button>
								<h4 class="modal-title">入力確認</h4>
							</div>
							<div class="modal-body">
							<table id = "question_confrim" class = "table table-hover">
							<tbody>
								<tr><td>アンケート名</td><td name = "question_name"></td></tr>
								<tr><td>アンケート内容</td><td name = "question_content"></td></tr>
								<tr><td>選択肢</td><td name = "choice"></td></tr>
							</tbody>
							</table>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">修正</button>
								<input type = "submit" class = "btn btn-primary" value = "登録">
							</div>
						</div>
					</div>
				</div>-->

				<script>
					$('#confrim').on('click', function(){
						$('#question_confrim[name=question_name]') $('#new_question_form [name=question_name]').val();
						//alert(a);
					})



				</script>
		</div>
	</form>
</body>
</html>

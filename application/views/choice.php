<!DOCTYPE html>
<?php 
	defined('BASEPATH') OR exit('NO direct script access allowed');
?>

<html long = "ja">
<head>
	<meta charset = "utf-8">
	<link href = "/assets/css/bootstrap.min.css" rel = "stylesheet">
	<title>アンケート回答画面</title>
</head>
	<body>
	<div class = "text-center">
	<?= $question->question_name ?>
	<br>
	<br>
	<?= $question->question_content ?>
	<br>
	<br>
	<?php foreach ($choices as $choice){ ?>
	<?= $choice->choice ?>
	<input type = "radio" name = "choice">
	<br>
	<br>
	<?php } ?>
	</div>
		<div class = "center-block">
				<input type = "button" class = "btn btn-defult col-xs-offset-4 col-xs-1" value = "戻る">
				<button type = "button" class = "btn btn-dfult col-sm-offset-1 col-xs-1" data-toggle="modal" data-target="#modal-confirm">回答</button>
		</div>
	</form>
</body>
</html> 

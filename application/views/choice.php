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
	<form id = "answer_form" method = "post" action = "/Answer_controller/create">
		<div class = "text-center">
			<?= $question->question_name ?>
			<br>
			<br>
			<?= $question->question_content ?>
			<br>
			<br>
			<?php foreach ($choices as $choice){ ?>			
				<?= $choice->choice ?>
				<input type = "radio" name = "choice_id" value = <?=  $choice->id ?>>
				<br>
				<br>
			<?php } ?>
			<input type = "hidden" name = "question_id" value = <?= $choice->question_id?>>
		</div>
		<div class = "center-block">
				<input type = "button" class = "btn btn-defult col-xs-offset-4 col-xs-1" value = "戻る">
				<input type = "submit" class = "btn btn-dfult col-sm-offset-1 col-xs-1" data-toggle="modal" data-target="#modal-confirm" value = "回答">
		</div>
		</form>
	</body>
</html> 

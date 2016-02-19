<!DOCTYPE html>
<?php 
	defined('BASEPATH') OR exit('NO direct script access allowed');
?>

<html long="ja">
<head>
<meta charset="utf-8">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<title>アンケート集計画面</title>
</head>
	<body>
	<form id="answer_form" method="post" action="/Question_controller/updata">
		<div class="text-center">
			<?= $question->question_name ?>
			<br>
			<br>
			<?= $question->question_content ?>
			<br>
			<br>
			<?php foreach ($results as $result){ ?>			
				<?= $result->choice ?>
				<?= $result->count ?>
				<br>
				<br>
			<?php } ?> 
	</div>
	</body>
</html>

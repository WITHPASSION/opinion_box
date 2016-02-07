<!DOCTYPE html>
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang = "ja">
<head>
	<meta charset = "utf-8">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
     <title>topページ</title>
</head>
<body>
	<div class = "container-fluid">
	<div class = "col-xs-6 col-xs-offset-3">
	<h3>top画面</h3> 
	<table class = "table table-bordered table-hover">
		<thead>
			<tr>
				<th class = "text-center">アンケート名</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($questions as $question){ ?>
		<tr>
			<td class = "text-center"><?= $question->question_name ?> </td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
		<div class = "text-right">
		<td>
			<input type = "button" class = "btn-primary" value =  "アンケート作成" onclick = "location.href = 'index.php/Question'">
		</td>
		</div>
	</tr>
	</tbody>
	</div>　
	</div>
	</div>

</body>
</html>

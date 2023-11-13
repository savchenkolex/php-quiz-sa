<?php 
require_once 'partials/header.php';
?>
<div class="container">
	<div class="result-box">
		<p>Ви пройшли тест!</p>
		<p>Ось ваш результат:</p>
		<div class="result-table">
			<p><span>Всього:</span> 8</p>
			<p><span>Правильні відповіді:</span><?= $results["correct"] ?></p>
			<p><span>Неправильні відповіді:</span><?= $results["incorrect"] ?></p>
		</div>
	</div>
</div>
<?php
require_once 'partials/footer.php';
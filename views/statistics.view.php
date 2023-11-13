<?php 
require_once 'partials/header.php';
?>
	<div class="container">
		<table class="statistic-table">
			<thead>
				<tr>
					<td>Ім'я</td>
					<td>Всього</td>
					<td>Правильні</td>
					<td>Неправильні</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($results as $result) : ?>
					<tr>
						<td><?= $result["name"]?></td>
						<td><?= $result["total"]?></td>
						<td><?= $result["correct"]?></td>
						<td><?= $result["incorrect"]?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
<?php 
require_once 'partials/footer.php';
<?php 
require_once 'partials/header.php';
?>
<div class="container">
	<form method="POST" action="./result.php">
		<input 
			class="input-name" 
			type="text" 
			name="name" 
			required
			placeholder="Введіть ваше ім'я" 
			>
		<ol class="question-list">
			<li>
				<p>Що означає абревіатура PHP?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="01" id="0101" value="0101">
						<label for="0101">Public Hosting Platform</label>
					</li>
					<li>
						<input type="radio" name="01" id="0102" value="0102">
						<label for="0102">Preformated Hypertext Processor</label>
					</li>
					<li>
						<input type="radio" name="01" id="0103" value="0103">
						<label for="0103">PHP: Hypertext Preprocessor</label>
					</li>
					<li>
						<input type="radio" name="01" id="0104" value="0104">
						<label for="0104">Private Home Page</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Як створити змінну name в PHP?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="02" id="0201" value="0201">
						<label for="0201">$name</label>
					</li>
					<li>
						<input type="radio" name="02" id="0202" value="0202">
						<label for="0202">let name</label>
					</li>
					<li>
						<input type="radio" name="02" id="0203" value="0203">
						<label for="0203">variable name</label>
					</li>
					<li>
						<input type="radio" name="02" id="0204" value="0204">
						<label for="0204">?name</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Яка з наведених нижче функцій використвується для виведення тексту на екран у PHP?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="03" id="0301" value="0301">
						<label for="0301">display</label>
					</li>
					<li>
						<input type="radio" name="03" id="0302" value="0302">
						<label for="0302">echo</label>
					</li>
					<li>
						<input type="radio" name="03" id="0303" value="0303">
						<label for="0303">write</label>
					</li>
					<li>
						<input type="radio" name="03" id="0304" value="0304"> 
						<label for="0304">output</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Який оператор використовується для виконання умовних операцій у PHP?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="04" id="0401" value="0401">
						<label for="0401">for</label>
					</li>
					<li>
						<input type="radio" name="04" id="0402" value="0402">
						<label for="0402">foreach</label>
					</li>
					<li>
						<input type="radio" name="04" id="0403" value="0403">
						<label for="0403">loop</label>
					</li>
					<li>
						<input type="radio" name="04" id="0404" value="0404">
						<label for="0404">if</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Які з наступних функцій використовуються для з'єднання з базою даних PHP?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="05" id="0501" value="0501">
						<label for="0501">mysqli_connect</label>
					</li>
					<li>
						<input type="radio" name="05" id="0502" value="0502">
						<label for="0502">connect_to_db</label>
					</li>
					<li>
						<input type="radio" name="05" id="0503" value="0503">
						<label for="0503">db_open</label>
					</li>
					<li>
						<input type="radio" name="05" id="0504" value="0504">
						<label for="0504">db_connection</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Що означає абривіатура PDO?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="06" id="0601" value="0601">
						<label for="0601">PHP Database Object</label>
					</li>
					<li>
						<input type="radio" name="06" id="0602" value="0602">
						<label for="0602">Personal Data Organizer</label>
					</li>
					<li>
						<input type="radio" name="06" id="0603" value="0603">
						<label for="0603">PHP: Data Objects</label>
					</li>
					<li>
						<input type="radio" name="06" id="0604" value="0604">
						<label for="0604">Public Database Operator</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Який символ використовується для початку однорядкового коментаря в PHP?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="07" id="0701" value="0701">
						<label for="0701">/*</label>
					</li>
					<li>
						<input type="radio" name="07" id="0702" value="0702">
						<label for="0702">//</label>
					</li>
					<li>
						<input type="radio" name="07" id="0703" value="0703">
						<label for="0703">--</label>
					</li>
					<li>
						<input type="radio" name="07" id="0704" value="0704">
						<label for="0704">^^</label>
					</li>
				</ul>
			</li>
			<li>
				<p>Яким чином ви підключаєте файл з кодом PHP до іншого файлу?</p>
				<ul class="radio-btn-list">
					<li>
						<input type="radio" name="08" id="0801" value="0801">
						<label for="0801">include "file.php"</label>
					</li>
					<li>
						<input type="radio" name="08" id="0802" value="0802">
						<label for="0802">import "file.php"</label>
					</li>
					<li>
						<input type="radio" name="08" id="0803" value="0803">
						<label for="0803">link "file.php"</label>
					</li>
					<li>
						<input type="radio" name="08" id="0804" value="0804">
						<label for="0804">load "file.php"</label>
					</li>
				</ul>
			</li>
		</ol>
			<button class="btn" type="submit">Завершити</button>
	</form>
</div>
<?php
require_once 'partials/footer.php';
?>

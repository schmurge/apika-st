<?php
	// var_dump($_POST);

	$_name;
	$_phone;
	$_email;
	$_message;

	$validName = true;
	if (isset($_POST['name'])) {
		$_name = $_POST['name'] = trim($_POST['name']);
		$validName = !empty($_POST['name']);
		// var_dump($validName);
	}

	$validPhone = true;
	if (isset($_POST['phone'])) {
		$_phone = $_POST['phone'] = trim($_POST['phone']);
		$validPhone = !empty($_POST['phone']);
		// var_dump($validPhone);
	}

	$validEmail = true;
	if (isset($_POST['email'])) {
		$_email = $_POST['email'] = trim($_POST['email']);
		$validEmail = (bool)filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		// var_dump($validEmail);
	}

	$validMessage = true;
	if (isset($_POST['message'])) {
		$_message = $_POST['message'] = trim($_POST['message']);
		$validMessage = !empty($_POST['message']);
		// var_dump($validMessage);
	}

	$sent = false;
	if (isset($_POST['email']) && isset($_POST['message']) && isset($_POST['phone']) && isset($_POST['name']) && $validName && $validPhone && $validEmail && $validMessage) {
		$from = $_POST['email'];
		$subject = 'Заявка';
		$message = <<<EOM
<p>Данные заказчика:</p>
<p>$_name</p>
<p>$_phone</p>
<p>$_email</p>
<br/>
<p>Описание:</p>
<p>$_message</p>
EOM;

		$header = array(
			"From: ".$from,
		    "MIME-Version: 1.0",
		    "Content-Type: text/html;charset=utf-8",
		);

		$subject = "=?UTF-8?B?".base64_encode($subject)."?=";

		$sent = $result = mail("zakaz@apikastroy.ru",$subject,$message,implode("\n", $header));
		unset($_POST);
	}

?>
<div class="row">
	<div class="col-md-4">
		<h2>Контакты</h2>
		<h4>Телефоны:</h4>
		<p>8 (926) 324-29-66</p>
		<p>8 (925) 090-63-61</p>
		<h4>E-mail:</h4>
		<p><a href="mailto:zakaz@apikastroy.ru" target="_blank">zakaz@apikastroy.ru</a></p>
		<h4>Мы вКонтакте:</h4>
		<p><a href="http://vk.com/apikastroy" target="_blank">http://vk.com/apikastroy</a></p>
		<h4>Юридический адрес:</h4>
		<p>123056, Москва, ул. Большая Грузинская, дом 42, пом. I, комн. 12</p>
		<h4>Приём заказов:</h4>
		<p>понедельник — воскресенье с 9:00 до 19:00.</p>
		<h4>Банковские реквизиты:</h4>
		<p>р/с № 40702810400000011748 в КБ «МЕЖРЕГИОНАЛЬНЫЙ  ПОЧТОВЫЙ БАНК»</p>
		<p>ИНН 7703804784</p>
		<p>КПП 770301001</p>
	</div>
	<div class="col-md-8">
		<form id="addRequestForm" class="cmxform form" method="post" action="">
			<div class="col-md-12">
				<h2>Оставить заявку</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" id="name" name="name" class="form-control <?php echo $validName ? '' : ' error '; ?>" placeholder="Ваше имя" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"/>
					</div>
					<div class="form-group">
						<input type="text" id="phone" name="phone" class="form-control <?php echo $validPhone ? '' : ' error '; ?>" placeholder="Телефон" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>"/>
					</div>
					<div class="form-group">
						<input type="text" id="email" name="email" class="form-control <?php echo $validEmail ? '' : ' error '; ?>" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<textarea id="message" name="message" placeholder="Сообщение оператору" class="form-control <?php echo $validMessage ? '' : ' error '; ?>" style="height: 131px;"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<div>8 (926) 324-29-66</div>
					<div>8 (925) 090-63-61</div>
				</div>
				<div class="col-md-6">
					<?php if ($sent) : ?><p class="sent">Сообщение отправлено</p><?php endif; ?>
					<button type="submit" class="submit btn btn-default btn-lg gradient" style="width: 100%;">Отправить</button>
				</div>
				<br/><br/><br/><br/>
				<div class="col-md-12 text-center">
					<img src="/images/logo2.png">
				</div>
			</div>
		</form>
		<script>
			$(document).ready(function(){
				$("#addRequestForm").validate({
					debug: true,
					submitHandler: function(form) {
						form.submit();
					},
					rules: {
						name: {
							required: true
						},
						phone: {
							required: true
						},
						message: {
							required: true
						},
						email: {
							required: true,
							email: true
						}
					},
					messages: {
						name: '',
						phone: '',
						message: '',
						email: ''
					}
				});
			});
		</script>
	</div>
</div>
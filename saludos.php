<?php

$saludos = ['espanol' => '¡Hola!', 'english' => 'Hello!', 'frances' => 'Bonjour!','alemaniatic'=>'Hallo!', 'italiano'=>'Ciao!'];
$msg = ($_SERVER["REQUEST_METHOD"] == "POST") ? ($saludos[$_POST['idioma']] ?? '') : '';



?>

<!DOCTYPE html>
<html>
<body>
<form method="POST">
    
<select name="idioma" required>
    <option value="">Selecciona idioma</option>
        <?php foreach($saludos as $k => $v): ?>
            <option value="<?=$k?>" <?=(($_POST['idioma']??'')==$k)?'selected':''?>><?=ucfirst($k)?></option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Saludar</button>

</form>
    <img src="jamones.png" alt="vuelvale a marcar compa" class="img">

<link rel="stylesheet" href="estilos.css">

<?php if($msg): ?><p><b><?=htmlspecialchars($msg)?></b></p><?php endif; ?>
</body>
</html>

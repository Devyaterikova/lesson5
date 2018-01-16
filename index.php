<?php
$fileData = file_get_contents('telephone.json');
$data = json_decode($fileData, true);
?>
<html>
<head>
    <title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
</head>
<body>
<table>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адрес</td>
        <td>Телефон</td>
    </tr>
    <?php foreach ($data as $i => $telephone) { ?>
    <tr>
        <td><?php echo $telephone['firstName']; ?></td>
        <td><?php echo $telephone['lastName']; ?></td>
        <td><?php echo $telephone['address']; ?></td>
        <td><?php echo $telephone['phoneNumber']; ?></td>
    </tr>
   <?php }  ?>
</table>
</body>
</html>
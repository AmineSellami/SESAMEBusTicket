<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>

<body>
<?php
foreach($passengers as $passenger)
{
    ?>
    <div class="news">
        <h3>
            <?php echo $passenger['pid']; ?>
            <?php echo $passenger['name']; ?>
            <?php echo $passenger['email']; ?>
            <?php echo $passenger['mob']; ?>
        </h3>
    </div>
    <?php
}
?>
</body>
</html>
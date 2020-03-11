<?php
$times = ["ATLANTA HAWKS", "LOS ANGELES LAKERS", "CHICAGO BULLS"];
$total = sizeof($times);
?>
<html>
    <head>
        <title>NBA - <?php echo date("Y") ?></title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Times NBA</h1>

        <h2>Exibindo com while</h2>
        <?php
        $indice = 0;
        while ($indice < $total) {
            ?>
                <p><?php echo $times[$indice]; ?></p>

                <?php
        $indice = $indice + 1;
        }
        ?>

        <h2>Exibindo com while (mais limpinho)</h2>
        <?php
        $indice = 0;
        while ($indice < $total) {
            echo "<p>" . $times[$indice] . "</p>";
            $indice = $indice + 1;
        }
        ?>

        <h2>Exibindo com for</h2>
        <?php
        for ($indice = 0; $indice < $total; $indice = $indice + 1) {
            echo "<p>" . $times[$indice] . "</p>";
        }
        ?>

        <h2>Exibindo com for (limpinho)</h2>
        <?php
        for ($i = 0; $i < $total; $i++) {
            echo "<p>" . $times[$i] . "</p>";
        }
        ?>

        <h2>Exibindo com foreach</h2>
        <?php
        foreach ($times as $t) {
            echo "<p>" . $t . "</p>";
        }
        ?>

        <h2>Exibindo com foreach (limpinho)</h2>
        <?foreach ($times as $t) {?>
            <p><?echo $t; ?></p>
        <?}?>

        <h2>Exibindo com foreach (ainda mais limpinho)</h2>
        <?foreach ($times as $t) {?>
            <p><?=$t?></p>
        <?}?>

        <h2>Total</h2>
        <p><?php echo $total; ?></p>
    </body>
</html>
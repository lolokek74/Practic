<?php
$months=array(
    'Январь'=>31,
    'Февраль'=>'28 дней, если високосный год 29',
    'Март'=>31,
    'Апрель'=>30,
    'Май'=>31,
    'Июнь'=>30,
    'Июль'=>31,
    'Август'=>31,
    'Сентябрь'=>30,
    'Октябрь'=>31,
    'Ноябрь'=>30,
    'Декабрь'=>31
);
function option($str){
    echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="work_10.php">
        <p>Выберите месяц</p>
        <select name="month">
            <?php
            foreach ($months as $k => $v){
                option($k);
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
} else {
    $month = $_POST['month'];
    if ($month == 'Февраль'){
        echo "Месяц Февраль имеет " . $months['Февраль'] . ".";
    }else{
        echo "Месяц $month имеет $months[$month] дней.";
    }
}
?>

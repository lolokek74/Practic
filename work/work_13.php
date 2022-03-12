<?php
function ckBox(){
    $args=func_get_args();
    foreach ($args as $a){
        echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\" />".ucwords($a)."<br>\n";
    }
}

function listIt($args){
    if (!is_array($args)){
        $args = explode(',', $args);
    }
    foreach ($args as $a){
        echo "<li>" . ucwords($a). "</li>\n";
    }
}

if (!isset($_POST['submit'])){
    ?>
    <form method="post" action="work_12.php">
        <p>Пожалуйста, введите вашу информацию:</p>
        Город: <input type = "text" name = "city" />
        Месяц: <input type = "text" name = "month" />
        Год: <input type = "text" name = "year" />
        <p> Выберите тип погоды из списка ниже</p>
        <?php
        ckBox('солнце', 'облака', 'дождь', 'град', 'мокрый снег', 'снег', 'ветер', 'холод', 'тепло', 'туман', 'влажность');
        ?>
        <p/>
        <p> Что-нибудь еще? Пожалуйста, укажите дополнительные погодные условия в поле ниже,
            через запятую. </p>
        <input type="text" name="more" size="60" /><p/>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
}else{
    $inputLocal = array(
        $_POST['city'],
        $_POST['month'],
        $_POST['year']
    );
    echo "В городе $inputLocal[0] в месяце $inputLocal[1] $inputLocal[2] года, 
вы наблюдали следующую погоду:<br/> <ul>";
    $weather = $_POST['weather'];
    $more = $_POST['more'];
    listIt($weather);
    listIt($more);
    echo "</ul>";
}
?>

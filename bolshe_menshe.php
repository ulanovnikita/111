<!DOCTYPE html>
<html>
<head>
    <title>Сравнение чисел</title>
</head>
<body>
    <h2>Введите три числа:</h2>
    <form method="post" action="">
        <input type="text" name="number1" placeholder="Число 1">
        <input type="text" name="number2" placeholder="Число 2">
        <input type="text" name="number3" placeholder="Число 3">
        <input type="submit" name="submit" value="Сравнить">
    </form>

    <?php
    // Проверяем, были ли отправлены числа из формы
    if(isset($_POST['submit'])) {
        // Получаем введенные числа
        $number1 = intval($_POST['number1']); // Преобразуем введенные значения в целые числа
        $number2 = intval($_POST['number2']);
        $number3 = intval($_POST['number3']);

        // Определяем наибольшее и наименьшее числа
        $max = max($number1, $number2, $number3);
        $min = min($number1, $number2, $number3);

        // Выводим результат на экран
        echo "<p>Наибольшее число: $max</p>";
        echo "<p>Наименьшее число: $min</p>";
    }
    ?>
</body>
</html>

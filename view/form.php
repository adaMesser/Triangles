<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangles</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
    <div class="content">
        <form method="post">
            <div>
            <p>Введіть довжини сторін трикутника:</p>
            <label for="sideA">Сторона A</label>
            <input type="text" id="sideA" name="sideA">
            </div>

            <div>
            <label for="sideB">Сторона B</label>
            <input type="text" id="sideB" name="sideB">
            </div>

            <div>
            <label for="sideC">Сторона C</label>
            <input type="text" id="sideC" name="sideC">
            </div>
            <div>
            <label for="type">Тип трикутника</label>
            <select id="type" name="type">
                <option selected value="1">Різносторонній</option>
                <option value="2">Рівнобедрений</option>
                <option value="3">Рівносторонній</option>
                <option value="4">Прямокутний</option>
            </select>
                </div>

            <div class="center_button">
                <div>
                    <input type="submit" name="init" value="Save">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
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
        <form method="post" action="show_result.php">
            <div class="info">
                <p>Введіть довжини сторін трикутника:</p>
            </div>
            <table>
                <tr>
                    <td>
                    <label for="sideA">Сторона A</label>
                        </td>
                    <td>
                    <input type="text" id="sideA" name="sideA">
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="sideB">Сторона B</label>
                    </td>
                    <td>
                    <input type="text" id="sideB" name="sideB">
                    </td>
                </tr>

                <tr>
                    <td>
                    <label for="sideC">Сторона C</label>
                    </td>
                    <td>
                    <input type="text" id="sideC" name="sideC">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="type">Тип трикутника</label>
                    </td>
                    <td>
                    <select id="type" name="type">
                        <option selected value="1">Різносторонній</option>
                        <option value="2">Рівнобедрений</option>
                        <option value="3">Рівносторонній</option>
                        <option value="4">Прямокутний</option>
                    </select>
                    </td>
                </tr>

            </table>
            <div class="center_button">
                <div>
                    <input type="submit" name="Init" value="Створити">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
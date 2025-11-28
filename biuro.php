<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turystyka moja pasja</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
        <header>
            <h1>Podróże z uśmiechem</h1>
        </header>

        <div id="ciasteczka">
            <?php
                if(!isset($_COOKIE['ciastko'])) {
                    setcookie('ciastko', '1');
                    echo "<p>Witaj! Nasza strona używa ciasteczek.</p>";
                }
                else {
                    echo "<p>Witaj ponownie na naszej stronie.</p>";
                }
            ?>
        </div>
        <div id="lewy">
            <h2>Nasze wycieczki</h2>
            <ol>
                <li>autokarowe</li>
                <ul>
                    <li>po Polsce</li>
                    <li>do Niemiec i Czech</li>
                </ul>
                
                <li>samolotem</li>
                <ul>
                    <li>Grecja</li>
                    <li>Barcelona</li>
                    <li>Wenecja</li>
                </ul>
            </ol>

            <h2>Pobierz dokumenty</h2>
            <p><a href="regulamin.txt"> Regulamin biura podróży</a></p>
            <p><a href="http://galeria.pl/" target="_blank"> Zdjęcia z naszych wycieczek</a></p>
        </div>
        <div id="prawy">
            <table>
                <tr>
                <td><img src="polska.jpg" alt="Zwiedzanie Krakowa"> </td>
                <td><img src="wlochy.jpg" alt="Wenecja i nie tylko"> </td>
                </tr>

                <tr>
                <td><img src="grecja.jpg" alt="Gorące greckie wyspy"> </td>
                <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona"> </td>
                </tr>
            </table>
        </div>
        <footer>Stronę przygotował: Jakub Sznober</footer>
</body>
</html>
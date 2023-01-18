<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <section class="baner">
        <h1>Moje kwiaty</h1>
    </section>

    <div class="main">
        <div>sea</div>
        <section class="lewy">
            <h3>Kwiaty dla Ciebie!</h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a><br>
            <a href="/znajdz.php">Znajdź kwiaciarnię</a>
            <img src="gozdzik.jpg" alt="Goździk">
        </section>

        <section class="prawy">
            <img src="gerbera.jpg" alt="Gerber">
            <img src="gozdzik.jpg" alt="Goździk">
            <img src="roza.jpg" alt="Róża">
            <p>Strona poświęcona miłośnikom kwiatów</p>
            <p>Podaj miejscowość w której poszukujesz kwiaciarni:</p>

            <form action="znajdz.php" method="post">
                <input type="text" name="value1">
                <button name="btn">Sprawdź</button>
                <p>essa</p>
            </form>
            <p>essa</p>
            <?php 
            $conn = mysqli_connect('localhost','root','','kwiaciarnia');
            
            $btn = $_POST['btn'];
            $value = $_POST['value1'];
            $query = "SELECT `nazwa`,`ulica` FROM `kwiaciarnie` WHERE `miasto` like '$value'";
            
            $wynik = mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_assoc($wynik)){
                echo "<p> $row[nazwa], $row[ulica]</p>";
            };

            mysqli_close($conn);
            ?>
        </section>
    </div>
    <section class="footer">
        Stronę opracował: 03291808832
    </section>
</body>

</html>
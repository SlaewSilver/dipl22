<!DOCTYPE html>
<html lang="en">
<?php 
        $id = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "insurance");

        $movieQuery = "SELECT * FROM movietable WHERE movieID = $id";
        $movieImageById =  mysqli_query($link,$movieQuery);
        $row =  mysqli_fetch_array($movieImageById)
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Забронируйте <?php echo $row['movieTitle']; ?> сейчас </title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body style="background-color:#6e5a11;">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>Пожалуйста , заполните заявку на бронирование выбранной услуги !</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                    echo '<img src="'.$row['movieImg'].'" alt="">';
                    ?>
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
            <div class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>СКОРОСТЬ ОФОРМЛЕНИЯ</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>СТОИМОСТЬ</td>
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>ПРОЦЕНТ ПОКРЫТИЯ В СТРАХОВОМ СЛУЧАЕ</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>НЕОБХОДИМЫЕ ДОКУМЕНТЫ</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>НОМЕР ДЛЯ ОБРАЩЕНИЯ ПРИ СТРАХОВОМ СЛУЧАЕ</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="booking-form-container">
                <form action="" method="POST">

                    <select name="theatre" required>
                        <option value="" disabled selected>Клиент</option>
                        <option value="Физическое лицо">Физическое лицо</option>
                        <option value="Компания">Компания</option>
                        <option value="Юридическое лицо">Юридическое лицо</option>
                        <option value="ИП">ИП</option>
                    </select>

                    <select name="type" required>
                        <option value="" disabled selected>Длительность страховки</option>
                        <option value="1 месяц">1 месяц</option>
                        <option value="2 месяца">2 месяца</option>
                        <option value="3 месяца">3 месяца</option>
                        <option value="6 месяцев">6 месяцев</option>
                        <option value="12 месяцев">12 месяцев</option>
                        <option value="36 месяцев">36 месяцев</option>
                        <option value="Бессрочная">Бессрочная</option>
                    </select>

                    <input placeholder="Дополнительная информация" type="text" name="info" required />

                    <select name="hour" required>
                        <option value="" disabled selected>Дата оформления</option>
                        <option value="24.06.2022">24.06.2022</option>
                        <option value="25.06.2022">25.06.2022</option>
                        <option value="26.06.2022">26.06.2022</option>
                        <option value="27.06.2022">27.06.2022</option>
                        <option value="28.06.2022">28.06.2022</option>
                        <option value="29.06.2022">29.06.2022</option>
                        <option value="30.06.2022">30.06.2022</option>
                        <option value="01.07.2022">01.07.2022</option>
                        <option value="02.07.2022">02.07.2022</option>
                        <option value="03.07.2022">03.07.2022</option>
                        <option value="04.07.2022">04.07.2022</option>
                        <option value="05.07.2022">05.07.2022</option>

                    </select>

                    <input placeholder="Ваше имя" type="text" name="fName" required>

                    <input placeholder="Ваша фамилия" type="text" name="lName">

                    <input placeholder="Ваш номер телефона" type="text" name="pNumber" required>

                    <button type="submit" value="submit" name="submit" class="form-btn">Отправить заявку</button>
                    <?php
                    $fNameErr = $pNumberErr= "";
                    $fName = $pNumber = "";
            
                    if(isset($_POST['submit'])){
                     
            
                        $fName = $_POST['fName'];
                        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $fName)) {
                            $fNameErr = 'Name can only contain letters, numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$fNameErr');</script>";
                        }   
            
                        $pNumber = $_POST['pNumber'];
                        if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $pNumber)) {
                            $pNumberErr = 'Phone Number can only contain numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$pNumberErr');</script>";
                        } 
                        
                        $insert_query = "INSERT INTO 
                        bookingTable (  movieName,
                                        bookingTheatre,
                                        bookingType,
                                        bookingDate,
                                        bookingTime,
                                        bookingFName,
                                        bookingLName,
                                        bookingPNumber)
                        VALUES (        '".$row['movieTitle']."',
                                        '".$_POST["theatre"]."',
                                        '".$_POST["type"]."',
                                        '".$_POST["info"]."',
                                        '".$_POST["hour"]."',
                                        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["pNumber"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>
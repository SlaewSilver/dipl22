<!DOCTYPE html>
<html lang="en">
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>AscoDS</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "insurance");
    $sql = "SELECT * FROM movietable";
    ?>
    <header></header>
    <div id="home-section-1" class="movie-show-container">
        <h1>Наши услуги</h1>
        <h3>Выберите сферу , в которой вы хотели бы приобрести страховку !</h3>

        <div class="movies-container">

            <?php
                        if($result = mysqli_query($link, $sql)){
                            $lines = mysqli_num_rows($result);
                            if(mysqli_num_rows($result) > 0){
                                for ($i = 0; $i <= $lines - 1; $i++){
                                    $row = mysqli_fetch_array($result);
                                    echo '<div class="movie-box">';
                                    echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                                    echo '<div class="movie-info ">';
                                    echo '<h3>'. $row['movieTitle'] .'</h3>';
                                    echo '<a href="booking.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Перейти к бронированию</a>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">На данный момент нет актуальных услуг</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        
                        // Close connection
                        mysqli_close($link);
                        ?>
        </div>
    </div>
    <div id="home-section-2" class="services-section">
        <h1>Почему мы ?</h1>
        <h3>Основные наши преимущества!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Удобный сервис</h2>
                <p>Вы можете забронировать любую из актуальных услуг в несколько кликов</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Выгодные цены </h2>
                <p>Наш диапазон цен на порядок ниже рыночного</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Сотни довольных клиентов</h2>
                <p>Вы всегда можете оставить отзыв о работе нашей компании</p>
            </div>
            <div class="service-item"></div>

        </div>
    </div>
    <div id="home-section-3" class="trailers-section">
        <h1 class="section-title"> Не знаете какую страховку оформить ?</h1>
        <h3>Ознакомьтесь с обзорами представленных на портале страховых полисов !</h3>
        <div class="trailers-grid">
            <div class="trailers-grid-item">
                <img src="img/1.png" alt="">
                <div class="trailer-item-info" data-video="PFnygvcfQAM">
                    <h3>ОСАГО</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/2.png" alt="">
                <div class="trailer-item-info" data-video="sWyBSQ7rizw">
                    <h3>Страхование жизни и здоровья</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/3.png" alt="">
                <div class="trailer-item-info" data-video="djlVYr-fF2o">
                    <h3>Страхование недвижимости</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/4.png" alt="">
                <div class="trailer-item-info" data-video="t9pU30ADWJs">
                    <h3>Страхование туризма</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/5.png" alt="">
                <div class="trailer-item-info" data-video="99KjROAwpZg">
                    <h3>Зачем нужно страхование</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
            <div class="trailers-grid-item">
                <img src="img/6.png" alt="">
                <div class="trailer-item-info" data-video="Mrehlcjagtg">
                    <h3>Что нужно знать о страховании</h3>
                    <i class="far fa-3x fa-play-circle"></i>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>
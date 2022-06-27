<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <title>О компании</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"
    />
</head>



<body>
<header></header>
<body>
<div class="schedule-section">
    <div class="about-container">
        <div class="profile-image">
            <img src="images/team-member4.png" alt="" />
        </div>

        <div class="description">
            <p>
                    Мы компания, которую в первую очередь заботит результат работы, успех выбора вами правильного пакета страхования и отзывы наших клиентов - наша главная цель.
            </p>
            <p>
                    Компания
                AscoDS

                это 30 человек стабильного и сработанного штата, которые работают с одной целью - получение результата, ожидаемого клиентом. Мы готовы бесперебойно работать для обеспечения лучших  путей решения задач в сфере страхования в любой сфере жизнедеятельности , предлагать свежие идеи и создавать уникальные условия страхования для наших клиентов. Наша задача - получить результат , который устроит наших клиентов. Сегодня мы сделали следующий шаг на рынке страхования, разрабатывая уникальные полисы страхования, которые своими возможностями и качеством попадают точно в цель.
            </p>

        </div>

        <div class="projects-container">
            <div class="project">
                <h3 class="project-name">Страховых полисов оформленно</h3>
                <div class="project-number odometer websites-designed">0</div>
            </div>

            <div class="project">
                <h3 class="project-name">Франшиз заключено</h3>
                <div class="project-number odometer apps-developed">0</div>
            </div>
        </div>

        <h2 class="our-team-heading">Наша команда</h2>

        <div class="our-team">
            <div class="team-member">
                <img src="images/team-member1.png" alt="" />
                <div class="designation">
                    <strong>Валерия, </strong> (Страховой консультант)
                </div>
            </div>

            <div class="team-member">
                <img src="images/team-member2.png" alt="" />
                <div class="designation">
                    <strong>Владислав, </strong> (Глава отдела страхования)
                </div>
            </div>

            <div class="team-member">
                <img src="images/team-member3.png" alt="" />
                <div class="designation">
                    <strong>Григорий, </strong> (Эксперт по оценке страховых случаев)
                </div>
            </div>
        </div>

        <div class="our-mission">
            <img class="quote-icon" src="images/quote-icon.png" alt="" />
            <p>Наша миссия заключается в предоставлении лучших услуг для наших клиентов.</p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>

    <script>
        const websitesDesigned = document.querySelector(".websites-designed");
        const appsdeveloped = document.querySelector(".apps-developed");

        setTimeout(() => {
            websitesDesigned.innerHTML = "74";
            appsdeveloped.innerHTML = "6";
        }, 400);
    </script>
</div>
<footer></footer>

<script src="scripts/jquery-3.3.1.min.js "></script>
<script src="scripts/owl.carousel.min.js "></script>
<script src="scripts/script.js "></script>
</body>

</html>
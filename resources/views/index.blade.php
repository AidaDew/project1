<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная</title>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">Поликлиника</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/patients">Пациентам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">О клинике</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-5">
        <h1>Добро пожаловать в нашу поликлинику!</h1>
        <p>Мы рады приветствовать вас на сайте нашей поликлиники. Здесь вы найдете всю необходимую информацию о наших услугах, врачах и многом другом.</p>

        <!-- Первый слайдер -->
        <div class="swiper-container swiper1">
            <span class="swiper-container-title">Новости поликлиники</span>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/assets/img/main/1.jpg" alt="Slide 1">
                    <div class="slide-content">
                        <div class="slide-title">Новая поликлиника</div>
                        <div class="slide-description">В Уфе открылся второй филиал 43 поликлиники.</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/main/2.jpg" alt="Slide 2">
                    <div class="slide-content">
                        <div class="slide-title">Красивые двери</div>
                        <div class="slide-description">Новые стеклянные двери были установлены у главного входа.</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/main/3.jpg" alt="Slide 2">
                    <div class="slide-content">
                        <div class="slide-title">Новый персонал</div>
                        <div class="slide-description">Наша поликлиника пополнила свои ряды новыми врачами.</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/assets/img/main/4.jpg" alt="Slide 2">
                    <div class="slide-content">
                        <div class="slide-title">Забор</div>
                        <div class="slide-description">В течение следующего года планируется строительство нового забора для поликлиники.</div>
                    </div>
                </div>
            </div>
            <!-- Элементы управления -->
            <div class="swiper-button-next swiper1-button-next"></div>
            <div class="swiper-button-prev swiper1-button-prev"></div>
        </div>

        <!-- Второй слайдер -->
        <div class="swiper-container swiper2">
            <span class="swiper-container-title">Информационные ресурсы</span>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#"><img src="../../assets/img/main/2-1.jpg" alt="Slide 3"></a>
                    <div class="slide-content">
                        <div class="slide-title">Запись на прием</div>
                        <div class="slide-description">Хотите записаться на прием или возникли проблемы с записью?</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="../../assets/img/main/2-2jpg.jpg" alt="Slide 4"></a>
                    <div class="slide-content">
                        <div class="slide-title">Исследования лекарств</div>
                        <div class="slide-description">По результатам исследования российских ученых были выявлены лучшие лекарства.</div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <a href="#"><img src="../../assets/img/main/2-3jpg.jpg" alt="Slide 4"></a>
                    <div class="slide-content">
                        <div class="slide-title">Инновации</div>
                        <div class="slide-description">Современная медицина не стоит на месте и с каждым днем развивается.</div>
                    </div>
                </div>
            </div>
            <!-- Элементы управления -->
            <div class="swiper-button-next swiper2-button-next"></div>
            <div class="swiper-button-prev swiper2-button-prev"></div>
        </div>

        <footer class="bg-light text-center text-lg-start mt-5">
            <div class="text-center p-3">
                2024 Поликлиника. Все права защищены.
            </div>
        </footer>
    </main>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../../assets/js/scripts.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пациентам - Поликлиника</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/patients.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.blade.php">Поликлиника</a>
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
        <h1>Информация для пациентов</h1>
        <p>Здесь вы найдете информацию о наших врачах, расписание приема и другую полезную информацию.</p>
        <div class="container-service_catalog">
            <div class="services-catalog">
                <h2>Каталог платных услуг</h2>
                <div class="service-item">
                    <h3><a href="#">Консультация специалиста</a></h3>
                    <p>Платные консультации узких специалистов по предварительной записи. Наши специалисты помогут вам в диагностике и лечении различных заболеваний.</p>
                </div>
                <div class="service-item">
                    <h3><a href="#">Лабораторные исследования</a></h3>
                    <p>Проведение различных лабораторных анализов, таких как анализы крови, мочи, биохимические анализы и другие исследования на платной основе.</p>
                </div>
                <div class="service-item">
                    <h3><a href="#">Ультразвуковое исследование (УЗИ)</a></h3>
                    <p>Проведение различных видов ультразвуковых исследований (УЗИ органов брюшной полости, УЗИ сердца, УЗИ щитовидной железы и т.д.) на современном оборудовании.</p>
                </div>
                <div class="service-item">
                    <h3><a href="#">Физиотерапия и массаж</a></h3>
                    <p>Курсы физиотерапевтических процедур и массажи для лечения и реабилитации. Мы предлагаем индивидуальный подход к каждому пациенту.</p>
                </div>
                <div class="service-item">
                    <h3><a href="#">Стоматологические услуги</a></h3>
                    <p>Платные услуги стоматолога, включая лечение кариеса, установку пломб, чистку зубов, отбеливание и другие стоматологические процедуры.</p>
                </div>
            </div>

            <div class="feedback-form">
                <h3>Запись на прием</h3>
                <form action="/api/request"  method="post">
                    <label for="name">Имя:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Электронная почта:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Телефон:</label>
                    <input type="tel" id="phone" name="phone">

                    <label for="department">Отделение:</label>
                    <select id="department" name="department">
                        <option value="therapy">Терапия</option>
                        <option value="surgery">Хирургия</option>
                        <option value="dentistry">Стоматология</option>
                        <option value="cardiology">Кардиология</option>
                    </select>

                    <label for="message">Сообщение:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button  onclick="location.href='http://localhost:8000/patients';" type="submit" >Отправить</button>
                </form>
            </div>
        </div>
    </main>


    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2024 Поликлиника. Все права защищены.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

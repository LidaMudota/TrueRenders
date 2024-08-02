<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Портфолио дизайнера</h1>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="portfolio.php">Портфолио</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="contact">
            <h2>Свяжитесь со мной</h2>
            <p>Если у вас есть вопросы или вы хотите обсудить проект, пожалуйста, заполните форму ниже или свяжитесь со мной по электронной почте: <a href="mailto:example@example.com">example@example.com</a>.</p>
            <form action="process_form.php" method="post">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Электронная почта:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Сообщение:</label>
                <textarea id="message" name="message" required></textarea>
                <button type="submit">Отправить</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Портфолио дизайнера</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>

<?php return [
    "back" => "Назад",
    "next" => "Далі",
    "last_step_required" => "Для переходу далі, потрібно пройти попередній етап!",
    "finish" => "Завершити установку!",
    1 => [
        "card_head" => "Вибір мови",
        "title" => "Flute :: Вибір мови",
        "Несуществующий язык" => "Схоже ви вибрали якусь загадкову мову :0"
    ],
    2 => [
        "title" => "Flute :: Перевірка вимог",
        "card_head" => "Сумісність",
        "card_head_desc" => "На цій сторінці потрібно перевірити відповідність всіх вимог, і якщо все добре, то продовжувати установку",
        "req_not_completed" => "Вимоги не виконано",
        "need_to_install" => "Потрібно встановити",
        "may_installed" => "Рекомендується встановити",
        "installed" => "Встановлено",
        "all_good" => "Все добре!",
        "may_unstable" => "Може нестабільно працювати",
        "min_php_7" => "Мінімальна версія PHP 7.4!",
        "php_exts" => "Розширення PHP",
        "other" => "Інше"
    ],
    3 => [
        "title" => "Flute :: Введення даних від БД",
        "card_head" => "Дані від БД",
        "card_head_desc" => "Тут потрібно буде вказати дані для таблиць нашого двигуна",
        "driver" => "Виберіть драйвер БД",
        "ip" => "Введіть хост (IP) БД",
        "port" => "Введіть порт підключення до БД",
        "db" => "Введіть назву БД",
        "user" => "Введіть ім'я користувача БД",
        "pass" => "Введіть пароль від БД",
        "db_error" => "Сталася помилка при підключенні: <br>%error%",
        "data_invalid" => "Дані введено невірно!"
    ],
    4 => [
        "title" => "Flute :: Міграція даних",
        "card_head" => "Міграція даних",
        "card_head_desc" => "Чи потрібно Вам переносити дані з інших CMS. Виберіть потрібну CMS (якщо необхідно)",
        "migrate_from" => "Мігрувати дані з",
        "thanks_but_no" => "Дякую, не треба",
        "card_head_2" => "Міграція даних з %cms%",
        "card_desc_2" => "Виберіть потрібні типи міграції та заповніть дані у форму",
        "migrate" => [
            "all" => "Міграція всього",
            "servers" => "Міграція серверів",
            "admins" => "Міграція адміністраторів",
            "gateways" => "Міграція платіжних систем",
            "payments" => "Міграція історії поповнень",
        ]
    ],
    5 => [
        "title" => "Flute :: Реєстрація власника",
        "card_head" => "Реєстрація власника",
        "card_head_desc" => "Заповніть усі поля даними для створення Вашого облікового запису.",
        "login" => "Логін",
        "login_placeholder" => "Введіть логін",
        "name" => "Нікнейм",
        "name_placeholder" => "Введіть відображуване ім'я",
        "email" => "Email",
        "email_placeholder" => "Введіть Email",
        "password" => "Пароль",
        "password_placeholder" => "Введіть пароль",
        "repassword" => "Повторний введення пароля",
        "repassword_placeholder" => "Введіть пароль ще раз",
        "login_length" => "Мінімальна довжина логіну 2 літери!",
        "name_length" => "Мінімальна довжина нікнейму 2 літери!",
        "pass_length" => "Мінімальна довжина пароля 4 символи!",
        "invalid_email" => "Введіть email коректно!",
        "pass_diff" => "Введені паролі відрізняються!",
        "error_create_user" => "Помилка при створенні користувача!",
    ],
    6 => [
        "title" => "Flute :: Включені чи підказки?",
        "card_head" => "Включення підказок",
        "card_head_desc" => "Чи потрібні в двигуні спливаючі підказки, щоб зрозуміти як користуватися тим чи іншим функціоналом?",
        "yes" => "Так, включаємо, я тут вперше (рекомендується) 🤯",
        "no" => "Ні, я Флейту цього скрізь крутив 😎"
    ],
    7 => [
        "title" => "Flute :: Звіт про помилки",
        "card_head" => "Включення звіту про помилки",
        "card_head_desc" => "У випадку несправності в роботі двигуна помилки будуть відправлені на наш сервер для обробки. Спустя час може вийти оновлення з виправленням завдяки Вам 🥰",
        "yes" => "Так, відправляти помилки для покращення роботи двигуна 😇",
        "no" => "Ні, нічого не відправляти, мені це нецікаво 🤐"
    ],
];
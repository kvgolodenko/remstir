<main id="login" class="module">
    <div class="content">
        <div class="login block">
            <a class="show">Вход</a>
        </div>
        <div class="registr block">
            <a>Регистрация</a>
        </div>
    </div>
    <form action="signin" class="login-form show">
        Номер телефона
        <input type="tel" name="phone">
        Пароль
        <input type="password" name="password">
        <input type="submit" value="Войти">
    </form>
    <form action="reg" class="reg-form">
        Номер телефона
        <input type="tel" name="phone">
        Пароль
        <input type="password" name="password" required>
        Повторите пароль
        <input type="password" name="repeat-password" required>
        <input type="submit" value="Регистрация" required>
    </form>
</main>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Creating a simple to-do application - Part 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="page">
        <!-- [banner] -->
        <header id="banner">
            <hgroup>
                <h1>Login</h1>
            </hgroup>
        </header>
        <!-- [content] -->
        <section id="content">
            <form id="login" method="post">
                <label for="username">Email:</label>
                <input id="email" name="email" type="text" required>
                <label for="password">Password:</label>
                <input id="password" name="password" type="password" required>
                <br />
                <input type="submit" value="Login">
            </form>
        </section>
        <!-- [/content] -->

        <footer id="footer">
            <details>
                <summary>CHECK42 Systems</summary>
            </details>
        </footer>
    </div>
    <!-- [/page] -->
</body>

</html>
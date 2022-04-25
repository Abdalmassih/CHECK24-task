<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>

    <p><a href="<?= URLROOT ?>/Pages">
            <img src="<?= URLROOT ?>/public/img/logo.png" width="500" height="300" alt="Logo">
        </a></p>
    <!-- <a href="<?= URLROOT ?>/Pages">Home</a> -->
    <div class="content" style="text-align: center;">

        <h1>CHECK24 Blog</h1>
        <table style="margin-left: auto; margin-right: auto;">
            <?php foreach ($data as $post) : ?>
                <tr>
                    <td><?= $post->body; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
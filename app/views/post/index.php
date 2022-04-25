<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>


    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            /* width: 100%; */
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        /* 
        tr:nth-child(even) {
            background-color: #dddddd;
        } */
    </style>
</head>

<body>

    <div>
        <p style="max-height: 50px;"><a href="<?= URLROOT ?>/Pages">
                <img src="<?= URLROOT ?>/public/img/logo.png" width="500" height="300" alt="Logo">
            </a></p>
    </div>
    <div class="content" style="text-align: center;">

        <h1>CHECK24 Blog</h1>
        <table style="margin-left: auto; margin-right: auto;">

            <th>Post Body</th>
            <th>Post Date</th>
            <th>Post Author</th>
            <?php foreach ($data['result'] as $post) : ?>

                <tr>
                    <td>

                        <a href="<?= URLROOT ?>/posts/show/<?= $post['id'][0] ?>">
                            <?= substr($post['body'], 0, 100) . (strlen($post['body']) > strlen(substr($post['body'], 0, 100)) ? '...' : ''); ?>
                        </a>
                    </td>
                    <td><?= $post['created'] ?></td>
                    <td><?= $post['email'] ?></td>
                    <td style="height: fit-content;">
                        <img src="<?= URLROOT ?>/public/img<?= $post['image_path'] ?>" width="200" height="140" alt="Logo">

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>


        <?php $postsCount = (int) $data['count'][0]['count'];
        if ($postsCount > 3) {

            echo '<hr> <div class="pagination">';
            $pagesCount = ceil($postsCount / 3);

            for ($i = 0; $i < $pagesCount; $i++) {
                echo "<a href=\"" . URLROOT . "/Pages/index/" . (string) ($i) . "\">" . (string) ($i + 1) . "</a>  ";
            }
            echo '</div>';
        }

        ?>

    </div>


</body>

</html>
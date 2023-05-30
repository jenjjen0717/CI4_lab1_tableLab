<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Jane Fu" />
    <meta name="robot" content="index, follow" />
    <meta name="description" content="" />
    <title><?= ($title) ?></title>
  </head>
  <body>
    <header>
        <h1><?= ($heading) ?></h1>
    </header>
    <section>
        <table>
            <thead>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </thead>
            <?php foreach ($todo_list as $week => $item) : ?>
                    <tr>
                        <td><?= esc($week) ?></td>
                        <?php foreach ($item as $step) : ?>
                            <td><?= esc($step) ?></td>
                        <?php endforeach ?>
                    </tr>
            <?php endforeach ?>
        </table>
    </section>
  </body>
</html>

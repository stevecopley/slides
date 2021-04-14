<?php if( !isset( $title ) ) $title = "TITLE MISSING"; ?>

<!doctype html>

<html>

    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="/slides/css/styles.css">
        <?php if( isset( $localCSS ) ) { ?>
            <link rel="stylesheet" href="<?= $localCSS ?>">
        <?php } ?>
    </head>

    <body>
        <script src="/slides/lib/remark/remark-latest.min.js"></script>
        <script>
            remark.create( {
                sourceUrl: 'index.md',
                highlightStyle: 'solarized-dark',
                highlightLines: true,
                ratio: '16:9',
                slideNumberFormat: (current, total) => `
                    <div class="slide-number">${current} / ${total}</div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" style="width: ${(current/total)*100}%"></div>
                    </div>`
            } );
        </script>
    </body>

</html>

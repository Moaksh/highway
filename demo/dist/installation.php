<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./parts/head.php'); ?>
    <title>Highway - Installation</title>
</head>
<body>
    <main class="site-container">
        <?php include('./parts/header.php'); ?>

        <article class="site-content" data-router-view="installation">
            <h1>Installation</h1>
            <p>We can install <strong>Highway</strong> the way we want between these two methods:</p>

            <h3>With YARN:</h3>
            <?php include('./snippets/yarn.php'); ?>

            <h3>With NPM:</h3>
            <?php include('./snippets/npm.php'); ?>

            <h2>Usage</h2>
            <p>Now we have installed <strong>Highway</strong> we have to add it to our script.</p>
            <?php include('./snippets/import.php'); ?>

            <p>Now let's keep going and see how to <a href="./get-started.php">get started</a>.</p>
        </article>
    </main>

    <?php include('./parts/footer.php'); ?>
</body>
</html>

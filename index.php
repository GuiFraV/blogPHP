<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A blog application</title>
</head>
<body>

        <h1>Blog title</h1>

        <p>This paragraph summarises what the blog is about.</p>

        <?php for($postId = 1 ; $postId <= 3; $postId++): ?>

            <h2>Article <?php echo $postId ?> title</h2>
            <div>dd Mon YYYY</div>
            <p>A paragraph summarising article <?php echo $postId ?>. </p>
            <p>
                <a href="#">Read more...</a>
            </p>
        <?php endfor ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<article>

    <h1><?php echo $post->title; ?></h1>
    <a href="#">{{ $post->category->name }}</a>
    <div><?php echo $post->body; ?></div>
       
</article>
<a href="/">Back</a>
</body>
</html>
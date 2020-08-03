<a href="<?php echo site_url('blog/create') ?>">New article</a>
<ul>
    <?php foreach ($articles as $article): ?>
        <li><?php echo $article->title ?> <a href="<?php echo site_url('blog/update/' . $article->id) ?>">Update</a> | <a href="<?php echo site_url('blog/delete/' . $article->id) ?>">Delete</a></li>
    <?php endforeach?>
</ul>

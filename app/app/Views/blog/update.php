<?php echo form_open() ?>
    <label for="title">Title</label> <br>
    <input type="text" name="title" value="<?php echo $article->title ?>"> <br>
    <br>
    <label for="content">Content</label> <br>
    <textarea name="content" id="" cols="30" rows="10"><?php echo $article->content ?></textarea> <br>
    <br>
    <button type="submit">Submit</button>
<?php echo form_close() ?>
<div>
    <?php if (isset($_SESSION['is_logged_id'])): ?>
        <a class="btn btn-lg btn-success" href="<?php echo ROOT_PATH; ?>posts/add" role="button">New Post</a>
    <?php endif; ?>
    <h1 style="margin-bottom: 25px;">My posts</h1>
    <?php foreach ($viewModel as $item): ?>
        <div style="margin-bottom: 25px;">
            <h3>
                <?php echo $item['title']; ?>
            </h3>
            <p><?php echo $item['body']; ?></p>
            <small style="font-weight: bold;">posted by <?php echo $item['name']; ?></small>
        </div>
    <?php endforeach ?>
</div>
<div class=" panel panel-default">
    <div class=" panel-heading">
        <h3 class="panel-title">Share post</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $_SESSION['user_data']['id'];?>">
            <input class="btn btn-primary" name="submit" type="submit" value="Submit">
        </form>
    </div>
</div>
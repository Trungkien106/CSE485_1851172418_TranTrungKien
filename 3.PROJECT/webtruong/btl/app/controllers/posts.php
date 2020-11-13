<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");

$topics = selectALL('topics');

if (isset($_POST['add-post'])) {
    unset($_POST['add-post'], $_POST['topic-id']);
    $_POST['user-id'] = 1;
    $_POST['published'] = 1;

    $post_id = create($table, $_POST);
    header("location: " . BASE_URL . "/admin/posts/index.php");
}
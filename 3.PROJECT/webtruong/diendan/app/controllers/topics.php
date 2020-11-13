<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");
$table = 'topics';

$errors = array();
$id = '';
$name = '';
$description = '';

$topics = selectALL($table);

if (isset($_POST['add-topic'])) {
    unset($_POST['add-topic']);
    $topic_id = create('topics', $_POST);
    $_SESSION['message'] = 'Topic created successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit(); 
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}

if(isset($_POST['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = 'Topic delete successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit(); 
}

if (isset($_POST['update-topic'])) {
    $id = $_POST['$id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update($table,$id,$_POST); 
    $_SESSION['message'] = 'Topic created successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}
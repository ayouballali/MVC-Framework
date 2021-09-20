<?php require_once APPROOT.'/views/includes/header.php' ?>
<h1>HELLO <?php echo $data['title']; ?></h1>
<?php foreach ($data['posts'] as  $value) {
    echo $value->name;
}
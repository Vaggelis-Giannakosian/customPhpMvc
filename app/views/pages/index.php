<?php require APROOT.'/views/inc/header.php'; ?>

<h1><?php echo $data['title']; ?></h1>
<?php echo APROOT; ?>

<ul>
    <?php foreach ($data['posts'] as $post) : ?>

        <li><?php echo $post->title?> </li>

    <?php endforeach; ?>
</ul>

<?php require APROOT.'/views/inc/footer.php';?>

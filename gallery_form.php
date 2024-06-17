<?php require_once './header.php'; ?>
<form method="POST" action="upload.php" enctype="multipart/form-data" class="box" name="blog-form">
    <div>
        <label id="image">Image</label>
        <input type="file" name="image" id="image">
        <button type="submit" value="Submit">Upload</button>
    </div>
    <?php require_once "./form.php" ;?>
</form>
<?php require_once './footer.php'; ?>

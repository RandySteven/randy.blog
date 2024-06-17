<?php require_once "./header.php"; ?>
<!--    <div class="centered">-->
        <form method="POST" action="create.php" class="box" name="blog-form" onsubmit="return validateInputBlog()">
            <?php require_once "./form.php"; ?>
            <button type="submit" value="Submit">Create</button>
        </form>
<!--    </div>-->
<?php require_once "./footer.php"; ?>
<?php require_once "./header.php"; ?>
<!--    <div class="centered">-->
        <form method="POST" action="create.php" class="box" name="blog-form" onsubmit="return validateInputBlog()">
            <div class="centered">
                <input type="text" name="title" id="title" style="width: 100%"/>
                <span id="error-message" hidden>Filled this title</span>
            </div>
            <div class="centered">
                <textarea name="content" id="content" class="box" style="width: 100%"></textarea>
                <span id="error-message" hidden>Filled this content</span>
            </div>
            <button type="submit" value="Submit">Create</button>
        </form>
<!--    </div>-->
<?php require_once "./footer.php"; ?>
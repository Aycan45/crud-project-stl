<?php
 include("./includes/header.inc.php");
 require_once("./includes/auth_user.php");
?>
<body>
    <div class="row justify-content-center m-5">
        <div class="col-5">
            <h2>Update article</h2>
            <form action="./crud-action/update-article-action.php?id=<?= $_GET["id"]?>" method="POST">
            <label for="title" class="form-label">Title:</label>
                <div class="mb-3">
                    <input type="text" name="title" class="col-8 p-1">
                </div>
                <label for="editor" class="form-label">Text:</label>
                <div class="mb-3">
                    <textarea name="text" id="editor"></textarea>
                </div>
                <label for="category" class="form-label">Category:</label>
                <div class="mb-3">
                    <input type="text" name="category" class="col-8 p-1">
                </div>
                <div class="col-7 mx-auto">
                    <input type="submit" name="update" class="btn btn-primary col-5" value="Update article">
                </div>
            </form>
        </div>
    </div>
</body>
<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
<?php

?>
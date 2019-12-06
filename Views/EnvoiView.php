<?php
require_once 'header.php';
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="input-group">
        <div class="input-group-prepend">
            <input type="submit" class="btn btn-primary" value="Upload">
            <input type="hidden" name="MAX_FILE_SIZE" value="104857600">
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="img[]" multiple>
            <label class="custom-file-label">Choose File</label>
        </div>
    </div>
</form>


<?php
require_once 'footer.php';
?>
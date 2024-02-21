<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert View</title>
</head>
<body>

<h1>Expert View</h1>

<form action="expert" method="post" enctype="multipart/form-data">
    <!-- CSRF token input -->
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <!-- File input -->
    <input name="photo" type="file">

    <!-- Submit button -->
    <button type="submit">Upload</button>
</form>
<div>
    {{$name_file}}
</div>
</body>
</html>

<h1>test2</h1>
<form action="/home" method="get">
    <input type="text" name="name">
    <input type="text" name="_method" value="get">
    <input type="text" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">Submit</button>
</form>

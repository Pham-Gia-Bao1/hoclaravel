<h1>view client</h1>
<form action="client" method = 'post'>
    <input type="text" name="name" id="">
    <input type="hidden" name="_token" id="" value="<?php  echo csrf_token() ?>"/>
    <button type="submit">Submit</button>
</form>
{{$name}}
{{$url}}
{{}}



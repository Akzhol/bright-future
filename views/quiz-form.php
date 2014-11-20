<?php

return "<form method='post' action='index.php?page=quiz'>
    <div class='row'>
    <div class='large-12 columns'>
<p>Is it hard fun to learn PHP?</p>
</div>
</div>
<div class='row'>
<div class='large-8 columns'>
<select name='answer'>
<option value='yes'>Yes, it is</option>
<option value='no'>No, not really</option>
<option value='unknown'>Don't want to answer</option>
</select>
</div>
<div class='large-4 columns'>
<input type='submit' class='button' name='quiz-submitted' value='post' />
</div>
</div>
</form>";

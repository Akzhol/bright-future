<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return "
<p>Want to calculate your BMI?</p>    
<form method='post' action='index.php?page=bmi'>
<select name='format'>
<option value='usuk'>US/UK</option>
<option value='other'>Rest of world</option>
</select>
<input type='number' name='height' placeholder='height(m)'/>
<input type='number' name='weight' placeholder='weight(kg)'/>
<input type='submit' class='button' name='form-submitted' value='calculate' />
</form>";

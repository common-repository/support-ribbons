<div class="wrap">
<h2>Display Support Ribbon on Your WordPress Site</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('wp_ribbon'); ?>
<?php //echo "<hr />".get_option('ribbonid')."<hr />"; ?>
<table class="form-table">
<?php
$ribbonid = get_option('ribbonid');
?>
<tr valign="top">
<th scope="row">Ribbon to show:</th>
<td>
<input type="hidden" id="ribbonid" name="ribbonid" value="<?php echo $ribbonid; ?>" />
<ul class="ribbons">
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-1' ? 'selected ' : '')?>rclick rsprite" id="sprite-1">1</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-2' ? 'selected ' : '')?>rclick rsprite" id="sprite-2">2</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-3' ? 'selected ' : '')?>rclick rsprite" id="sprite-3">3</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-4' ? 'selected ' : '')?>rclick rsprite" id="sprite-4">4</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-5' ? 'selected ' : '')?>rclick rsprite" id="sprite-5">5</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-6' ? 'selected ' : '')?>rclick rsprite" id="sprite-6">6</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-7' ? 'selected ' : '')?>rclick rsprite" id="sprite-7">7</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-8' ? 'selected ' : '')?>rclick rsprite" id="sprite-8">8</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-9' ? 'selected ' : '')?>rclick rsprite" id="sprite-9">9</a></li>
</ul>
<ul class="ribbons">
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-10' ? 'selected ' : '')?>rclick rsprite" id="sprite-10">10</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-11' ? 'selected ' : '')?>rclick rsprite" id="sprite-11">11</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-12' ? 'selected ' : '')?>rclick rsprite" id="sprite-12">12</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-13' ? 'selected ' : '')?>rclick rsprite" id="sprite-13">13</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-14' ? 'selected ' : '')?>rclick rsprite" id="sprite-14">14</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-15' ? 'selected ' : '')?>rclick rsprite" id="sprite-15">15</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-16' ? 'selected ' : '')?>rclick rsprite" id="sprite-16">16</a></li>
    <li><a href="#" class="<?php echo ($ribbonid == 'sprite-17' ? 'selected ' : '')?>rclick rsprite" id="sprite-17">17</a></li>
</ul>
</td>
</tr>
</table>
<input type="hidden" name="action" value="update" />
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>
</div>

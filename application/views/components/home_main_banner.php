<?php if($device == 'desktop'){ ?>
<div class="" style="aspect-ratio:32/9">
    <img src="<?php echo $image ?>" style="height:100%;object-fit: cover">
</div>
<?php } else { ?>
<div style="aspect-ratio:16/9">
    <img src="<?php echo $image ?>" style="height:100%;object-fit: cover">
</div>
<?php } ?>
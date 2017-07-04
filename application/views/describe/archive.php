<?php
if(isset($data->searchTerm) && $data->searchTerm != "")
$searchTerm = $data->searchTerm;
unset($data->searchTerm);
$archiveType = $viewHelper->getArchiveType($data->albumID);
echo $archiveType . "suresh" ;
?>
<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-9">
            <ul class="pager">
                <?php if($data->neighbours['prev']) {?> 
                <li class="previous"><a href="<?=BASE_URL?>describe/archive/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['prev']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data->neighbours['next']) {?> 
                <li class="next"><a href="<?=BASE_URL?>describe/archive/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['next']?>">Next &gt;</a></li>
                <?php } ?>
            </ul>
            <?php 
				$albumID = $viewHelper->getAlbumID($data->albumID); 
				// $archiveType = substr_replace($viewHelper->getArchiveType($data->id), "", -1);
			?>
            <?php $viewHelper->displayThumbs($data->id); ?>
        </div>            
        <div class="col-md-3">
            <div class="image-desc-full">
            <div class="albumTitle <?=$archiveType?>"><span><?=$archiveType?></span></div>
                <ul class="list-unstyled">
					<span class="subheader">Album Details</span><br/><br/><br/>
					<?=$viewHelper->displayFieldData($data->albumDescription)?>
					<br/><br/>
					<span class="subheader">Item Details</span><br/><br/><br/>
					<?=$viewHelper->displayFieldData($data->description, $albumID)?>
                    <?php if(isset($_SESSION['login'])) {?>
                    <li>
                            <a href="<?=BASE_URL?>edit/archive/<?=$data->albumID?>/<?=$data->id?>" class="btn btn-primary" role="button">Contribute</a>
                    </li>                
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>
<script>
$(document).ready(function(){
    var bgColor = $('.albumTitle.' + '<?=$archiveType?>').css('background-color');
    var fgColor = $('.albumTitle span').css('color');

    $('.albumTitle span').css('color', bgColor);
    $('.albumTitle.' + '<?=$archiveType?>').css('background-color', fgColor);
});
</script>


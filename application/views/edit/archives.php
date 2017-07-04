<?php $albumDetails = $data['albumDetails']; unset($data['albumDetails']);?>
<div class="container">
    <div class="row first-row">        
        <div class="col-md-12">
            <div>
                <form  method="POST" class="form-horizontal" role="form" id="updateData" action="<?=BASE_URL?>data/updateAlbumJson/<?=$data[0]->albumID?>" onsubmit="return validate()">
                    <?=$viewHelper->displayDataInForm($albumDetails->description)?>
                </form>                
            </div>
        </div>
    </div>    
</div>

<div id="grid" class="container-fluid">
    <div id="posts">
<?php foreach ($data as $row) { ?>
        <div class="post">
            <a href="<?=BASE_URL?>describe/archive/<?=$row->albumID . '/' . $row->id?>" title="View Details">
                <img src="<?=$viewHelper->includeRandomThumbnailFromArchive($row->id)?>">
                <?php
                    $caption = $viewHelper->getDetailByField($row->description, 'Caption');
                    if ($caption) echo '<p class="image-desc"><strong>' . $caption . '</strong></p>';
                ?>
            </a>
        </div>
<?php } ?>
    </div>
</div>

<script type="text/javascript" src="<?=PUBLIC_URL?>js/addnewfields.js"></script>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/validate.js"></script>

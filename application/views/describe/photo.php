<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-9">
            <ul class="pager">
                <?php if($data->neighbours['prev']) {?> 
                <li class="previous"><a href="<?=BASE_URL?>describe/photo/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['prev']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data->neighbours['next']) {?> 
                <li class="next"><a href="<?=BASE_URL?>describe/photo/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['next']?>">Next &gt;</a></li>
                <?php } ?>
            </ul>
            <?php
                $photoID = $viewHelper->getActualID($data->id);
                $albumID = $viewHelper->getAlbumID($data->albumID);
                $archive = $viewHelper->getArchiveType($data->albumID);
                (file_exists(PHY_ARCHIVES_JPG_URL . $archive . '/' . $albumID . '/' . $photoID . '.JPG')) ? $imagePath = ARCHIVES_JPG_URL . $archive . '/' . $albumID . '/' . $photoID . '.JPG' : $imagePath = PUBLIC_URL . '/images/default-image.png';
            ?>
            <div class="image-full-size" id="viewletterimages">
            <?php $albumID = $viewHelper->getAlbumID($data->albumID)?>
                <img class="img-responsive" src="<?=$imagePath?>" data-original="<?=$imagePath?>">
            </div>
        </div>            
        <div class="col-md-3">
            <div class="image-desc-full">
                <ul class="list-unstyled">
                    <span class="subheader">Album Details</span><br/><br/><br/>
					<?=$viewHelper->displayFieldData($data->albumDescription)?>
					<br/><br/>
					<span class="subheader">Item Details</span><br/><br/><br/>
					<?=$viewHelper->displayFieldData($data->description, $albumID)?>
                   <?php if(isset($_SESSION['login'])) {?>
                    <li>
                            <a href="<?=BASE_URL?>edit/photo/<?=$data->albumID?>/<?=$viewHelper->getActualID($data->id)?>" class="btn btn-primary" role="button">Contribute</a>
                    </li>                
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js"></script>

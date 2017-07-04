<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-5">
            <?php $actualID = $data->albumID . '__' . $data->id; ?>
            <div class="image-reduced-size">
                <img class="img-responsive" src="<?=$viewHelper->includeRandomThumbnailFromArchive($actualID)?>">
            </div>
        </div>            
        <div class="col-md-7">
            <div class="image-desc-full">
                <form  method="POST" class="form-horizontal" role="form" id="updateData" action="<?=BASE_URL?>data/updateArchiveJson/<?=$data->albumID?>" onsubmit="return validate()">
                    <?=$viewHelper->displayDataInForm(json_encode($data))?>
                </form>    
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?=PUBLIC_URL?>js/addnewfields.js"></script>
<script type="text/javascript" src="<?=PUBLIC_URL?>js/validate.js"></script>

<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
            <div class="col-md-12 text-center">
                <ul class="list-inline sub-nav">
                    <li><a href="<?=BASE_URL?>listing/albums/<?=NEWSPAPERS?>">Clippings</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/albums/<?=BROCHURES?>">Brochures</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Photographs</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Multimedia</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Journals</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Miscellaneous</a></li>
                    <li><a>·</a></li>
                    <li><a>Search</a></li>
                    <li id="searchForm">
                        <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                            <div class="input-group add-on">
                                <input type="text" class="form-control" placeholder="Keywords" name="description" id="description">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
    </div>
</div>
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

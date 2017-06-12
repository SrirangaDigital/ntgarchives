<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
            <div class="col-md-12 text-center">
                <ul class="list-inline sub-nav">
                    <li><a href="<?=BASE_URL?>listing/albums/<?=NEWSPAPERS?>">CLIPPINGS</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/albums/<?=BROCHURES?>">Brochures</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/albums/<?=PHOTOS?>">Photographs</a></li>
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
<div id="grid" class="container-fluid">
    <div id="posts">
<?php foreach ($data as $row) { ?>
        <div class="post">
            <a href="<?=BASE_URL?>listing/photos/<?=$row->albumID?>" title="View Album">
                <div class="fixOverlayDiv">
                    <img class="img-responsive" src="<?=$viewHelper->includeRandomThumbnailFromPhotoALbum($row->albumID)?>">
                    <div class="OverlayText">
						<?=$viewHelper->getLettersCount($row->albumID)?><br /><small><?=$viewHelper->getDetailByField($row->description, 'Event')?></small> <span class="link"><i class="fa fa-link"></i></span>
					</div>
                </div>
                <p class="image-desc">
                    <strong><?=$viewHelper->getDetailByField($row->description, 'drama' , 'dance' , 'film' , 'subject')?></strong>
                </p>
            </a>
        </div>
<?php } ?>
    </div>
</div>

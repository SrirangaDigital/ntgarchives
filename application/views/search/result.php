<?php
	$searchTerm = $data['searchTerm'];
	unset($data['searchTerm']);
?>

<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
           <div class="col-md-12 text-center">
                <ul class="list-inline sub-nav">
                    <li><a href="<?=BASE_URL?>listing/albums/<?=NEWSPAPERS?>">NEWS PAPER CLIPPINGS</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/albums/<?=BROCHURES?>">Brochures</a></li>
<!--
                    <li><a>·</a></li>
                    <li><a href="#">Books</a></li>
-->
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/photoAlbums/<?=PHOTOS?>">Photographs</a></li>
<!--
                    <li><a>·</a></li>
                    <li><a href="#">Multimedia</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Journals</a></li>
                    <li><a>·</a></li>
                    <li><a href="#">Miscellaneous</a></li>
-->
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
			<?php $photoID = $viewHelper->getPhotoID($row->id); $albumID = $viewHelper->getAlbumID($row->albumID); $archiveType  = $viewHelper->getArchiveType($row->albumID);?>
			<?php if($archiveType != $viewHelper->arrayOfArchives[PHOTOS]) : ?>
			<a href="<?=BASE_URL?>describe/archive/<?=$row->albumID . '/' . $row->id?>/?searchTerm=<?=$searchTerm?>" title="View Details">
				<img src="<?=$viewHelper->includeRandomThumbnailFromArchive($row->id)?>">
				<div class="typeIcon">
					<span><?=substr($archiveType, 0, 1);?></span>
				</div>
				<div class="OverlayText"><p><?=$viewHelper->getDetailByField($row->description, 'Title')?></p></div>
			</a>
			<?php else :?>
			<a href="<?=BASE_URL?>describe/photo/<?=$row->albumID . '/' . $row->id?>/?searchTerm=<?=$searchTerm?>" title="View Details">
				<img src="<?=ARCHIVES_JPG_URL . $archiveType . '/' . $albumID . '/thumbs/' . $photoID . '.JPG'?>">
                <div class="typeIcon">
                    <span><?=substr($archiveType, 0, 1);?></span>
                </div>
				<div class="OverlayText"><p><?=$viewHelper->getDetailByField($row->description, 'desc', 'misc')?><br /><small><?=$viewHelper->displayArchiveType($row->id)?></small> <span class="link"><i class="fa fa-link"></i></span></div>
			</a>
		<?php endif; ?>
        </div>
<?php } ?>
    </div>
</div>

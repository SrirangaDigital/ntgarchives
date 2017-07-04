<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
           <div class="col-md-12 text-center">
                <ul class="list-inline sub-nav">
                    <li><a href="<?=BASE_URL?>listing/albums/<?=NEWSPAPERS?>">NEWSPAPER CLIPPINGS</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/albums/<?=BROCHURES?>">Brochures</a></li>
                    <li><a>·</a></li>
                    <li><a href="<?=BASE_URL?>listing/photoAlbums/<?=PHOTOS?>">Photographs</a></li>
                    <li><a>·</a></li>
                    <li><a>Search</a></li>
                    <li id="searchForm">
                        <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                            <div class="input-group add-on">
                                <input type="text" class="form-control" placeholder="Keywords" name="description" id="description">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" onclick="return validateTextField();" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                                <div id="tooltip">Search key word is required</div>
                            </div>
                        </form>

                    </li>
                </ul>
            </div>
    </div>
</div>

<?php

	if(file_exists('application/views/' . $actualPath . '.php')) {
		require_once 'application/views/' . $actualPath . '.php';
	}
	elseif(file_exists('application/views/' . $actualPath . '/index.php')) {
		require_once 'application/views/' . $actualPath . '/index.php';
	}
	else{
		require_once 'application/views/error/index.php';
	}

	// Side bar can be included by un-commenting the following line
	// require_once($this->getSideBar($actualPath, $journal));
	if(!(preg_match('/flat\/Home/', $path))) require_once 'application/views/footer.php';
?>

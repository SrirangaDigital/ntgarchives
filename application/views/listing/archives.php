<?php
	$albumDetails = $data['albumDetails']; unset($data['albumDetails']);
	$albumID = $data[0]->albumID;
    $archiveType = $viewHelper->getArchiveType($data[0]->albumID);
?>
<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
            <div class="col-md-12 text-center">
                <ul class="list-inline sub-nav">
                    <li><a href="<?=BASE_URL?>listing/albums/<?=NEWSPAPERS?>">CLIPPINGS</a></li>
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
<?php 
	$hiddenData = $data["hidden"]; 
	unset($data["hidden"]);
?>
<div id="grid" class="container-fluid">
    <div id="posts">
        <div class="post no-border">
            <div class="image-desc-full">
				<?=$viewHelper->displayFieldData($albumDetails->description)?>
                <?php if(isset($_SESSION['login'])) {?>
                <ul class="list-unstyled">
                    <li>
                        <a href="<?=BASE_URL?>edit/archives/<?=$data[0]->albumID?>" class="btn btn-primary" role="button">Contribute</a>
                    </li>    
                </ul>    
                <?php } ?>
            </div>
        </div>
<?php foreach ($data as $row) { ?>
        <div class="post">
            <?php $ids = explode("__", $row->id); ?>
            <a href="<?=BASE_URL?>describe/archive/<?=$ids[0]?>__<?=$ids[1]?>/<?= $row->id ?>" title="View Details">
                <img  class="img-responsive" src="<?=$row->image?>" >
                <div class="OverlayText"><?=$row->pageCount?><br /><small><?=$row->event?></small> <span class="link"><i class="fa fa-link"></i></span></div>
            </a>
        </div>
<?php } ?>
    </div>
</div>
<div id="hidden-data">
    <?php echo $hiddenData; ?>
</div>
<div id="loader-icon"><img src="<?=STOCK_IMAGE_URL?>loading.gif" /></div>
<script>
$(document).ready(function(){

    $('.post.no-border').prepend('<div class="albumTitle <?=$archiveType?>"><span><?=$archiveType?></span></div>');
    var processing = false;
    var albumID = <?php echo  '"' . $albumID . '"';  ?>;
    function getresult(url) {
        processing = true;
        $.ajax({
            url: url,
            type: "GET",
            complete: function(){
                $('#loader-icon').hide();
            },
            success: function(data){
				$(".loader").hide();
                processing = true;
                var gutter = parseInt(jQuery('.post').css('marginBottom'));
                var $grid = $('#posts').masonry({
                    gutter: gutter,
                    itemSelector: '.post',
                    columnWidth: '.post'
                });
                var obj = JSON.parse(data);
                var displayString = "";
                 for(i=0;i<Object.keys(obj).length-2;i++)
                {                    
                    displayString = displayString + '<div class="post">';    
                    displayString = displayString + '<a href="' + <?php echo '"' . BASE_URL . '"'; ?> + 'describe/archive/' + obj[i].albumID + '/' + obj[i].id + '" title="View Details">';
                    displayString = displayString + '<img class="img-responsive" src="' +  obj[i].image + '">';
                    displayString = displayString + '<div class="OverlayText">' + obj[i].pageCount + '<br /><small>' + obj[i].event + '</small> <span class="link"><i class="fa fa-link"></i></span></div>';
                    displayString = displayString + '</a>';
                    displayString = displayString + '</div>';
                }

                var $content = $(displayString);
                $content.css('display','none');
                $grid.append($content).imagesLoaded(
                    function(){
                        $content.fadeIn(500);
                        $grid.masonry('appended', $content);
                        processing = false;
                    }
                );                                     

               displayString = "";
               $("#hidden-data").append(obj.hidden);
            },
            error: function(){console.log("Fail");}             
      });
    }
    $(window).scroll(function(){
        if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.65){
			if($(".lastpage").length == 0){
                var pagenum = parseInt($(".pagenum:last").val()) + 1;
                if(!processing)
                {
                    getresult(base_url+'listing/archives/' + albumID + '/?page='+pagenum);
                }
            }                        
        }
        if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.95){
			document.getElementById("loader-icon").display = 'block';
		}
    });
});     
</script>

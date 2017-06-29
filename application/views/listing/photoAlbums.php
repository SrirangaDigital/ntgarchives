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
	$hiddenData = $data["hidden"]; unset($data["hidden"]);
    $archiveType = $viewHelper->getArchiveType($data[0]->albumID);
?>
<div id="grid" class="container-fluid">
    <div id="posts">
<?php foreach ($data as $row) { ?>
        <div class="post">
            <a href="<?=BASE_URL?>listing/photos/<?=$row->albumID?>" title="View Album">
                <div class="fixOverlayDiv">
					<img class="img-responsive" src="<?=$row->imagePath?>">
                    <div class="OverlayText">
					<?=$row->imageCount?><br /><span class="link"><i class="fa fa-link"></i></span>
					</div>
                </div>
                <p class="image-desc">
                    <strong><?=$row->description?></strong>
                </p>
            </a>
        </div>
<?php } ?>
    </div>
</div>
<div id="hidden-data">
    <?php echo $hiddenData; ?>
</div>
<div id="loader-icon">
	<i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i><span class="strong">Loading...</span>
<div>


<script>
$(document).ready(function(){

    $('#posts').prepend('<div class="post no-border"><div class="albumTitle <?=$archiveType?>"><span><?=$archiveType?></span></div></div>');
    var processing = false;

    function getresult(url) {
        processing = true;
        $.ajax({
            url: url,
            type: "GET",
            beforeSend: function(){
                $('#loader-icon').show();
            },
            complete: function(){
                $('#loader-icon').hide();
            },
            success: function(data){
                processing = true;
                var gutter = parseInt(jQuery('.post').css('marginBottom'));
                var $grid = $('#posts').masonry({
                    gutter: gutter,
                    // specify itemSelector so stamps do get laid out
                    itemSelector: '.post',
                    columnWidth: '.post',
                    fitWidth: true
                });
                var obj = JSON.parse(data);
                var displayString = "";
                for(i=0;i<Object.keys(obj).length-1;i++)
                {
					displayString = displayString + '<div class="post">';
					displayString = displayString + '<a href="<?=BASE_URL?>listing/photos/' + obj[i].albumID + '" title="View Album">';
					displayString = displayString + '<div class="fixOverlayDiv">';
					displayString = displayString + '<img class="img-responsive" src="' + obj[i].imagePath + '">';
					displayString = displayString + '<div class="OverlayText">';
					displayString = displayString + obj[i].imageCount + '<br /><span class="link"><i class="fa fa-link"></i></span>';
					displayString = displayString + '</div>';
					displayString = displayString + '</div>';
					displayString = displayString + '<p class="image-desc">';
					displayString = displayString + '<strong>' + obj[i].description + '</strong>';
					displayString = displayString + '</p>';
					displayString = displayString + '</a>';
					displayString = displayString + '</div>';
                }

                var $content = $(displayString); 
                $content.css('display','none');

                $grid.append($content).imagesLoaded(
                    function(){
                        $content.fadeIn(250);
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
        if ($(window).scrollTop() >= ($(document).height() - $(window).height())* 0.6 ){
			console.log("suresh");
            if($(".lastpage").length == 0){
                var pagenum = parseInt($(".pagenum:last").val()) + 1;
                // console.log(pagenum);
                // alert(base_url+'testing/albums/?page='+pagenum);
                if(!processing)
                {
                    getresult(base_url+'listing/photoAlbums/03/?page='+pagenum);
                }
            }
        }
    });
});     
</script>


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
                                    <button class="btn btn-default" onclick="return validateTextField();" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                                <div id="tooltip">Search Term is required</div>
                            </div>
                        </form>

                    </li>
                </ul>
            </div>
    </div>
</div>

<?php
	$searchTerm = $data['searchTerm'];
	unset($data['searchTerm']);
	$description = $data["description"]; unset($data["description"]);
?>
<div id="grid" class="container-fluid" data-page="1" data-go="1">
    <div id="posts">
        <div class="post no-border"></div>
<?php foreach ($data as $row) { ?>
        <div class="post">
			<?php
				$method = 'archive';
				if(preg_match('/^' . PHOTOS . '__.*/', $row->id))
				$method = 'photo';
			?>
            <a href="<?=BASE_URL?>describe/<?=$method?>/<?=$row->albumID . '/' . $row->id . '/?searchTerm=' . $searchTerm?>" title="View Details">
                <img src="<?=$row->randomImagePath?>">
                <?php if($row->field) { ?><p class="image-desc"><?=$row->field?></p><?php } ?>
            </a>
        </div>
<?php } ?>
    </div>
</div>
<div id="loader-icon">
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><br />
    Loading more items
</div>
<script>
$(document).ready(function(){
    $('.post.no-border').prepend('<div class="albumTitle Search"><span><i class="fa fa-search"></i> ' + '<?=$description?>' + '</span></div>');
    
    function getresult(url) {
        $('#grid').attr('data-go', '0');
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
                $('#grid').attr('data-go', '0');
                if(data == "\"noData\"") {

					$('#grid').append('<div id="no-more-icon">No more<br />items<br />to show</div>');
					$('#loader-icon').hide();
					return;
				}
                var gutter = parseInt(jQuery('.post').css('marginBottom'));
                var $grid = $('#posts').masonry({
                    gutter: gutter,
                    itemSelector: '.post',
                    columnWidth: '.post'
                });
                var obj = JSON.parse(data);
                var displayString = "";
                var method = 'archive';
                for(i=0;i<Object.keys(obj).length-2;i++)
                {
                    var re = new RegExp("^" + photos + "");
                    if(re.test(obj[i].id))method = 'photo';

                    
                    displayString = displayString + '<div class="post">';   
                        displayString = displayString + '<a href="' + <?='base_url'; ?> + 'describe/' + method + '/' + obj[i].albumID + '/' + obj[i].id + '/?searchTerm=' + '<?=$description?>' + '" title="View Details">';
                            displayString = displayString + '<img class="img-responsive" src="' +  obj[i].randomImagePath + '">';
                            if(obj[i].field){displayString = displayString + '<p class="image-desc">' + obj[i].field + '</p>'};
                        displayString = displayString + '</a>';
                    displayString = displayString + '</div>';
                    
                }
                

                var $content = $(displayString);
                $content.css('display','none');
                $grid.append($content).imagesLoaded(
                    function(){
                        $content.fadeIn(500);
                        $grid.masonry('appended', $content);
                        $('#grid').attr('data-go', '1');
                    }
                );                                     

               displayString = "";
            },
            error: function(){console.log("Fail");}             
      });
    }
    $(window).scroll(function(){
        if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.65){
			if($('#grid').attr('data-go') == '1') 
			{
				var pagenum = parseInt($('#grid').attr('data-page')) + 1;
				$('#grid').attr('data-page', pagenum);
                getresult(base_url+'search/field/?description=' + '<?=$description?>' +'&page='+pagenum);
			}
        }
    });
});
</script>

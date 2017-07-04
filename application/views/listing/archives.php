<?php
	$albumDetails = $data['albumDetails']; unset($data['albumDetails']);
	$albumID = $data[0]->albumID;
    $archiveType = $viewHelper->getArchiveType($data[0]->albumID);
?>
<div id="grid" class="container-fluid" data-page="1" data-go="1">
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
<div id="loader-icon">
    <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><br />
    Loading more items
</div>
<script>
$(document).ready(function(){

    $('.post.no-border').prepend('<div class="albumTitle <?=$archiveType?>"><span><?=$archiveType?></span></div>');
    var albumID = <?php echo  '"' . $albumID . '"';  ?>;
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
                getresult(base_url+'listing/archives/' + albumID + '/?page='+pagenum);
            }
        }
    });
});     
</script>

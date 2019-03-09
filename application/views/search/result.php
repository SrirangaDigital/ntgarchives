<?php
	$searchTerm = $data['searchTerm'];
	unset($data['searchTerm']);
	$description = $data["description"]; unset($data["description"]);
?>
<ul class="nav nav-tabs nav-justified">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="#">Menu 1</a></li>
  <li><a href="#">Menu 2</a></li>
  <li><a href="#">Menu 3</a></li>
</ul>
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

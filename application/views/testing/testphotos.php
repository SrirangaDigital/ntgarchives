<?php $albumDetails = $data['albumDetails']; unset($data['albumDetails']);?>
<?php $albumID = $data[0]->albumID;?>


<script>
$(document).ready(function(){

// $('#posts').change(function(){
//     buildMasonry();
//     });

	var albumID = <?php echo  '"' . $albumID . '"';  ?>;
	console.log(albumID);

    function getresult(url) {
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
				console.log(data);
                var gutter = parseInt(jQuery('.post').css('marginBottom'));
                var $grid = $('#posts').masonry({
                    gutter: gutter,
                    // specify itemSelector so stamps do get laid out
                    itemSelector: '.post',
                    columnWidth: '.post'
                });
                var obj = JSON.parse(data);
                var displayString = "";
                for(i=0;i<Object.keys(obj).length-2;i++)
                {                    
                    // console.log(obj[i].randomimage);    
                    // console.log(JSON.parse(obj[i].description).Title);
					//~ console.log(obj[i].albumID);
                    displayString = displayString + '<div class="post">';    
                    displayString = displayString + '<a href="' + <?php echo '"' . BASE_URL . '"'; ?> + 'describe/photo/'+ albumID + '/' + obj[i].id + '" title="View Details">';
                    displayString = displayString + '<img src="' + <?php echo '"' . PHOTO_URL . '"'; ?> + albumID + '/thumbs/' + obj[i].actualID  + '.JPG" >';
					if(obj[i].Caption){
						displayString = displayString + '<p class="image-desc">';
						displayString = displayString + '<strong>' + obj[i].Caption + '</strong>';    
						displayString = displayString + "</p>";
					}    
                    displayString = displayString + '</a>'; 
                    displayString = displayString + '</div>';
                }

                var $content = $( displayString );
                $grid.append($content).masonry( 'appended', $content);
 
                // console.log(obj.hidden);
                // $("#posts").append(displayString).masonry('appended');
                $("#hidden-data").append(obj.hidden);
                $grid.masonry();
            },
            error: function(){console.log("Fail");}             
      });
    }
    $(window).scroll(function(){
        if ($(window).scrollTop() == $(document).height() - $(window).height()){
            if($(".lastpage").length == 0){
                var pagenum = parseInt($(".pagenum:last").val()) + 1;
                // alert(base_url+'testing/photos/' + albumID + '/?page='+pagenum);
                getresult(base_url+'testing/photos/' + albumID + '/?page='+pagenum);
            }
            else{
                    var gutter = parseInt(jQuery('.post').css('marginBottom'));
                    var $grid = $('#posts').masonry({
                        gutter: gutter,
                        // specify itemSelector so stamps do get laid out
                        itemSelector: '.post',
                        columnWidth: '.post'
                    });
                    $grid.masonry();
            }            
        }
    });
});     
</script>

<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <ul class="list-inline sub-nav">
                <li><a href="<?=BASE_URL?>listing/albums">Albums</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>Publications">Publications</a></li>
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
<?php 
    $hiddenData = $data["hidden"]; 
    unset($data["hidden"]);
?>   		
        <div class="post no-border">
            <div class="image-desc-full">
                <?=$viewHelper->displayFieldData($albumDetails->description)?>
            </div>
        </div>
<?php foreach ($data as $row) { ?>
        <div class="post">
            <?php $actualID = $viewHelper->getActualID($row->id); ?>
            <a href="<?=BASE_URL?>describe/photo/<?=$row->albumID . '/' . $row->id?>" title="View Details">
                <img src="<?=PHOTO_URL . $row->albumID . '/thumbs/' . $actualID . '.JPG'?>">
                <?php
                    $caption = $viewHelper->getDetailByField($row->description, 'Caption');
                    if ($caption) echo '<p class="image-desc"><strong>' . $caption . '</strong></p>';
                ?>
            </a>
        </div>
<?php } ?>
    </div>
</div>
<div id="hidden-data">
    <?php echo $hiddenData; ?>
</div>
<div id="loader-icon">
	<img src="<?=STOCK_IMAGE_URL?>loading.gif" />
<div>

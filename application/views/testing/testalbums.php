<script>
$(document).ready(function(){

// $('#posts').change(function(){
//     buildMasonry();
//     });

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
                var gutter = parseInt(jQuery('.post').css('marginBottom'));
                var $grid = $('#posts').masonry({
                    gutter: gutter,
                    // specify itemSelector so stamps do get laid out
                    itemSelector: '.post',
                    columnWidth: '.post'
                });
                var obj = JSON.parse(data);
                var displayString = "";
                for(i=0;i<Object.keys(obj).length-1;i++)
                {                    
                    // console.log(obj[i].randomimage);    
                    // console.log(JSON.parse(obj[i].description).Title);
                    displayString = displayString + '<div class="post">';    
                    displayString = displayString + '<a href="' + <?php echo '"' . BASE_URL . '"'; ?> + 'testing/photos/'+ obj[i].albumID + '" title="View Album">';
                    displayString = displayString + '<div class="fixOverlayDiv">';
                    displayString = displayString + '<img class="img-responsive" src="' + obj[i].Randomimage + '">';
                    displayString = displayString + '<div class="OverlayText">' + obj[i].Photocount + '<br /><small>' + obj[i].Event + '</small> <span class="link"><i class="fa fa-link"></i></span></div>';
                    displayString = displayString + '</div>';
                    displayString = displayString + '<p class="image-desc">';
                    displayString = displayString + '<strong>' + JSON.parse(obj[i].description).Title + '</strong>';    
                    displayString = displayString + "</p>";    
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
                // alert(base_url+'testing/albums/?page='+pagenum);
                getresult(base_url+'testing/albums/?page='+pagenum);
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
                <li><a href="<?=BASE_URL?>testing/albums">Albums</a></li>
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
<?php foreach ($data as $row) { ?>
        <div class="post">
            <a href="<?=BASE_URL?>testing/photos/<?=$row->albumID?>" title="View Album">
                <div class="fixOverlayDiv">
                    <img class="img-responsive" src="<?=$viewHelper->includeRandomThumbnail($row->albumID)?>">
                    <div class="OverlayText"><?=$viewHelper->getPhotoCount($row->albumID)?><br /><small><?=$viewHelper->getDetailByField($row->description, 'Event')?></small> <span class="link"><i class="fa fa-link"></i></span></div>
                </div>
                <p class="image-desc">
                    <strong><?=$viewHelper->getDetailByField($row->description, 'Title')?></strong>
                </p>
            </a>
        </div>
<?php } ?>
    </div>
</div>
<div id="hidden-data">
    <?php echo $hiddenData; ?>
</div>
<div id="loader-icon"><img src="<?=STOCK_IMAGE_URL?>loading.gif" /><div>
<script>buildMasonry();</script>     

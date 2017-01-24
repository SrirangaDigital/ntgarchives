<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <ul class="list-inline sub-nav">
                <li><a href="<?=BASE_URL?>listing/albums">Albums</a></li>
                <li><a>·</a></li>
                <li><a href="#">Publications</a></li>
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
        <div class="post">
			<a href="<?=PUBLIC_URL?>multimedia/Prof_Santhakumar_11_06_2016.mp3" target="_blank">
				<div class="icon-large">	
					<i class="fa fa-volume-up"></i>
				</div>
			</a>	
			<p class="image-desc">
                <strong>Prof. Santhakumar Interview<br /> (11 Jun, 2016)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>multimedia/Prof_Santhakumar_11_06_2016.mp3" target="_blank">Listen to the Audio</a></strong>  
            </p>
        </div>   
        <div class="post">
			<a href="<?=PUBLIC_URL?>multimedia/Prof_Subramanian_interview.mp3" target="_blank">
				<div class="icon-large">
					<i class="fa fa-volume-up icon-large"></i>
				</div>
			</a>	
            <p class="image-desc">
                <strong>Prof. Subramanian Interview</strong><br />
                <strong><a href="<?=PUBLIC_URL?>multimedia/Prof_Subramanian_interview.mp3" target="_blank">Listen to the Audio</a></strong>  
            </p>
        </div>  
    
    </div>
</div>

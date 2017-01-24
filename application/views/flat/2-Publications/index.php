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
         <div class="post no-border">
            <div class="image-desc-full-alt">
                <ul class="list-unstyled">
                    <li><strong>Periodicals by IIT, Madras</strong></li>
                    <li><span class="image-desc-meta"><a href="#AnnualNumber">Annual Number</a></span></li>
                    <li><span class="image-desc-meta"><a href="#campastimes">Campastimes</a></span></li>
                    <li><span class="image-desc-meta"><a href="#spectator">Spectator</a></span></li>
                    <li><span class="image-desc-meta"><a href="#the_rag_mandak">The Rag Mandak</a></span></li>
                    <li><span class="image-desc-meta"><a href="#hochronicle">Hochronicle</a></span></li>
                </ul>            
            </div>
        </div>
        <div class="post" id="AnnualNumber">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/an-003.jpg">
            <p class="image-desc">
                <strong>Annual Number 3</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf" target="_blank">PDF</a></strong>  
                <button class="TOCtoggle toggle-button" data-name="003">TOC</button>
                <div id="toc-003" class="toc">
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=9" target="_blank">Editorial</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=11" target="_blank">Message</a><br />
                        <span class="toc-author">Prof. B. Sengupto</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=13" target="_blank">An Extract</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=14" target="_blank">At the Circus</a><br />
                        <span class="toc-author">Dr. Th. Ramachandran</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=18" target="_blank">The Canteen</a><br />
                        <span class="toc-author">G. Viswanathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=19" target="_blank">Damn the Congo</a><br />
                        <span class="toc-author">T. S. Ananthu</span><br />
                        <span class="toc-author">K. M. Kripanarayanan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=22" target="_blank">Dejections</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=25" target="_blank">Noises</a><br />
                        <span class="toc-author">V. K. Vedapuri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=26" target="_blank">Rock Climbing</a><br />
                        <span class="toc-author">C. V. Seshadri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=31" target="_blank">For Official Use Only</a><br />
                        <span class="toc-author">T. S. R.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=33" target="_blank">Balmy Days at Brisbane</a><br />
                        <span class="toc-author">R. Natarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=38" target="_blank">The First Five Year Plan</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=38" target="_blank">Summer</a><br />
                        <span class="toc-author">G. Viswanathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=39" target="_blank">A Wish Granted</a><br />
                        <span class="toc-author">K. M. Kripanarayanan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=40" target="_blank">Impressions</a><br />
                        <span class="toc-author">J. C. Camillus</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=41" target="_blank">Ashta Graha</a><br />
                        <span class="toc-author">R. T. Narayanan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=#" target="_blank">Grades are Sour</a><br />
                        <span class="toc-author">T. S. Ananthu</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=42" target="_blank">The Engineer's Wand - A Fantasy</a><br />
                        <span class="toc-author">P. Mohan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=46" target="_blank">The Road to I.I.T.</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=47" target="_blank">A Novel Souvenir</a><br />
                        <span class="toc-author">Dr. V. Anantaraman</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=50" target="_blank">The Timachine</a><br />
                        <span class="toc-author">Sudhir Puri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=53" target="_blank">German Language</a><br />
                        <span class="toc-author">M. Venkateswara Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=54" target="_blank">If I were the Creator</a><br />
                        <span class="toc-author">D. D. Samuel</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=#" target="_blank">The Buddha</a><br />
                        <span class="toc-author">G. Viswanathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=#" target="_blank">Defence of our Motherland</a><br />
                        <span class="toc-author">R. Prabhakar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=58" target="_blank">The Gestetner Civilisation</a><br />
                        <span class="toc-author">Dr. Th. Ramachandran</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=59" target="_blank">Fly</a><br />
                        <span class="toc-author">N. Ramesh</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=#" target="_blank">A Pet Problem</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=60" target="_blank">The Aromatic River</a><br />
                        <span class="toc-author">R. T. narayanan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=61" target="_blank">A Portrait of Nehru</a><br />
                        <span class="toc-author">M. A. Abdul Khader</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=63" target="_blank">The Quaint ways in British Parliament</a><br />
                        <span class="toc-author">S. Seshadri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=71" target="_blank">The Chemistry of an Engineer</a><br />
                        <span class="toc-author">K. Koteeswaran</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=75" target="_blank">I.I.T. Through Photographs</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=79" target="_blank">I.I.T. Through Cartoons</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=80" target="_blank">Institute Gymkhana</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=88" target="_blank">Chronicle</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=92" target="_blank">A Distinguished visitor to our Campus</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=93" target="_blank">Faculty Association</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=#" target="_blank">I.I.T. Co-operative Stores</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=#" target="_blank">Students Aid Fund</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=94" target="_blank">Hostels</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=95" target="_blank">I.I.T. Employees Co-operative Housing Society Ltd.</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=96" target="_blank">Tech - Out</a><br />
                        <span class="toc-author">C. V. S.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=99" target="_blank">Report on the Inter&#8212;I.I.T. Sports Meet</a><br />
                        <span class="toc-author">S. A. Aleem</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=100" target="_blank">N. C. C. Rifles</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=104" target="_blank">Our Library</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/003.pdf#page=105" target="_blank">Pink Pages</a>
                    </p>
                </div>
            </p>
        </div>
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/an-004.jpg">
            <p class="image-desc">
                <strong>Annual Number 4</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf" target="_blank">PDF</a></strong>
                <button class="TOCtoggle toggle-button" data-name="004">TOC</button>
                <div id="toc-004" class="toc">
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=7" target="_blank">Message</a><br />
                        <span class="toc-author">Prof. B. Sengupto</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=11" target="_blank">Editorial</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=15" target="_blank">Dr. H. C. Heinrich Luebke</a><br />
                        <span class="toc-author">N. Klein</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=16" target="_blank">A Resolve</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=17" target="_blank">Keys</a><br />
                        <span class="toc-author">S. Nageshwar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=20" target="_blank">Why did the Chinese attack us</a><br />
                        <span class="toc-author">T. S. Ananthu</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=29" target="_blank">Long in Delay</a><br />
                        <span class="toc-author">N. Ramesh</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=30" target="_blank">Rewriting Indian History</a><br />
                        <span class="toc-author">M. S. Vairana Pillai</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=33" target="_blank">Was there Love</a><br />
                        <span class="toc-author">N. Ramesh</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=34" target="_blank">Ah! That Unnecessary Evil</a><br />
                        <span class="toc-author">G. T. Sundararajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=#" target="_blank">Emotions and Human Behaviour</a><br />
                        <span class="toc-author">V. Ranganathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=38" target="_blank">A Sonnet on Vivekananda</a><br />
                        <span class="toc-author">G. Viswanathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=39" target="_blank">Stumped</a><br />
                        <span class="toc-author">M. Vikram Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=44" target="_blank">The Society of the Invisible Intellectuals</a><br />
                        <span class="toc-author">D. D. Samuel</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=48" target="_blank">On Neutrality</a><br />
                        <span class="toc-author">T. V. G. Krishnamurthy</span><br />
                        <span class="toc-author">D. B. Venkateswaralu</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=53" target="_blank">The Panther from Baroda</a><br />
                        <span class="toc-author">R. Natarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=56" target="_blank">One more N</a><br />
                        <span class="toc-author">Nandakumar R. Dave</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=61" target="_blank">The Absent Minded Engineer</a><br />
                        <span class="toc-author">V. Koteeswaran</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=64" target="_blank">No man is an island</a><br />
                        <span class="toc-author">Umbra</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=71" target="_blank">Twilight in the Campus</a><br />
                        <span class="toc-author">Umbra</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=72" target="_blank">K vs. K</a><br />
                        <span class="toc-author">J. C. Camillus</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=74" target="_blank">The Opium Den</a><br />
                        <span class="toc-author">P. Mohan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=77" target="_blank">Some Reflections on Inertia</a><br />
                        <span class="toc-author">D. V. Reddy</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=80" target="_blank">Be Happy</a><br />
                        <span class="toc-author">K. V. Rangaswamy</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=82" target="_blank">Alien in One's own land</a><br />
                        <span class="toc-author">Th. Ramachandran</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=85" target="_blank">This is Delhi</a><br />
                        <span class="toc-author">R. A. Vaswani</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=88" target="_blank">Our Library</a><br />
                        <span class="toc-author">G. Viswanathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=95" target="_blank">World's Scriptures</a><br />
                        <span class="toc-author">V. K. Vedapuri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=103" target="_blank">Viper, Thy Neighbour</a><br />
                        <span class="toc-author">T. S. R.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=104" target="_blank">I Hiss</a><br />
                        <span class="toc-author">Snake</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=106" target="_blank">Jest Before Justice</a><br />
                        <span class="toc-author">S. Srikant</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=114" target="_blank">Perennial Flower</a><br />
                        <span class="toc-author">Venugopal</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=117" target="_blank">The Atom</a><br />
                        <span class="toc-author">S. Sreenivasan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=118" target="_blank">3rd December 1962&#8212;A Red Letter Day</a><br />
                        <span class="toc-author">Prof. R. Krishnamurthi</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=127" target="_blank">Reports&#8212;Yellow Pages</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/004.pdf#page=177" target="_blank">Advertisement&#8212;Pink Pages</a>
                    </p>
                </div>                
            </p>
        </div>
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/an-005.jpg">
            <p class="image-desc">
                <strong>Annual Number 5</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf" target="_blank">PDF</a></strong>
                <button class="TOCtoggle toggle-button" data-name="005">TOC</button>
                <div id="toc-005" class="toc">
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=5" target="_blank">Message</a><br />
                        <span class="toc-author">Gerhard Fischer</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=9" target="_blank">Editorial</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=11" target="_blank">Peep into a Project</a><br />
                        <span class="toc-author">Prof. B. Sengupto</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=23" target="_blank">Impact of Engineering on Society</a><br />
                        <span class="toc-author">Shri K. Ramachandra</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=29" target="_blank">The Kennedy Effect</a><br />
                        <span class="toc-author">Shri T. S. Ananthu</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=34" target="_blank">Human Rights</a><br />
                        <span class="toc-author">Shri R. Natarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=40" target="_blank">A Poem</a><br />
                        <span class="toc-author">Shri. S. R. Sivaramakrishnan</span><br />
                        <span class="toc-author">Shri R. Subramanian</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=44" target="_blank">Time and Tide</a><br />
                        <span class="toc-author">Prof. B. Sengupto</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=49" target="_blank">Random Thoughts on Indian History</a><br />
                        <span class="toc-author">Shri R. V. S. Mani</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=52" target="_blank">Accidents Don't Just Happen</a><br />
                        <span class="toc-author">Shri S. K. Kazi</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=55" target="_blank">Congress in Artificial Atmosphere</a><br />
                        <span class="toc-author">Shri P. Poornanjaneya Sastry</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=59" target="_blank">All in the game (Cartoons)</a><br />
                        <span class="toc-author">Shri Philip Dhinakaran</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=63" target="_blank">The Last Hour of the Morning</a><br />
                        <span class="toc-author">Shri B. Madhusudan Menon</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=62" target="_blank">Patriot and Prophet</a><br />
                        <span class="toc-author">Shri V. K. Vedapuri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=68" target="_blank">On Faith</a><br />
                        <span class="toc-author">Dr. T. Gopichand</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=74" target="_blank">Sparks from the Accounts Anvil</a><br />
                        <span class="toc-author">Shri G. T. Sundararajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=76" target="_blank">Two Poems</a><br />
                        <span class="toc-author">Shri A. Anantharama Iyer</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=78" target="_blank">Destiny Steers Ambition</a><br />
                        <span class="toc-author">Shri D. D. Samuel</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=81" target="_blank">A Story of History</a><br />
                        <span class="toc-author">Shri M. Venkateswara Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=84" target="_blank">Nosegay</a><br />
                        <span class="toc-author">Shri K. Narayanan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=93" target="_blank">The Newest Religion</a><br />
                        <span class="toc-author">Shri T. S. Ananthu</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=98" target="_blank">Three Poems</a><br />
                        <span class="toc-author">Shri E. S. Bhagiratha Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=100" target="_blank">Superstition</a><br />
                        <span class="toc-author">Shri M. Vikram Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=103" target="_blank">Annual Reports &#8212; Yellow Pages</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/005.pdf#page=180" target="_blank">Advertisements &#8212; Pink Pages</a>
                    </p>
                </div>                
            </p>
        </div>
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/an-006.jpg">
            <p class="image-desc">
                <strong>Annual Number 6</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf" target="_blank">PDF</a></strong>
                <button class="TOCtoggle toggle-button" data-name="006">TOC</button>
                <div id="toc-006" class="toc">
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=7" target="_blank">Editorial</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=9" target="_blank">Future Sources of Power and Energy</a><br />
                        <span class="toc-author">C. Sivaram</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=12" target="_blank">Sri R. Natarajan - A Tribute</a><br />
                        <span class="toc-author">Prof. S. Sampath</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=16" target="_blank">Nehru&#8212;The Champion of Peace</a><br />
                        <span class="toc-author">A. N. Narayanaswamy</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=18" target="_blank">The City Bus Ride</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=20" target="_blank">Walking in the Rain (Poem)</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=21" target="_blank">The Other Hand</a><br />
                        <span class="toc-author">Ranjit Puri</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=23" target="_blank">The Film Club (Poem)</a><br />
                        <span class="toc-author">M. Menon</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=24" target="_blank">Sir Winston Analysed</a><br />
                        <span class="toc-author">T. S. Ananthu</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=27" target="_blank">Stroll by the Sea (Poem)</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=28" target="_blank">Women's Education in Germany</a><br />
                        <span class="toc-author">Hildegarde Rauve</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=35" target="_blank">Marvel From Mangalore</a><br />
                        <span class="toc-author">R. Natarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=37" target="_blank">A Rendezvous with......</a><br />
                        <span class="toc-author">V. Ranganathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=38" target="_blank">Indian Summer (Poem)</a><br />
                        <span class="toc-author">V. S. Kumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=39" target="_blank">Cairo (or Abbas)</a><br />
                        <span class="toc-author">R. Shankar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=44" target="_blank">On Self Deceit</a><br />
                        <span class="toc-author">T. Gopichand</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=47" target="_blank">No Swimming for me, Please!</a><br />
                        <span class="toc-author">S. Narayan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=49" target="_blank">A Shattered Hope (Poem)</a><br />
                        <span class="toc-author">M. Venkateswara Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=50" target="_blank">First Impressions</a><br />
                        <span class="toc-author">Fresher</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=52" target="_blank">Beware of Dog</a><br />
                        <span class="toc-author">M. S. Chandramouli</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=55" target="_blank">Avernus Diaboli</a><br />
                        <span class="toc-author">V. Anantharaman</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=57" target="_blank">Humour in Fiction</a><br />
                        <span class="toc-author">M. Vikram Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=59" target="_blank">The Shepherd's Call (Poem)</a><br />
                        <span class="toc-author">P. Sudarsan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=60" target="_blank">Merry Go Round</a><br />
                        <span class="toc-author">K. Narayanan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=67" target="_blank">Who Knows It?</a><br />
                        <span class="toc-author">M. Hariharan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=69" target="_blank">Misleading Miscellany</a><br />
                        <span class="toc-author">P. S. Srinivasan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=71" target="_blank">A Vision of the Future</a><br />
                        <span class="toc-author">M. Menon</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=73" target="_blank">Nature's Catechism on Life</a><br />
                        <span class="toc-author">G. Sampath</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=75" target="_blank">Destination B. Tech. ...</a><br />
                        <span class="toc-author">Arvind Johari</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=83" target="_blank">Annual Reports &#8212; Yellow Pages</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/006.pdf#page=131" target="_blank">Advertisement &#8212; Blue Pages</a>
                    </p>
                </div>                
            </p>
        </div>
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/an-007.jpg">
            <p class="image-desc">
                <strong>Annual Number 7</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf" target="_blank">PDF</a></strong>
                <button class="TOCtoggle toggle-button" data-name="007">TOC</button>
                <div id="toc-007" class="toc">
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=7" target="_blank">Board of Governors</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=8" target="_blank">Editorial</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=13" target="_blank">Republic Day Address</a><br />
                        <span class="toc-author">Prof. B. Sengupto</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=15" target="_blank">The Bootlegger</a><br />
                        <span class="toc-author">Alex Phillipos</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=20" target="_blank">My Most Unforgettable Character</a><br />
                        <span class="toc-author">G. Sampath</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=23" target="_blank">On Teaching Methods</a><br />
                        <span class="toc-author">T. Gopichand</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=27" target="_blank">Choosing Engineer as a Career to-day</a><br />
                        <span class="toc-author">Bhagaban Das</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=31" target="_blank">A Garland of Memories</a><br />
                        <span class="toc-author">R. Natarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=34" target="_blank">Nature Dwells Secretly</a><br />
                        <span class="toc-author">Muthukrishnan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=38" target="_blank">The Vanavani Primary School</a><br />
                        <span class="toc-author">Father Murphy, S. J.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=43" target="_blank">Kumbhakarna &#8212; A Kambachithram</a><br />
                        <span class="toc-author">M. G. Srinivasan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=52" target="_blank">Oh! Darling</a><br />
                        <span class="toc-author">K. Venkataramani</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=55" target="_blank">Swami Vivekananda &#8212; A Great Son of India</a><br />
                        <span class="toc-author">P. Venkatesan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=#" target="_blank">Night</a><br />
                        <span class="toc-author">R. K. Prakash</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=58" target="_blank">When IIT is Petticoated</a><br />
                        <span class="toc-author">T. N. Vijay Reddy</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=61" target="_blank">Random Reflections</a><br />
                        <span class="toc-author">V. J. R. Asirvatham</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=64" target="_blank">My Girl Hildegund</a><br />
                        <span class="toc-author">A. Johari</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=67" target="_blank">An Evening at the Shopping Centre</a><br />
                        <span class="toc-author">Saktikumar</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=69" target="_blank">Matrimonial Prospects of a Graduate</a><br />
                        <span class="toc-author">M. Venkateswara Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=71" target="_blank">In Defence of the Punster</a><br />
                        <span class="toc-author">G. Govindarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=73" target="_blank">The Ways of IIT</a><br />
                        <span class="toc-author">O.M.N.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=77" target="_blank">The Royal Tiger from Pataudi</a><br />
                        <span class="toc-author">R. Natarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=80" target="_blank">Protection to an Accused under the Constitution</a><br />
                        <span class="toc-author">S. Srikant</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=87" target="_blank">Chem Gems</a>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=#" target="_blank">On the Obligations of a group of finite beings</a><br />
                        <span class="toc-author">Peses</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=94" target="_blank">Our Literary Week</a><br />
                        <span class="toc-author">R. K. Prakash</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=95" target="_blank">The Advaita Philosophy in the Bhagvat Gita</a><br />
                        <span class="toc-author">V. Ranganathan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=97" target="_blank">The Cycle</a><br />
                        <span class="toc-author">Alex Phillipos</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=102" target="_blank">Our N. C. C. Camp</a><br />
                        <span class="toc-author">S. Ramajayam</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=107" target="_blank">Towards Comfort</a><br />
                        <span class="toc-author">P. S. K.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=108" target="_blank">Electronics in the Service of Man</a><br />
                        <span class="toc-author">Zakria Sait</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=111" target="_blank">A Room to Let</a><br />
                        <span class="toc-author">Veer</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=114" target="_blank">Music in Technology land</a><br />
                        <span class="toc-author">T. Varadarajan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=118" target="_blank">Why I like Solitude</a><br />
                        <span class="toc-author">Y. Visweswara Rao</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=120" target="_blank">Buzz in Buses</a><br />
                        <span class="toc-author">B. C.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=122" target="_blank">The Great Detective</a><br />
                        <span class="toc-author">Mystic</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=125" target="_blank">The Deserted Fane</a><br />
                        <span class="toc-author">P. Venkatesan</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=129" target="_blank">Love</a><br />
                        <span class="toc-author">G. Sampath</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=131" target="_blank">The Making of a Hero</a><br />
                        <span class="toc-author">Charanjit Singh</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=134" target="_blank">Red Letter Days</a><br />
                        <span class="toc-author">Vijay G.</span>
                    </p>
                    <p>
                        <a href="<?=PUBLIC_URL?>pdf/annual-numbers/007.pdf#page=139" target="_blank">The Institute Gymkhana Commitiee Reports</a>
                    </p>
                </div>
            </p>
        </div>
        <div class="post" id="campastimes">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_4_4.jpg">
            <p class="image-desc">
                <strong>Volume 4, No. 4</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/004-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>        
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_4_6.jpg">
            <p class="image-desc">
                <strong>Volume 4, No. 6</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/004-06.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_5_2.jpg">
            <p class="image-desc">
                <strong>Volume 5, No. 2</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/005-02.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_5_4.jpg">
            <p class="image-desc">
                <strong>Volume 5, No. 4</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/005-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_6_2.jpg">
            <p class="image-desc">
                <strong>Volume 6, No. 2</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/006-02.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_6_3.jpg">
            <p class="image-desc">
                <strong>Volume 6, No. 3</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/006-03.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_6_7.jpg">
            <p class="image-desc">
                <strong>Volume 6, No. 7</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/006-07.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_7_1.jpg">
            <p class="image-desc">
                <strong>Volume 7, No. 1</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/007-01.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_7_2.jpg">
            <p class="image-desc">
                <strong>Volume 7, No. 2</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/007-02.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_7_3.jpg">
            <p class="image-desc">
                <strong>Volume 7, No. 3</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/007-03.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_7_4.jpg">
            <p class="image-desc">
                <strong>Volume 7, No. 4</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/007-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>        
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_8_1.jpg">
            <p class="image-desc">
                <strong>Volume 8, No. 1</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/008-01.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_8_2.jpg">
            <p class="image-desc">
                <strong>Volume 8, No. 2</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/008-02.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_8_3.jpg">
            <p class="image-desc">
                <strong>Volume 8, No. 3</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/008-03.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_8_4.jpg">
            <p class="image-desc">
                <strong>Volume 8, No. 4</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/008-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_8_5.jpg">
            <p class="image-desc">
                <strong>Volume 8, No. 5</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/008-05.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_8_6.jpg">
            <p class="image-desc">
                <strong>Volume 8, No. 6</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/008-06.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>               
        <div class="post">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ct_special.jpg">
            <p class="image-desc">
                <strong>7 Year Special Issue</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/campastimes/special.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>         
        <div class="post" id="spectator">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-04.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-09-04.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 4 (04 Sep, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-13.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-09-13.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 1 (13 Sep, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-13.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-20.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-09-20.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 2 (20 Sep, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-20.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-27.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-09-27.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator (27 Sep, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-09-27.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-10-11.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-10-11.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 5 (11 Oct, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-10-11.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-10-18.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-10-18.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 6 (18 Oct, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-10-18.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-10-25.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-10-25.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 7 (25 Oct, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-10-25.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-11-01.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-11-01.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 8 (01 Nov, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-11-01.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-11-08.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1981-11-08.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 9 (08 Nov, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1981-11-08.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-01-10.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-01-10.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 1 (10 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-01-10.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-01-24.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-01-24.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 2 (24 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-01-24.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-01-31.pdf" target="_blank">
               <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-01-31.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 3 (31 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-01-31.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-07.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-02-07.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 4 (07 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-07.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-14.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-02-14.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 5 (14 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-14.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-21.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-02-21.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 6 (21 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-21.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-28.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-02-28.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 7 (28 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-02-28.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-08.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-03-08.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 8 (08 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-08.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-15.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-03-15.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 9 (15 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-15.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-21.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-03-21.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 10 (21 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-21.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-28.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-03-28.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 11 (28 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-03-28.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-04-04.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-04-04.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 12 (04 Apr, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-04-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-04-11.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_1982-04-11.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Issue No. 13 (11 Apr, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator/Spectator_1982-04-11.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1981-11-09.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1981-11-09.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Inter IIT Special (09 Nov, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1981-11-09.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-12.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-12.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 1 (12 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-12.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-13.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-13.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 2 (13 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-13.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-14.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-14.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 3 (14 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-14.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-15.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-15.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 4 (15 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-15.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-16.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-16.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 5 (16 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-16.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-17.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-17.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 6 (17 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-17.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-18.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-01-18.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 7 (18 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-01-18.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-19.pdf" target="_blank">        
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-02-19.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Curtain Raiser (19 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-19.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-20.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-02-20.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 2 (20 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-20.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-21.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-02-21.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 3 (21 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-21.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-22.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-02-22.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 4 (22 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-22.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-23.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-02-23.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 5 (23 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-23.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-24.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-02-24.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 6 (24 Feb, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-02-24.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-19.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-03-19.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 1 (19 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-19.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-20.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-03-20.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 2 (20 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-20.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-23.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-03-23.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 3 (23 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-23.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-24.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-03-24.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 4 (24 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-24.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-25.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-03-25.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Sprinculin'82  - A Miscellany of Cultural Events (25 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-25.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-26.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-03-26.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue No. 6 (26 Mar, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-03-26.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-04-15.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_Special_1982-04-15.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Special Issue (15 Apr, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_Special_1982-04-15.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_spectator-inter-iit.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_spectator-inter-iit.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Inter IIT Meet (17 Jan, 1982)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_spectator-inter-iit.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_spectator-misc1.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_spectator-misc1.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator - Statistically Speaking</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_spectator-misc1.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_spectator-misc2.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Spectator_spectator-misc2.jpg">
            </a>
            <p class="image-desc">
                <strong>Spectator Miscellaneous</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Spectator_Special/Spectator_spectator-misc2.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post" id="the_rag_mandak">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-02.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-02-02.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 1 (2 Feb, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-02.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-08.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-02-08.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 2 (8 Feb, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-08.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-15.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-02-15.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 3(15 Feb, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-15.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-22.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-02-22.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 4 (22 Feb, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-22.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-28.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-02-28.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 5 (28 Feb, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-02-28.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-07.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-03-07.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 6 (7 Mar, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-07.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-14.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-03-14.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 7 (14 Mar, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-14.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-21.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-03-21.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 8 (21 Mar, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-21.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-29.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-03-29.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 9 (29 Mar, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-03-29.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-04-04.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-04-04.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 10 (04 Apr, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-04-04.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-04-11.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/The_Rag_Mandak_1981-04-11.jpg">
            </a>
            <p class="image-desc">
                <strong>The Rag Mandak - Issue No. 11 (11 Apr, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/The_Rag_Mandak/The_Rag_Mandak_1981-04-11.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>                                
        <div class="post" id="hochronicle">
            <a href="<?=PUBLIC_URL?>pdf/Hochronicle/Hochronicle_1981-08-31.pdf" target="_blank">           
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Hochronicle_1981-08-31.jpg">
            </a>
            <p class="image-desc">
                <strong>Hochronicle - Issue No. 5 (31 Aug, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Hochronicle/Hochronicle_1981-08-31.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
        <div class="post">
            <a href="<?=PUBLIC_URL?>pdf/Hochronicle/Hochronicle_1981-09-02.pdf" target="_blank">
                <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/Hochronicle_1981-09-02.jpg">
            </a>    
            <p class="image-desc">
                <strong>Hochronicle  - Issue No. 7 (2 Sep, 1981)</strong><br />
                <strong><a href="<?=PUBLIC_URL?>pdf/Hochronicle/Hochronicle_1981-09-02.pdf" target="_blank">PDF</a></strong>
            </p>
        </div>
    </div>
</div>

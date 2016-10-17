
<?php include 'header.php'; ?>
    <div class="section-slider mobiledhidden">
    	<div class="patern-top">
    	</div>
	    <div class="section-slider-wrap">
	      	<div class="wrap">
	        	<div class="row">
	        		<div class="colmd12 owl-gallery">
	        		<?php for($i=0;$i<3;$i++) { ?>
	    				<div class="item">
	    					<img src="/img/slide.png" alt="" title="" />
	    					<a href="#">
	    						<span class="with-border">    							
		    						<span class="border border-left"></span>
		    						<span class="border border-top"></span>
		    						<span class="border border-bottom"></span>
		    						<span class="border border-right"></span>
		    						<span class="top-left"></span>
		    						<span class="top-right"></span>
		    						<span class="bottom-left"></span>
		    						<span class="bottom-right"></span>
	    						</span>
	    						Узнать об условиях
	    					</a>
	    				</div>
	    			<?php } ?>
	        		</div>
	        	</div>	
	        </div>
	    </div>
        <div class="patern-bottom">
        </div>
    </div>
    <div class="section-news">
    	<div class="wrap">
        	<div class="row">
        		<div class="colmd9 colsd8 colxd6 colmobiled12">
        			<p class="titleh2 float-left">Новости Банка</p>
        			<p class="all-news float-left"><img src="/img/style/burger.png" alt="" title="" />Все новости</p>
        			<div class="clear"></div>
        			<div class="news-list xdhidden">
        			<?php for($i=0;$i<3;$i++) { ?>
	    				<div class="news-one <?php if($i==2) echo 'sdhidden'?>">
	    					<div class="news-data">
	    						<p class="big float-left">08</p>
	    						<p class="small float-left">июня<br>2016</p>
	    						<div class="clear"></div>
	    					</div>
	    					<div class="text">
	    						Об утвержении годовой бухгалтерской (финансовой) отчетности за 2015 год
	    					</div>
	    				</div>
	    			<?php } ?>
        			</div>
        			<div class="news-list slider xdshow">
        			<?php for($i=0;$i<3;$i++) { ?>
	    				<div class="news-one <?php if($i==2) echo 'sdhidden'?>">
	    					<div class="news-data">
	    						<p class="big float-left">08</p>
	    						<p class="small float-left">июня<br>2016</p>
	    						<div class="clear"></div>
	    					</div>
	    					<div class="text">
	    						Об утвержении годовой бухгалтерской (финансовой) отчетности за 2015 год
	    					</div>
	    				</div>
	    			<?php } ?>
        			</div>
        		</div>
        		<div class="colmd3 colsd4 colxd6 colmobiled12 cbr-wrap">
        			<p class="titleh2">Курсы валют ЦБ РФ </p>
        			<div class="colmd12 cbr">
        			<?php for($i=0;$i<3;$i++) { ?>
        				<p class="item">
        					<span class="big">USD</span>
        					<span>66,1000</span>
        					<img src="/img/style/arrow.svg" alt="" title="" <?php if($i==1) echo 'class="rotate"'?>/>
        				</p>
        			<?php } ?>	
        			</div>
        		</div>
        	</div>
        </div>
    </div>
<?php include 'footer.php'; ?>
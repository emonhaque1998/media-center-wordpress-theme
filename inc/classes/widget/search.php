<?php 
	class developoer_search extends WP_Widget{
		public function __construct(){
			parent::__construct('developoer_search', 'Eman Search', [
				'description'	=> 'Add Search Bar'
			]);
		}

		public function widget($one, $two){ ?>
			<div class="widget clearfix">
        	<div class="body">
			<form role="search" class="search-form" method="GET">
                <div class="form-group">
                    <label class="sr-only" for="page-search">Type your search here</label>
                    <input id="page-search" class="search-input form-control" type="search" placeholder="Enter Keywords..." name="s">
                </div>
                <button class="page-search-button">
                    <span class="fa fa-search">
                        <span class="sr-only">Search</span>
                    </span>
                </button><!-- /.page-search-button-->
            </form><!-- /.search-form -->
            </div>
    			</div><!-- /.widget -->

		<?php }

		public function form($one){

		}
	}
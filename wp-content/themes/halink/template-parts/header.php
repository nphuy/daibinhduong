<div class="header-style5">
    <header id="header" class="header">
        <div class="header-middle p-0 xs-text-center">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-5">
                        <div class="widget no-border sm-text-center mb-10 m-0">
                            <center>
                                <a class="" href="http://puremart.vn">
                                    <img src="http://puremart.vn/wp-content/uploads/2019/08/lOGO-01.png" width="150" height="135" alt="Puremart.vn – CỬA HÀNG TIỆN LỢI – THỰC PHẨM SẠCH ">
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <!-- Primary navbar -->
    <div id="main-menu" class="main-menu">
        <nav id="primary-menu" class="primary-menu" role="navigation">
            <div class="container">
				<?php 
					get_template_part( 'template-parts/header', 'category' );
				?>
                <div class="mid-header clearfix">
                    <a href="javascript:void(0)" class="phone-icon-menu"></a>
                        <div class="navbar-inner navbar-inverse">
                            <div class="resmenu-container">
                                <div id="ResMenu_primary_menu" class="menu-responsive-wrapper">
									
                                    
                                        </div>
										</div>
										<?php 
										wp_nav_menu([
											'theme_location'=>'menu-primary',
											'menu_class'=>'nav nav-pills nav-mega flytheme-menures',
											'menu_id'=>'menu-main-menu'
										]);
									?>
									</div>
                                        <div id="sidebar-top-menu" class="sidebar-top-menu">
                                                <div class="widget ya_top-3 ya_top non-margin">
                                                        <div class="widget-inner">
                                                                <div class="top-form top-search pull-left">
                                                                        <div class="topsearch-entry">
                                                                                <form role="search" method="get" id="searchform_special" action="http://puremart.vn/">
                                                                                        <div>
                                                                                                <div class="cat-wrapper">
                                                                                                        <label class="label-search">
                                                                                                                <select name="search_category" class="s1_option">
                                                                                                                        <option value="">All Categories</option>
                                                                                                                        <option value="262">Uncategorized</option>
                                                                                                                        <option value="269">THỊT, CÁ</option>
                                                                                                                        <option value="274">ĐỒ ĂN NHANH</option>
                                                                                                                        <option value="275">RAU NẤM - TRÁI CÂY</option>
                                                                                                                        <option value="276">GIA VỊ - ĐỒ KHÔ</option>
                                                                                                                        <option value="277">THỰC PHẨM BỔ SUNG</option>
                                                                                                                        <option value="279">SẢN PHẨM</option>
                                                                                                                        <option value="285">THỰC PHẨM NHÀ BẾP</option>
                                                                                                                        <option value="286">BÁNH KẸO - THỨC UỐNG</option>
                                                                                                                        <option value="287">SỮA VÀ CÁC SẢN PHẨM DINH DƯỠNG</option>
                                                                                                                        <option value="297">ĐỒ DÙNG GIA ĐÌNH - MỸ PHẨM</option>
                                                                                                                        <option value="298">ĐỒ KHÔ</option>
                                                                                                                </select>
                                                                                                        </label>
                                                                                                </div>
                                                                                                <input type="text" value="" name="s" id="s" placeholder="Điền từ khóa tìm kiếm...">
                                                                                                <button type="submit" title="Search" class="fa fa-search button-search-pro form-button"></button>
                                                                                                <input type="hidden" name="search_posttype" value="product">
                                                                                        </div>
                                                                                </form>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </nav>
        </div>
        <!-- /Primary navbar -->
</div>
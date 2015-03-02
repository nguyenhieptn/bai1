<div class="topheader">
	<h1><a href="#" class="logo">logo</a></h1>
	<a class="banner-header" href="#">
		<img alt="Banner Header" src="{{asset("../public/images/banner.jpg")}}"></img>
	</a>
</div><!--End topheader-->
<div class="topmenu">
	<div role="navigation" class="navbar navbar-inverse">
		<div class="navbar-header">
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand">Menu</span>
		</div>

		<div class="navbar-collapse collapse" style="height: 1px;">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="{{asset("/")}}"><i class="glyphicon glyphicon-home"></i> &nbsp;Trang Chủ</a></li>
				<li><a href="#">Tin Tức</a></li>
				<li><a href="#">Ẩm Thực</a></li>
				<li><a href="{{asset('phanhois')}}">Phản Hồi</a></li>
				<li><a href="#">Liên Hệ</a></li>
				<li><a href="{{asset('thongtin')}}">Thông Tin</a></li>
				<li class="form-search input-group">
					<div class="input-group">
						<form action="{{asset("search")}}" method="get" name="form-search">
							<input type="text" class="form-control" placeholder="Search for..." size="45" name="text-search">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</span>
						</form>

				    </div><!-- /input-group -->
				</li>
				<li id='last-li'>
					<div class="col-md-3 btn-login">
                     		<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Đăng nhập</button>
                     		
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Nhập thông tin tài khoản</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                      <div class="form-group">
                                        <label for="recipient-name" class="control-label">User:</label>
                                        <input type="text" class="form-control" id="recipient-name" name="user">
                                      </div>
                                      <div class="form-group">
                                        <label for="message-text" class="control-label">Password:</label>
                                        <input type="password" class="form-control" id="pass" name="pass">
                                      </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"> Thoát</button>
                                    <button type="button" class="btn btn-primary">Đăng nhập</button>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                      </div>
				</li>
				
			</ul>
			
		</div>
	</div>
</div>

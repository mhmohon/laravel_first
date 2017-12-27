<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<div class="sidebar-inner slimscrollleft">

			<!--- Sidemenu -->
			<div id="sidebar-menu">  
				<ul>

					

					<li class="has_sub">
						<a href="{{ url('dashbord') }}" class="waves-effect"><i class="mdi mdi-home mdi-36px"></i> <span> Home </span> </a>
					</li>

					<li class="menu-title">Customer Section</li>

						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple-plus"></i> <span> Customer </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								
								<li><a href="customer_list.html">Customers List</a></li>
							</ul>
						</li>
						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-shopping"></i> <span> Order </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="http://lily-tms.herokuapp.com/orders/create">Add Order</a></li>
								<li><a href="http://lily-tms.herokuapp.com/orders">Orders List</a></li>
							</ul>
						</li>
						
					<li class="menu-title">Product Section</li>

						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-tag-multiple"></i> <span> Category </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								
								<li><a href="{{ URL::to('dashbord/category/create') }}">Add Category</a></li>
								<li><a href="{{ URL::to('dashbord/category') }}">Category List</a></li>
							</ul>
						</li>
						<li class="has_sub">
							<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-shopping"></i> <span> Product </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="http://lily-tms.herokuapp.com/orders/create">Add Product</a></li>
								<li><a href="http://lily-tms.herokuapp.com/orders">Products List</a></li>
							</ul>
						</li>

					<li class="menu-title">Staff Section</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="http://lily-tms.herokuapp.com/staffs/create">Add Staff</a></li>
							<li><a href="http://lily-tms.herokuapp.com/staffs">Staffs List</a></li>
						</ul>
					</li>
					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cash-multiple"></i> <span> Salary </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="http://lily-tms.herokuapp.com/salaries/create">Add Salary</a></li>
							<li><a href="http://lily-tms.herokuapp.com/salaries">Salaries List</a></li>
						</ul>
					</li>

					<li class="menu-title">Setting Section</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-settings-variant"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="http://lily-tms.herokuapp.com/password">Change Password</a></li>
							<li><a href="http://lily-tms.herokuapp.com/logout">Logout</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
			<!-- Sidebar -->
			
		</div>
		<!-- Sidebar -left -->

	</div>
	<!-- Left Sidebar End -->
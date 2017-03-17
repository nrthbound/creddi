<aside class="menu">
	<p class="menu-label">
		Navigation
	</p>
	<ul class="menu-list">
		<li><a class="{{is_active('home')}}">Dashboard</a></li>
		<li><a href="{{route('settings')}}" class="{{is_active('settings')}}">Settings</a></li>
	</ul>

	<p class="menu-label">
		Client Management
	</p>
	<ul class="menu-list">
		<li><a class="{{is_active('customers')}}">Customers</a></li>
	</ul>
	
</aside>
<aside id="sidebar-wrapper">
	<div class="sidebar-brand">
		<a href="index.html">Stisla</a>
	</div>
	<div class="sidebar-brand sidebar-brand-sm">
		<a href="index.html">St</a>
	</div>
	<ul class="sidebar-menu">
        @foreach ($menu as $m)
		<li class="menu-header">{{ $m->menu }}</li>
            @php
                $menuId = $m->id;
                $submenu = DB::table('submenus')->where(['menu_id' => $menuId, 'is_active' => 1])->get();
            @endphp
            @foreach ($submenu as $sm)
                @php
                    $menusubmenu = DB::table('menusubmenus')->where(['submenu_id' => $sm->id, 'is_active' => 1])->get();
                    $count = DB::table('menusubmenus')->where(['submenu_id' => $sm->id, 'is_active' => 1])->count();
                @endphp
                @if ($count  > 0)
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="{{ $sm->icon }}"></i><span>{{ $sm->submenu }}</span></a>
                    <ul class="dropdown-menu">
                        @foreach ($menusubmenu as $sms)
                        <li><a class="nav-link" href="{{ $sms->url }}">{{ $sms->judul }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @else
                <li><a class="nav-link" href="{{ $sm->url }}"><i class="{{ $sm->icon }}"></i> <span>{{ $sm->submenu }}</span></a></li>
                @endif
            @endforeach
        @endforeach
	</ul>
</aside>

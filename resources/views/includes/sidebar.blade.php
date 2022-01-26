

<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a class="row mx-3" href="{{ route('dashboard') }}"> 
          <span class="my-3 mr-2"><img alt="image" src="{{ asset('front/img/logo.png') }}" class="header-logo" /></span> 
          {{-- <span class="logo-name">Hand2Hand</span> --}}
        </a>
      </div>
      <ul class="sidebar-menu">
        @can('users_manage')
          <li class="menu-header">@lang('Main')</li>
          <li class="dropdown @if(Str::startsWith($route, 'dashboard'))active @endif">
            <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>@lang('Dashboard')</span></a>
          </li>
        @endcan
                    
        <li class="menu-header">@lang('Users and access')</li>

        @can('users_manage')
          <li class="dropdown @if(Str::startsWith($route, 'admin.users'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="users"></i><span>@lang('Users Management')</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.users.index') }}">@lang('List')</a></li>
              <li><a href="{{ route('admin.users.create') }}">@lang('Add')</a></li>
            </ul>
          </li>

          <li class="dropdown @if(Str::startsWith($route, 'admin.permissions'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                data-feather="folder"></i><span>@lang('Permissions Management')</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.permissions.index') }}">@lang('List')</a></li>
              <li><a href="{{ route('admin.permissions.create') }}">@lang('Add')</a></li>
            </ul>
          </li>

          <li class="dropdown @if(Str::startsWith($route, 'admin.roles'))active @endif">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="list"></i><span>@lang('Roles Management')</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('admin.roles.index') }}">@lang('List')</a></li>
                <li><a href="{{ route('admin.roles.create') }}">@lang('Add')</a></li>
              </ul>
          </li>

          <li class="menu-header">@lang('Products management')</li>

          <li class="dropdown @if(Str::startsWith($route, 'admin.categories') || Str::startsWith($route, 'admin.sub-categories') || Str::startsWith($route, 'admin.products.settings'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>@lang('Settings')</span></a>
            <ul class="dropdown-menu">
              <!-- lien des catégories -->
              <li class="dropdown @if(Str::startsWith($route, 'admin.categories'))active @endif">
                <a href="{{ route('admin.categories.index') }}" class="nav-link"><i data-feather="box"></i><span>@lang('Categories')</span></a>
              </li>

              {{-- Subcategories --}}
              <li class="dropdown @if(Str::startsWith($route, 'admin.sub-categories'))active @endif">
                <a href="{{ route('admin.sub-categories.index') }}" class="nav-link"><i data-feather="copy"></i><span>@lang('Subcategories')</span></a>
              </li>
              
              {{-- Colors and sizes --}}
              <li class="dropdown @if(Str::startsWith($route, 'admin.products.settings'))active @endif">
                <a href="{{ route('admin.products.settings') }}" class="nav-link"><i data-feather="aperture"></i><span>@lang('Colors and sizes')</span></a>
              </li>
            </ul>
          </li>

          <li class="dropdown @if(Str::startsWith($route, 'admin.products.index'))active @endif">
            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>@lang('Products')</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.products.index') }}">@lang('List')</a></li>
              <li><a href="{{ route('admin.products.create') }}">@lang('Add')</a></li>
            </ul>
          </li>
        @endcan

      </ul>
    </aside>
</div> 
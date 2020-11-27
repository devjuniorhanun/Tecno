<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Autorização</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Usuários</span></a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Perfis</span></a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissões</span></a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tenant') }}"><i class="nav-icon la la-key"></i> <span>Empresa</span></a></li>
	</ul>
</li>
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>Safras</a>
	<ul class="nav-dropdown-items">
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('safra') }}"><i class="nav-icon la la-question"></i> <span>Safras</span></a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('cultura') }}"><i class="nav-icon la la-question"></i> <span>Culturas</span></a></li>
		<li class="nav-item"><a class="nav-link" href="{{ backpack_url('variedadecultura') }}"><i class="nav-icon la la-question"></i> <span>Variedade Culturas</span></a></li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('variedadecultura') }}'><i class='nav-icon la la-question'></i> VariedadeCulturas</a></li>
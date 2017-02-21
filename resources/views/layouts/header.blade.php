	<ul class="nav flex-row navbar-inverse bg-inverse fixed-top nav-pills"> 
	
		<a class="navbar-brand" href="{{ url('/') }}">Autodeploy Configuration</a>

		<li class="nav-item">

		  <a class="nav-link {{ ( Request::is('/') or Request::is('projects*')) ? 'active' : '' }}" href="{{ url('projects') }}">Progetti<span class="sr-only">(current)</span></a>
	
		</li>
	
		<li class="nav-item">
	
		  <a class="nav-link {{ Request::is('hosts*') ? 'active' : '' }}" href="{{ url('hosts') }}">Hosts</a>
	
		</li>
	
		<li class="nav-item">
	
		  <a class="nav-link {{ Request::is('netdevices*') ? 'active' : '' }}" href="{{ url('netdevices') }}">Interfacce di rete</a>
	
		</li>
	
		<li class="nav-item">
	
		  <a class="nav-link {{ Request::is('partitionings*') ? 'active' : '' }}" href="{{ url('partitionings') }}">Schemi di partizionamento</a>
	
		</li>
    
    </ul>
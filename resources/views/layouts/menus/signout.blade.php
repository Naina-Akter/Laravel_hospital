<li>
                    <a class="sidenav-item-link"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                     
                     <i class="mdi mdi-settings"></i>
                        
                        <span class="nav-text">{{ __('Logout') }}</span>
                        
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>
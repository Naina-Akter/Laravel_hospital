<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="#">
                <span class="brand-name">Hospital Managenent</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
 
                @include('layouts.menus.dashboard')
                @include('layouts.menus.appointment')
                @include('layouts.menus.service')               
                @include('layouts.menus.doctor')
                @include('layouts.menus.patient')
                @include('layouts.menus.addmission')
                @include('layouts.menus.presceiption')
                @include('layouts.menus.bill')
                @include('layouts.menus.user')
                @include('layouts.menus.signout')


            </ul>

        </div>

         
    </div>
</aside>
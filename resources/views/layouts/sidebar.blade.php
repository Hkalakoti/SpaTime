 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed !important; overflow:hidden;">
   <!-- Brand Logo -->
   <a href="{{route('home')}}" class="brand-link">
     <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light"> SpaTime </span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Admin</a>
       </div>
     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">

           <a href="{{route('home')}}" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-header"><strong> DEAFAULT MANAGEMENTS </strong> </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Banner
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('bannerAdd')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Add</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('bannerManage')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> Manage</p>
               </a>
             </li>
           </ul>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Addresses
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="pages/charts/chartjs.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/charts/flot.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/charts/inline.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/charts/uplot.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-header"><strong> ENTIRE PRODUCT'S MODULE </strong> </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Categories
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('categoryAdd')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('categoryManage')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/UI/buttons.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/UI/sliders.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Products
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('productsAdd')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('productsManage')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/forms/editors.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/forms/validation.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Coupons
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('couponAdd')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('couponManage')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/tables/jsgrid.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-header"><strong> ENTIRE SERVICE'S MODULE </strong> </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Categories
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('categoryAdd')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('categoryManage')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/UI/buttons.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Buttons</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/UI/sliders.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Sliders</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Products
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('productsAdd')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('productsManage')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/forms/editors.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/forms/validation.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Coupons
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="pages/tables/simple.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/tables/data.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/tables/jsgrid.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-chart-pie"></i>
             <p>
               Time slots
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="pages/tables/simple.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p> To be updated </p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/tables/data.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/tables/jsgrid.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>To be updated</p>
               </a>
             </li>
           </ul>
         </li>







       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
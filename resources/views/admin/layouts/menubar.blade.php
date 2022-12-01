  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-open="click">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.dashboard')}}"><span class="brand-logo">
                       
                <a class="brand-logo" href="javascript:void(0);">
                    <img src="{{asset('backend/app-assets/images/logo/logo.png')}}"/>
                </a>
                </li>
           
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center " href="{{route('admin.dashboard')}}">
                <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a></li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Pages & Modules</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather="list"></i><span class="menu-title text-truncate" data-i18n="Card">Categories</span></a>
                <ul class="menu-content">
                    <li  class=""><a class="d-flex align-items-center" href="{{route('category.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Categories</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('category.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{route('admin.categories.trashed')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed Categories</span></a>
                    </li>
                   
                </ul>
            </li>
            <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='tag'></i><span class="menu-title text-truncate" data-i18n="Card">Event Categories</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('event-category.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Categories</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('event-category.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{route('admin.event_categories.trashed')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed Categories</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='tag'></i><span class="menu-title text-truncate" data-i18n="Card">Events</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('event.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Event</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('event.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{route('admin.events.trashed')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed Events</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='calendar'></i><span class="menu-title text-truncate" data-i18n="Card">News Categories</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('news-category.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Categories</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('news-category.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>


                    <li><a class="d-flex align-items-center" href="{{route('admin.news_categories.trashed')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed Categories</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='calendar'></i><span class="menu-title text-truncate" data-i18n="Card">News</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('news.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All News</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('news.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>


                    <li><a class="d-flex align-items-center" href="{{route('admin.news.trashed')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed News</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='target'></i><span class="menu-title text-truncate" data-i18n="Card">Car Features</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('car-features.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Features</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('car-features.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>
                    
                </ul>
            </li>
            
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather='target'></i><span class="menu-title text-truncate" data-i18n="Card">Add New Car</span></a>
                <ul class="menu-content">
              

                    <li><a class="d-flex align-items-center " href="{{route('admin.cardetaildropdown.all')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Car Options</span></a>
                    </li>

                    <li><a class="d-flex align-items-center  " href="{{route('admin.cardetaildropdown')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New Car Options</span></a>
                    </li>

                    
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="{{route('admin.instant-sell-cars')}}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Instant Sell Car Requests</span></a>
            </li>
          
            
            <li class=" nav-item"><a class="d-flex align-items-center  " href="{{route('admin.wash-services')}}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Car Wash Service Requests</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="{{route('admin.import-cars')}}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Import Cars Requests</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="{{route('admin.hired-cars')}}"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Car Hire Requests</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Card">Legal Pages</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center " href="{{route('legal-pages.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Legal Pages</span></a>
                    </li>
                    <li><a class="d-flex align-items-center " href="{{route('legal-pages.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Card">Ads</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center " href="{{route('ads.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Ads</span></a>
                    </li>
                    <li><a class="d-flex align-items-center " href="{{route('ads.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>


                    <li><a class="d-flex align-items-center " href="{{route('admin.ads.trasheds')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed Ad's</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather='package'></i><span class="menu-title text-truncate" data-i18n="Card">Packages</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center " href="{{route('packages.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Packages</span></a>
                    </li>
                    <li><a class="d-flex align-items-center " href="{{route('packages.create')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Create New</span></a>
                    </li>


                    <li><a class="d-flex align-items-center " href="{{route('admin.packages.trashed')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Trashed Packages</span></a>
                    </li>
                    
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Card">Users</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center " href="{{route('users.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All users</span></a>
                    </li>
                    
                   
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather="star"></i><span class="menu-title text-truncate" data-i18n="Card">Trusted Dealers</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('dealers.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Dealers</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('dealer-reviews.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Dealer Reviews</span></a>
                    </li>
                  
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather='shopping-cart'></i><span class="menu-title text-truncate" data-i18n="Card">Purchases</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center " href="{{route('admin.purchase.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Purchases</span></a>
                    </li>
                    
                   
                </ul>
            </li>
           
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather='tag'></i></i><span class="menu-title text-truncate" data-i18n="Card">Comments</span></a>
                <ul class="menu-content">
               <li><a class="d-flex align-items-center " href="{{route('admin.news.comments')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">News Comments</span></a>
                </li>
               <li><a class="d-flex align-items-center " href="{{route('admin.event.comments')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Event Comments</span></a>
                </li>
             </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center " href="#"><i data-feather='settings'></i><span class="menu-title text-truncate" data-i18n="Card">Settings</span></a>
                <ul class="menu-content">
              

                    <li><a class="d-flex align-items-center " href="{{route('social-links.index')}}"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">All Social links</span></a>
                    </li>

                   

                    <li><a class="d-flex align-items-center " href="#"><i data-feather="circle"></i><span class="menu-item" data-i18n="Basic">Contact Details</span></a>
                    </li>
                    
                </ul>
            </li>

           
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
               
            <li class="sidebar-item <?= ($active == 'm') ? 'selected' : ''; ?>"> <a class="sidebar-link sidebar-link" href="index.php" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                    <!-- <li class="list-divider"></li> -->
                    <!-- <li class="nav-small-cap"><span class="hide-menu">Applications</span></li> -->
                    <li class="sidebar-item <?= ($active == 'y') ? 'selected' : ''; ?>"> <a class="sidebar-link" href="input.php" aria-expanded="false"><i data-feather="archive" class="feather-icon"></i><span class="hide-menu">Add New</span></a></li>

                    <li class="sidebar-item <?= ($active == 't') ? 'selected' : ''; ?>"> <a class="sidebar-link" href="sampah.php" aria-expanded="false"><i data-feather="trash" class="feather-icon"></i><span class="hide-menu">Trash</span></a></li>
                  

                     
                            </ul>
                        </li>
                  
         
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/mylaundry/resources/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">mylaundry</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/mylaundry/resources/assets/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php //if (!(isset($_SESSION["currentUser"]))) { $_SESSION["currentUser"] = "EPMD";} ?>
          
          <a href="#" class="d-block" id="currentUser"></a>
          <script type="text/javascript">
            // Store
            if (localStorage.getItem("currentUser") != null){

            }else{
               localStorage.setItem("currentUser", "EPMD");
            }
           
            // Retrieve
            document.getElementById("currentUser").innerHTML = localStorage.getItem("currentUser");
          </script>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('Test')?>" class="nav-link">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>!Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('search')?>" class="nav-link">
              <i class="fas fa-search nav-icon"></i>
              <p>?Search</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                ?1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('filing/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>?a</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('cases/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>?b</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('investigation')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>?c</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('dashboard')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>?d</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="<?= base_url('tasks/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    ?e
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('role')?>" class="nav-link">
              <i class="fas fa-folder-open nav-icon"></i>
              <p>?2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('casecategory')?>" class="nav-link">
              <i class="fas fa-folder-open nav-icon"></i>
              <p>?3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('casetype')?>" class="nav-link">
              <i class="fas fa-folder-open nav-icon"></i>
              <p>?4</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Document')?>" class="nav-link">
              <i class="fas fa-folder-open nav-icon"></i>
              <p>?5</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost:7474/browser/" class="nav-link">
              <i class="fas fa-code-branch nav-icon"></i>
              <p>?6</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/mylaundry/exhibit" class="nav-link">
              <i class="fas fa-briefcase nav-icon"></i>
              <p>?7</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-book nav-icon"></i>
              <p>?Reports</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('calendar')?>" class="nav-link">
              <i class="fas fa-calendar-alt nav-icon"></i>
              <p>?Calendar</p>
            </a>
          </li>
         

          <!-- <li class="nav-header">LDAP</li>
          <li class="nav-item">
            <a href="#" onclick="setLSItem('EPMD');" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">EPMD Mode</p>
              
            </a>
          </li>
          <li class="nav-item">
            <a href="#" onclick="setLSItem('OIC');" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>OIC Mode</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" onclick="setLSItem('IO');" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>IO Mode</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript">
    function setLSItem(currentUser){
      localStorage.setItem("currentUser", currentUser);
      document.getElementById("currentUser").innerHTML = localStorage.getItem("currentUser");
    }
  </script>
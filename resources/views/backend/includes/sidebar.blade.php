<aside id="sidebar" class="sidebar">
  

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('category.create') }}">
              <i class='bx bx-plus' ></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="{{ route('category.index') }}">
              <i class='bx bx-list-ul'></i><span>Manage</span>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#brand" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Brand</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="brand" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('brand.create') }}">
              <i class='bx bx-plus' ></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="{{ route('brand.index') }}">
              <i class='bx bx-list-ul'></i><span>Manage</span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#product" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('product.create') }}">
              <i class='bx bx-plus' ></i><span>Add</span>
            </a>
          </li>
          <li>
            <a href="{{ route('product.index') }}">
              <i class='bx bx-list-ul'></i><span>Manage</span>
            </a>
          </li>
          
        </ul>
      </li>
      <!-- End Components Nav -->


      <li class="nav-heading">Pages</li>


    </ul>

  </aside><!-- End Sidebar-->
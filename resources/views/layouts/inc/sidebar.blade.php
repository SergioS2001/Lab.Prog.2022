<!-- SIDE BAR -> COLUNA DO LADO NA PÁGINA DO ADMIN -->

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-10 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="" target="_blank">
      <span class="ms-5 font-weight-bold text-white">Administrador</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white active bg-gradient-primary" href=""> <!-- COLOCAR LISTA DE UTILIZADORES COM "IS_ADMIN" = "0" -->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">Compradores</i>
          </div>
        </a>
      </li>
      <li class="nav-item {{ Request::is('categories') ? 'active':''}}">
        <a class="nav-link text-white " href="{{ url('categories') }}"> <!-- COLOCAR VER ARTIGOS / ADICIONAR / EDITAR / REMOVER -->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">Categorias</i>
          </div>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-category') ? 'active':''}}">
        <a class="nav-link text-white " href="{{ url('add-category') }}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">Adicionar Categorias</i>
          </div>
        </a>
      </li>
      <li class="nav-item {{ Request::is('products') ? 'active':'' }}"> <!--  REDIRECIONAMENTO PARA ARTIGOS -->
        <a class="nav-link text-white " href="{{ url('products') }}"> <!--  VER ARTIGOS  -->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">Artigos</i>
          </div>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-products') ? 'active':'' }}"> <!-- REDIRECIONAMENTO PARA CRIR ARTIGOS -->
        <a class="nav-link text-white " href="{{ url('add-products') }}"> 
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">Adicionar Artigos</i>
          </div>
        </a>
      </li>
      <li class="nav-item {{ Request::is()}}"> <!-- COLOCAR REDIRECIONAMENTO PARA ENCOMENDAS -->
        <a class="nav-link text-white " href=""> <!-- COLOCAR VER PEDIDOS EFETUADOS  -->
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">Encomendas</i>
          </div>
        </a>
      </li>
    </ul>
  </div>
</aside>
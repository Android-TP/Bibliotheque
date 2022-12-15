<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="billing"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Abonnement"></x-navbars.navs.auth>

     <div class="container">
        <div class="card">
            <div class="card-header royal-blue color-white" >Abonnement</div>
  <div class="card-body">Année : 2022-2023</div>
  <div class="card-footer">
    <div class="btn bg-red">S'abonner</div>
  </div>
        </div>
     </div>

    </main>
    <x-plugins></x-plugins>

   </x-layout>

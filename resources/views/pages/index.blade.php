

<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="billing"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Accueil"></x-navbars.navs.auth>
        <div class="container">
            <div class="row">
            <div class="row py-3">

                    <div class="card col-sm-4 my-3">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset('images/logos-unilu.jpg') }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div>Math-info</div>


                    </div>
                    <div class="card col-sm-4 my-3">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset('images/logos-unilu.jpg') }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div>Géologie</div>
                    </div>
                    <div class="card col-sm-4 my-3">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="{{ asset('images/logos-unilu.jpg') }}" alt="profile_image"
                                    class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div>Géographie et chimie</div>
                    </div>


            </div>
            <div class="card">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ID
                        </th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            PHOTO</th>
                        <th
                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            TITRE</th>
                        <th
                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            ISBN</th>
                        <th
                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            MAISON D'EDITION</th>

                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($livres as $cle=> $livre)
                    <tr class="hidden show-books">
                      <td>
                          <div class="d-flex px-2 py-1">
                              <div class="d-flex flex-column justify-content-center">
                                  <p class="mb-0 text-sm">{{$cle+1}}</p>
                              </div>
                          </div>
                      </td>
                      <td>
                          <div class="d-flex px-2 py-1">
                              <div>
                                  <img src="{{ asset('assets') }}/img/team-4.jpg"
                                      class="avatar avatar-sm me-3 border-radius-lg" alt="user6">
                              </div>
                          </div>
                      </td>
                      <td>
                          <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm text-overflow">{{$livre->nom}}</h6>
                          </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                          <p class="text-xs text-secondary mb-0">
                              {{$livre->detail->isbn}}</p>
                      </td>
                      <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{$livre->detail->maison_edition}}</span>
                      </td>

                      <td class="align-middle">
                          <a rel="tooltip" class="btn btn-success btn-link"
                              href="" data-original-title=""
                              title="">
                              <i class="material-iconsd">Emprunter</i>
                              <div class="ripple-container"></div>
                          </a>

                      </td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

 </main>
 <x-plugins></x-plugins>

</x-layout>

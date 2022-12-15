<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="billing"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Commande"></x-navbars.navs.auth>

        <div class="container py-3">
            <div class="card text-center my-2">
                <div class="row">
                    <h3>Fiche de Commande de nouveaux livres</h3>
                </div>
            </div>
            <div class="card py-3 ">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name" class="title-smart-input"> Titre de l'ouvrage</label>
                        <input id="name" type="text" placeholder="" class="form-control text-center smart-input">
                    </div>

                    <div class="form-group">
                        <label for="maison_edition" class="title-smart-input"> Maison d'édition</label>
                        <input id="maison_edition" name="maison_edition" type="text" placeholder="" class="form-control text-center smart-input">
                    </div>

                    <div class="form-group">
                        <label for="description " class="title-smart-input text-center"> Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control text-center smart-input"></textarea>
                      </div>

                      <div class="form-group">
                        <input type="submit" class="smart-input btn btn-primary">
                      </div>
                </form>
            </div>
        </div>

    </main>
    <x-plugins></x-plugins>

   </x-layout>

@include('template/header')
<main class="main-user event-live">
    <section>
        <div class="profile-circle">
            <div class="profile-circle-photo">

            </div>
        </div>
    </section>
    <section class="register">
        <div class="desktop">
                <div class="desktop_information_2">
                        <div class="desktop_information_2_content_2">
                            <a href="" class="desktop_information_content_user"><i class="fas fa-user-circle font-size-15 pr-05"></i>Usuario</a>
                        </div>
                </div>
        </div>
        <div class="register_content">
            <div class="register_content_profile_circle">
                <div class="register_content_profile_circle_member">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <p>+ Agregar fotos</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="register_content_grid">
                    <input type="text" class="" placeholder="Ingrese su nombre completo">
                    <input type="text" class="" placeholder="Ingrese su Apellido completo">
                    <input type="text" class="" placeholder="Ingrese su correo electrónico">
                    <input type="text" class="" placeholder="País">
                    <input type="text" class="" placeholder="Cargo">
                    <input type="text" class="" placeholder="Empresa">
                    <input type="text" class="" placeholder="Teléfono">
                </div>
                <div class="register_content_button">
                    <button name="button" type="button">Guardar</button>
                </div>
            </div>
        </div>
    </section>
</main>
@include('template/footer')
@include('template/header')
<main class="main d-flex w-100 justify-end">

        <section class="event">
            <div class="desktop">
                <div class="desktop_information">
                        <div class="desktop_information_content">
                            <a href="" class="desktop_information_content_filter"><i class="far fa-calendar pr-05"></i>FILTRO POR DÍA<i class="fas fa-chevron-down pl-4"></i></a>
                        </div>
                        <div class="desktop_information_content">
                            <a href="" class="desktop_information_content_user"><i class="fas fa-user-circle font-size-15 pr-05"></i>Usuario</a>
                        </div>
                </div>
            </div>
            <div class="event_content">
                    <div class="desktop_information_content">
                         <a href="" class="desktop_information_content_filter_2"><i class="far fa-calendar pr-05"></i>FILTRO POR DÍA<i class="fas fa-chevron-down pl-4"></i></a>
                    </div>
                    <div>
                        <p class="text-center">Día: <span> 08/07/2021</span></p>
                    </div>
            </div>
            <div class="event_grid">
                <?php for( $i = 0 ; $i < 8 ; $i++ ): ?>
                    <div class="d-flex justify-center align-center w-100">
                        <div class="event_grid_content">
                            <div class="p-1">
                                <iframe width="150" height="120" src="https://www.youtube.com/embed/_3NzZm2bygs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="p-1 d-flex justify-around flex-column">
                                <div class="event_grid_content_hour">
                                    <h2>Tema del evento</h2>
                                    <p><i class="far fa-clock pr-05"></i>16:00 Horas</p>
                                </div>
                                <div class="event_grid_content_button">
                                    <a href="#">Ver</a>
                                </div>  
                            </div>
                        </div>
                    </div> 
                <?php endfor ?>
            </div>
        </section>
</main>
@include('template/footer')
<section class="all-courses-area">
    <div class="all-courses-header-area default-flex-between">
        <h3>Nossos Cursos</h3>

        <a href="">Ver todos</a>
    </div>

    <div class="default-flex-start">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($courses as $course)
                    <div class="swiper-slide">
                        <div class="course-item-area default-flex-column">
                            <a href="">
                                <div class="course-item default-flex-column">
                                    <img src="{{url($course->image->name)}}" alt="Imagem do Curso">
                                    <h4>{{$course->name}}</h4>
                                    <p>{{$course->lessons}} Aulas</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>




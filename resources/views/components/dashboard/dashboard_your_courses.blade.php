<section class="your-curses-area">
    <div class="your-courses-header default-flex-between">
        <h3>Seus Cursos</h3>

        <a href="">Ver todos</a>
    </div>

    <div class="your-courses-items default-flex-between">
        @foreach ($usercourses as $course)
            <div class="your-course-item default-flex-between">
                <div class="your-course-item-left default-flex-column">
                    <h4>{{$course->name}}</h4>

                    <a class="default-submit-button default-flex" href="">Ver</a>
                </div>

                <div class="your-course-item-right">
                    <div class="graph">
                        <svg class = "graph-svg">
                            <circle cx="50" cy="50" r="40" />
                        </svg>
                        <svg class="color graph-svg" style = "stroke-dashoffset: calc(251.2 - (251.2 * ({{$course->assistedLessonsPercent}} / 100)));">
                            <circle cx="50" cy="50" r="40" />
                        </svg>
                        <div class = graph-info-area>
                            <p class = "graph-percent">{{$course->assistedLessonsPercent}}%</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

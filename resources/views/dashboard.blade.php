<x-dashboard.dashboard_layout pageTitle="Dashboard" :user="$user">
    <main class="dashboard-home-main">
        <x-dashboard.dashboard_banner :user="$user" :date="$date"></x-dashboard.dashboard_banner>

        <x-dashboard.dashboard_all_courses :courses="$courses"></x-dashboard.dashboard_all_courses>

        <x-dashboard.dashboard_your_courses :usercourses="$userCourses"></x-dashboard.dashboard_your_courses>

        <x-dashboard.dashboard_teachers_area :teachers="$teachers" :updates="$updates"></x-dashboard.dashboard_teachers_area>
    </main>
</x-dashboard.dashboard_layout>

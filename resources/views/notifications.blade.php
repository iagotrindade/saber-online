<x-dashboard.dashboard_layout pageTitle="Dashboard" :user="$user">
    <main class="dashboard-notifications-main">
        <x-dashboard.dashboard_banner :user="$user" :date="$date"></x-dashboard.dashboard_banner>
        <x-dashboard.notifications :user="$user"></x-dashboard.notifications>
    </main>
</x-dashboard.dashboard_layout>

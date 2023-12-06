<div class="dashboard-all-notifications-area">
    <h3>Todas Notificações</h3>

    <div class="notifications-area default-flex-between">
        <div class="notifications-area-hold">
            @foreach ($user->notifications as $notification)
                <div class="notification-page-item">
                    <h4>{{$notification->data['title']}}</h4>
                    <p>{{$notification->data['body']}}</p>
                    <p>{{date('d/m/Y - h:m', strtotime($notification->created_at))}}</p>
                </div>
            @endforeach
        </div>

        <div class="notifications-info-area default-flex-column-start">
            <div class="read-notifications-count default-flex-column">
                <h3>Notificações vistas</h3>

                <p>{{count($user->notifications)}}</p>
            </div>

            <div class="unread-notifications-count default-flex-column">
                <h3>Notificações não vistas</h3>

                <p>{{count($user->unreadNotifications)}}</p>
            </div>
        </div>
    </div>
</div>

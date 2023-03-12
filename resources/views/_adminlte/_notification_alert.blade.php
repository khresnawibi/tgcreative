@if (session()->has('notification_alert'))
    <div class="alert alert-{{ session()->get('notification_alert.type') }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        
        {!! session()->get('notification_alert.message') !!}
    </div>
@endif

@if (session('error_message'))
    <div class="alert alert-danger font-weight-bold">{{ session('error_message') }}</div>
@elseif (session('warning_message'))
    <div class="alert alert-warning font-weight-bold">{{ session('warning_message') }}</div>
@elseif (session('info_message'))
    <div class="alert alert-info font-weight-bold">{{ session('info_message') }}</div>
@elseif (session('success_message'))
    <div class="alert alert-success font-weight-bold">{{ session('success_message') }}</div>
@endif

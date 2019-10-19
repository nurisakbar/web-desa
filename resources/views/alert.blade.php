@if(session('message')!='')
    <div class="alert alert-primary" role="alert">
            <b>Message : </b>{{ session('message')}}
    </div>
@endif
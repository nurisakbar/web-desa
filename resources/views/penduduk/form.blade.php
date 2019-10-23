@php
$btnLabel = isset($role)?'Update':'Create'; 
@endphp


<table class='table table-bordered'>
    <tr>
        <td>Name</td>
        <td>{{ Form::text('name',null,['placeholder'=>'Role Name','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Display Name</td>
        <td>{{ Form::text('display_name',null,['placeholder'=>'Display Name','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{ Form::text('description',null,['placeholder'=>'Description','class'=>'form-control'])}}</td>
    </tr>
    <tr>
        <td>Permission</td>
        <td>
            @foreach($permissions as $permission)
                <input {{ in_array($permission->id,$rolePermissions)?'checked':'' }} type="checkbox" value='{{ $permission->id}}' name='permissions[]'> {{ $permission->name}} <br>
            @endforeach
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            {{ Form::submit($btnLabel,['class'=>'btn btn-success'])}}
            {{ link_to('role','Back',['class'=>'btn btn-info'])}}
        </td>
    </tr>
</table>
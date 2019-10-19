@php
$btnLabel = isset($role)?'Update':'Create'; 
@endphp


<table class='table table-bordered'>
    <tr>
        <td>Name</td>
        <td>{{ Form::text('name',null,['placeholder'=>'Permission Name','class'=>'form-control'])}}</td>
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
        <td></td>
        <td>
            {{ Form::submit($btnLabel,['class'=>'btn btn-success'])}}
            {{ link_to('permission','Back',['class'=>'btn btn-info'])}}
        </td>
    </tr>
</table>
<x-layout>
    <x-slot name='title'>
    Edit city
    </x-slot>
    <div class='row mt-2 text-center'>
        <h1>Edit {{$city->name}}</h1>
    </div>
    <div class='row mt-2'>
    <div class='col-8'>
    <form action="/city/{{$city->id}}" method="post">
        @csrf
        <label >ID</label>
        <input type="text" class='form-control' disabled value='{{$city->id}}'>
        <label >Name</label>
        <input type="text" name='name' class='form-control' value='{{$city->name}}'>
        <label >State</label>
        <select name="state_id" class='form-control'>
            @foreach($states as $state)
                <option value="{{$state->id}}" {{$state->id==$city->state_id?'selected':''}} >{{$state->name}}</option>

            @endforeach
        </select>
        <button class='form control btn btn-success mt-4'>Update</button>
    </form>
    </div>
    </div>
</x-layout>
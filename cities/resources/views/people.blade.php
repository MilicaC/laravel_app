<x-layout>
    <x-slot name='title'>
    People
    </x-slot>
    <div class='row mt-2'>
        <div class='col-8'>
        <table class='table'>
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            @foreach($people as $person)
            <tr>
                <td>{{$person->first_name}}</td>
                <td>{{$person->last_name}}</td>
                <td>{{$person->gender==1?'M':'Z'}}</td>
                <td>{{isset($person->city)?$person->city->name:'NA'}}</td>
                <td>
                    <form action="/people/{{$person->id}}/delete" method="post">
                    @csrf
                        <button class='btn btn-danger form-control' name='delete'>Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
        </table>
        </div>
        <div class='col-4'>
        <h3>Create person</h3>
        <form action="/people" method="post">
            @csrf
            <label >First name</label>
            <input type="text" class='form-control' name='first_name'>
            <label >Last name</label>
            <input type="text" class='form-control' name='last_name'>
            <label >Gender</label>
            <select  class='form-control' name="gender" >
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
            <label >City</label>
            <select  class='form-control' name="city_id" >
               @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
               @endforeach
            </select>
            <button class='btn btn-primary form-control mt-2'>Create</button>
        </form>
        </div>
    </div>
</x-layout>
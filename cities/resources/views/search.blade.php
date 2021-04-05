<x-layout>
    <x-slot name='title'>
        Search
    </x-slot>
    <div class='text-center'>
        <h1>Search cities</h1>
    </div>
    <div class='row mt-2 text-center'>
        <div class='col-12'>
            <select class='form-control' id="city">
                <option value="0">Select city</option>
                @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class='row mt-2'>
        <div hidden id='content' class='col-12'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody id='people'>


                </tbody>
            </table>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        let people = [];
        $(document).ready(function () {
            $.getJSON('http://localhost:8000/api/people', function (data) {

                people = data;
            });
            $('#city').change(function () {

                const selected = $('#city').val();

                render(people.filter(element => selected == '0' || element.city_id == selected))
            })
        })
        function render(data) {
            $('#content').attr('hidden', false);
            $('#people').html('');

            for (let person of data) {
                
                $('#people').append(`
                    <tr>
                        <td>${person.first_name}</td>
                        <td>${person.last_name}</td>
                        <td>${person.gender === 1 ? 'Male' : 'Female'}</td>
                    </tr>
                `)
            }
        }
    </script>
</x-layout>
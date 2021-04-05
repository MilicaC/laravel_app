<x-layout>
   <div class='text-center'>
    <h1>All cities</h1>
   </div>
    @foreach($cities as $city)
    <div class='row mt-5'>
   <div class='col-8'>
   <h2>{{$city->name}}</h2>
   
   </div>
   <div class='col-2'>
   <a href="/city/{{$city->id}}">
        <button class='btn form-control mt-2 btn-secondary'>Edit</button>
    </a>
   </div>
   <div class='col-2'>
   <form action="/city/{{$city->id}}/delete" method="post">
    @csrf
   <button class='btn form-control mt-2 btn-danger'>Delete</button>
   </form>
   </div>
    </div>
    @endforeach
  
  

</x-layout>
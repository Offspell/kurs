@extends('layouts.app')
@section('content')
<div class="container mx-auto ">
<table class="w-full">
  <thead>
    <tr>
      <th class="text-center">#</th>
      <th class="text-center">Email</th>
      <th class="text-center">Imię</th>
      <th class="text-center">Nazwisko</th>
      <th class="text-center">Numer telefonu</th>
      <th class="text-center">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th class="text-center">{{ $user->id }}</th>
      <td class="text-center">{{ $user->email }}</td>
      <td class="text-center">{{ $user->name }}</td>
      <td class="text-center">{{ $user->surname }}</td>
      <td class="text-center">{{ $user->phone_number }}</td>
      <td class="text-center">
        <button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
        X
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $users->links() }}
</div>
@endsection
@section('javascript')
  $(function() {
      $('.delete').click(function() {
        $.ajax({
            method: "DELETE",
            url: "http://kurs.local/users/" + $(this).data("id"),
            <!-- data: { id: $(this).data("id") } -->
        })
        .done(function(response) {

        })
        .fail(function(response) {
            alert("ERROR");
        });
      });
  });
@endsection
  
  
  
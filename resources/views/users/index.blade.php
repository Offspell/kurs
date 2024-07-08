<x-app-layout>

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
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</x-app-layout>

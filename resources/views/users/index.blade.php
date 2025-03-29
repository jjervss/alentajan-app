<x-layout>
    <x-slot:heading>User List</x-slot:heading>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user['id'] }}</th>
      <td>{{ $user['name'] }}</td>
      <td>{{ $user['gender'] }}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
</x-layout>

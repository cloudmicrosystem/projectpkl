<div class='row'>
    <table class="table table-responsive">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nama</th>
            <th scope="col">username</th>
            <th scope="col">email_verified_at</th>
            <th scope="col">password</th>
            <th scope="col">two_factor_secret</th>
            <th scope="col">two_factor_recovery_codes</th>
            <th scope="col">remember_token</th>
            <th scope="col">current_team_id</th>
            <th scope="col">profile_photo_path</th>
            <th scope="col">alamat</th>
            <th scope="col">level</th>
            <th scope="col">id_jabatan</th>
            <th scope="col">created_at</th>
            <th scope="col">update_at</th>
</tr>
</thead>
<body>
@foreach($users as $user)
<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->nama}}</td>
    <td>{{$user->username}}</td>
    <td>{{$user->email_verified_at}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->two_factor_secret}}</td>
    <td>{{$user->two_factor_recovery_codes}}</td>
    <td>{{$user->remember_token}}</td>
    <td>{{$user->current_team_id}}</td>
    <td>{{$user->profile_photo_path}}</td>
    <td>{{$user->alamat}}</td>
    <td>{{$user->level}}</td>
    <td>{{$user->id_jabatan}}</td>
    <td>{{$user->created_at}}</td>
    <td>{{$user->updated_at}}</td>
</tr>
@endforeach
</body>
</table>
</div>
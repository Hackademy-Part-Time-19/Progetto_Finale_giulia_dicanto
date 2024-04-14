<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scoper="col"> Ruolo </th>
            <th scope="col">Azioni</th>

        </tr>
    </thead>

    <tbody>
        @foreach ($roleRequest as $user)
            <tr>
                <th scope="role">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @switch($user->users_requested_role)
                        @case(1)
                            Amministratore
                        @break

                        @case(2)
                            Revisore
                        @break

                        @case(3)
                            Writer
                        @break

                        @default
                            Nessuna richiesta di ruolo
                    @endswitch
                </td>
                <td>

                    <form action="{{ route('accept.role', compact ('user'))}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="roleRequest" value="{{ $roleRequest }}">
                        <button type="submit" class="btn btn-info">Attiva</button>
                    </form>

                    {{-- @switch($role)
                        @case('amministratore')
                            <form action="{{ route('admin.setAdmin', compact('user')) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-info">Attiva {{ $role }}</button>
                            </form>
                        @break

                        @case('revisore')
                            <form action="{{ route('admin.setRevisor', compact('user')) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-info">Attiva {{ $role }}</button>
                            </form>
                        @break

                        @case('redattore')
                            <form action="{{ route('admin.setWriter', compact('user')) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <button type="submit" class="btn btn-info">Attiva {{ $role }}</button>
                            </form>
                        @break
                    @endswitch --}}

                </td>
            </tr>
        @endforeach
    </tbody>

</table>

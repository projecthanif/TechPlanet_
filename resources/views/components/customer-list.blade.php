@props(['user'])
<tr>
    <td>0</td>
    <td>{{ $user->created_at }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->user_type }}</td>
    <td>
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <button type="submit" class="dropdown-item" _blank href="/customer/profile/{{ $user->id }}"><i
                        class="bx bx-edit-alt me-1"></i>
                    Edit</button>
            </div>
        </div>
    </td>
</tr>

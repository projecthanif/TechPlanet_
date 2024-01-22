@props(['category'])

<tr>
    <td class="d-flex align-items-center">
        <strong class="mx-3">{{ $category['name'] }}</strong>
    </td>
    <td>Albert Cook</td>
    <td>$2000</td>
    <td>
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <button type="submit" class="dropdown-item" href="javascript:void(0);"><i
                        class="bx bx-edit-alt me-1"></i>
                    Edit</button>
                <button type="submit" class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                    Delete</button>
            </div>
        </div>
    </td>
</tr>

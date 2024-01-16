@props(['product'])

@php
    $checked = $product['availability'] ? 'checked' : 'unchecked';
@endphp

<tr>
    <td class="d-flex align-items-center">
        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
            class="avatar avatar-xs pull-up list-unstyled" title="Lilian Fuller">
            <img src="/storage/{{ $product['image_path'] }}" alt="Avatar" class="rounded" />
        </li>
        <strong class="mx-3">{{ $product['name'] }}</strong>
    </td>
    <td>{{ $product['category'] }}</td>
    <td>
        <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" {{ $checked }} />
        </div>
    </td>
    <td>
        <span class="badge bg-label-primary me-1">{{ $product['qty'] }}</span>
    </td>
    <td>
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                    Edit</a>
                <form action="/product/delete/{{ $product['id'] }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="dropdown-item" href="/product/delete/{{ $product['id'] }}"><i
                            class="bx bx-trash me-1"></i>
                        Delete</button>
                </form>
            </div>
        </div>
    </td>
</tr>

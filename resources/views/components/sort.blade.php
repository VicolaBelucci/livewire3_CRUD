@props(['sortDirection' => null, 'sortBy' => null, 'field' => null])

@if($sortBy == $field)

    @if($sortDirection === 'asc')
        <span>asc</span>
    @else 
        <span>desc</span>
    @endif
    
@endif
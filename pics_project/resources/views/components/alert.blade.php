<div {{ $attributes->merge(['class'=>$getClasses, 'role'=>'alert']) }}>
    {{ $slot}}
    @if ($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>

<div {{ $attributes->merge(['class' => 'card']) }}>
    @if ($header ?? null)
        <div {{ $header->attributes->class(['card-header']) }}>
            {{ $header }}
        </div>
    @endif
    @if ($form)
        <form wire:submit.prevent="{{ $form }}">
            @if ($body ?? null)
                <div {{ $body->attributes->class(['card-body']) }}>
                    {{ $body }}
                </div>
            @endif
            @if ($footer ?? null)
                <div {{ $footer->attributes->class(['card-footer']) }}>
                    {{ $footer }}
                </div>
            @endif
        </form>
    @else
        @if ($body ?? null)
            <div {{ $body->attributes->class(['card-body']) }}>
                {{ $body }}
            </div>
        @endif
        @if ($footer ?? null)
            <div {{ $footer->attributes->class(['card-footer']) }}>
                {{ $footer }}
            </div>
        @endif
    @endif
</div>

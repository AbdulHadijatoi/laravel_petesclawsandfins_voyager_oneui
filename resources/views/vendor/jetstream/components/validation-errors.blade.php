@if ($errors->any())
    <div {{ $attributes }}>
        <div class="text-center font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-none list-inside text-sm text-red-600 text-center">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

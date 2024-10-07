<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-12 md:gap-12']) }}>

    <div class="md:mt-0 md:col-span-12">
        <div class="px-4 py-5 pt-4 sm:p-6 bg-white shadow sm:rounded-lg">
            {{ $content }}
        </div>

        @if (isset($actions))
            <div
                class="flex items-center justify-end px-4 py-3 bg-gray-50 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {{ $actions }}
            </div>
        @endif
    </div>
</div>

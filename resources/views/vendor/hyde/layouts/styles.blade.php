{{-- The core HydeFront stylesheet --}}
@if(Hyde::styles())
<link rel="stylesheet" href="{{ Hyde::styles() }}">
@endif

{{-- The compiled Tailwind/App styles --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/hydefront@v1.11/dist/app.css">

{{-- Add any extra styles to include after the others --}}
@stack('styles')
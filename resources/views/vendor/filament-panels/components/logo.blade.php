@php
    $size = auth()->check() ? "20px" : "100px";
@endphp

@if(!auth()->check())
    <table>
        <tr>
            <td align="center">
                <img src="{{ asset('favicon_io/logo.png') }}" class="logo" alt="logo" width="{{ $size }} " />
            <td>
        </tr>
        <tr>
            <td align="center">
                <h1> BWS Kalimantan IV Samarinda </h1>
            </td>
        </tr>
    </table>

@else
    {{-- <img src="{{ asset('image/logo.png') }}" class="logo" alt="logo" width="{{ $size }} " /> &nbsp; --}}
    <h1> BWS Kalimantan IV Samarinda </h1>
@endif

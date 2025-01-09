<!DOCTYPE html>
<html lang="en">

<x-head />

<body @php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': ''); @endphp>

    @if (session('error'))
        <div class="alert alert-danger"
            style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%); z-index: 9999;">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

    <div id="overlay_every-where" data-tmp-cursor="md text-black dark:text-white opacity-10"
        data-tmp-cursor-icon="fa-regular fa-x fa-fw"></div>

    <x-scripts />

</body>

</html>

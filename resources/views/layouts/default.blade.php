/**
 * Created by PhpStorm.
 * User: kkham
 * Date: 7/7/2019
 * Time: 2:48 PM
 */

<!doctype html>
<html lang="en">

@include('includes.head')

<body>

<div class="container">

    <header>

        @include('includes.menu')

    </header>

    <main role="main">

        @yield('content')

    </main>

    @include('includes.jsfooter')

    <footer>

        @include('includes.footer')

    </footer>
</div>
</body>
</html>
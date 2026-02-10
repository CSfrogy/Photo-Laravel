<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a>Gallery</a></li>
                <li>
                    <a>Contacts</a>
                    <ul class="p-2">
                        <li><a>Instagram</a></li>
                        <li><a>Line</a></li>
                    </ul>
                </li>
                <li><a>About Me</a></li>
            </ul>
        </div>
        <a class="btn btn-info text-xl">EmmaLin</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a>Gallery</a></li>
            <li>
                <details>
                    <summary>Contacts</summary>
                    <ul class="p-2 bg-base-100 w-40 z-1">
                        <li><a><x-bi-instagram />Instagram</a></li>
                        <li><a><x-uni-line-o class="inline-block w-5 h-5" />Line</a></li>
                    </ul>
                </details>
            </li>
            <li><a>About Me</a></li>
        </ul>
    </div>
    <div class="navbar-end space-x-3">
        <a href="/register" class="btn">Register</a>
        <a href="/login" class="btn">Log In</a>
    </div>
</div>

<style>
    nav{
    background-color: #AA9172;
}

nav a{
    color: black;
    text-decoration: none;
    font-size: 18px;
    font-weight: 800;
    transition: 0.1s ease-in-out;
}

nav a:hover{
    color: #4e4d4d;
}

nav .search{
    margin-left: -110px;
    position: relative;
    width: 500px;
    height: 30px;
}

nav .search input{
    position: absolute;
    width: 100%;
    color: #5a5959;
    height: 100%;
    border: 1px solid #fff;
    border-radius: 15px;
    padding: 0 10px 0 35px;
    font-size: 15px;
}

nav .search input::placeholder{
    color: #8e8e8e;
    font-size: 15px;
}

nav .search .fa-search{
    position: absolute;
    color: #787878;
    top: 28%;
    left: 12px;
}
</style>

<nav class="d-flex w-100 py-2 justify-content-between align-items-center px-2">
    <a href="/">Eli's Book Store</a>
    <form action="/" class="search">
        <input type="text" name="navSearch" placeholder="Search Book">
        <i class="fa fa-search" aria-hidden="true"></i>
    </form>

    @auth
        <div class="simbol d-flex">
            <a href="{{ route('addBook') }}"><i class="bi bi-file-earmark-plus mx-2"></i></a>

            <a href="#"><i class="bi bi-book mx-2"></i></a>

            <a href="#"><i class="bi bi-bag mx-2"></i></a>

            <a href="#" class="border-0 fw-bold mx-2 fs-6"> About us</a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="border-0 fw-bold" style="background-color: transparent">
                    Logout
                </button>
            </form>
        </div>
    @else
        <a class="nav-link active" style="font-size: 18px; font-weight: 700; color:black" aria-current="page" href="#" data-bs-toggle="modal"
            data-bs-target="#loginModal">Login
        </a>
    @endauth

    @include('login')
</nav>

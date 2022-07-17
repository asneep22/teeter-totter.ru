<!-- Светлая тема -->



<header class=" container-fluid hbg theme dfh">

    <nav class="navbar navbar-expand-lg navbar-light theme pb-4">
        <div class="container-fluid d-flex justify-content-center fch">

            <div class="d-flex flex-column flex-nowrap align-items-center cs">
                <div class="divloga">
                    <a href="{{ route('page_welcome') }}" class="fs-1 text-decoration-none ts m-0">Teeter-Totter</a>
                </div>
            </div>

            <button class="navbar-toggler m-auto mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">




                <ul class="navbar-nav mt-2 mb-lg-0">
                    <div class="d-flex align-items-center mt-1 tf">
                        <a href="{{route('page_welcome')}}" class="hvr-bounce-in text-decoration-none hvr-underline-from-left mdel-g borh py-2 px-2 text-light"><span class="tcs m-0 ts fsh-t">ГЛАВНАЯ</span></a>
                        <a href="{{route('page_all_products')}}" class="hvr-bounce-in hvr-underline-from-left text-decoration-none mdel-n borh text-light px-2 py-2"><span class="tcs  m-0 ts fsh-t  text-light px-2 py-2">КЛЮЧИ</span></a>
                        {{-- <a href="#" class="hvr-bounce-in text-decoration-none hvr-underline-from-left borh text-light px-2 py-2"><span class="tcs  m-0 ts fsh-t  ">ГИФТЫ</span></a>
                        <a href="#" class="hvr-bounce-in text-decoration-none hvr-underline-from-left mdel-p borh text-light px-2 py-2"><span class="tcs  m-0 ts fsh-t ">АККАУНТЫ</span></a> --}}
                    </div>

                    <div class="d-flex align-items-center justify-content-center ip">

                        <!-- Личный кабинет -->

                        <a href="{{ route('page_user_auth') }}" class="ms-3 sb text-decoration-none text-white dm ddm">
                            <svg class="text-white svgs" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </a>
                        <!-- Избранное -->

                        <a href="#" class="ms-3 sb text-decoration-none text-white dm">
                            <svg class="text-white svgs" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z" />
                            </svg>
                        </a>
                        <!-- Корзина -->


                        <a href="#" class="ms-3 sb text-decoration-none text-white dm">
                            <svg class="text-white svgs" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <!-- Тема сайта -->

                        <a href="#" class="ms-3 sb text-decoration-none text-white btnt">
                            <svg class="text-white svgs" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                            </svg>
                        </a>

                        <!-- Выпадающие меню поиска -->

                        <div class="position-relative">
                            <a class="text-white svgs sb position-relative text-decoration-none btnsrc" type="button">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </a>

                            <form action="search" class="p-0 mt-2 m-auto position-absolute" aria-labelledby="dropdownMenuButton1">
                                <input type="search" class="bg-white fws src formin fs-6" placeholder="Найти">
                            </form>
                        </div>
                    </div>
                </ul>

            </div>
        </div>
    </nav>

</header>
</script>
<x-home-layout>
    {{--main content--}}
    <section class="home-main-content container-fluid w-100 pb-5">
        <div class="row px-5 align-items-center w-100">
            <div class="col-md-9 pe-2">
                <div class="card border-0">
                    <img src="https://img.freepik.com/free-photo/desk-workspace-with-various-elements_23-2148043276.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357" class="card-img" alt="main-back">
                    <div class="card-img-overlay d-flex justify-content-center align-items-center">
                        <div class="row p-3">
                            <div class="col-md-8">
                                <h6 class="text-uppercase text-warning">branded</h6>
                                <h5 class="card-title text-black fs-2 my-2 fw-bold text-capitalize font-500">office equipments</h5>
                                <p class="card-text text-secondary">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <x-button-main btnDes="Shop now" />
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ps-3">
                <div class="card border-0">
                    <img src="https://img.freepik.com/free-photo/flat-lay-stationary-arrangement-desk-with-yellow-supplies_23-2148404491.jpg?uid=R126305893&ga=GA1.1.1378415623.1732413357" class="card-img" alt="main-back-2">
                    <div class="card-img-overlay p-3">
                        <p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <center class="mt-3">
                            <x-button-main btnDes="Shop now" />
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--main content--}}

    {{--sort by categories--}}
    <section class="category-wise-sort">
        <div class="container-fluid p-5 pt-3">
            <h3 class="text-capitalize text-black fs-5 mb-4 font-500 ps-2">shop by categories</h3>
            <div class="row category">
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-2">
                    <div class="card border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-md-6">
                                <img src="{{ asset('essentials/images/expences-1.png') }}" alt="office-expences-products" class="office-expences-products img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-capitalize">Attractive pen's</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--sort by categories--}}

</x-home-layout>
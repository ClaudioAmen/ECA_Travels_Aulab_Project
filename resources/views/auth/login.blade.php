<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-start mt-5">
            <div class="col-12 col-md-4 mt-5 d-flex justify-content-center">
                <h1>{{__('ui.loginTit')}}</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 authFont vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <form action="{{route('login')}}" class="form_main" method="POST">
                    @csrf
                    
                    <div class="inputContainer authFont">
                        <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"
                            fill="#015e9c">
                            <path
                                d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                            </path>
                        </svg>
                        <input type="email" class="inputField" id="email" name="email" placeholder="Email">
                        @error('email')
                            <span class="text-danger txError">{{__('ui.failed')}}</span>
                        @enderror
                    </div>





                    <div class="inputContainer authFont">
                        <svg class="inputIconR" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="none" viewBox="0 0 24 24">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.4453 2.75 16.5018 4.42242 17.0846 6.68694C17.1879 7.08808 17.5968 7.32957 17.9979 7.22633C18.3991 7.12308 18.6405 6.7142 18.5373 6.31306C17.788 3.4019 15.1463 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C4.13525 10.1379 3.40931 10.348 2.87868 10.8787C2 11.7574 2 13.1716 2 16C2 18.8284 2 20.2426 2.87868 21.1213C3.75736 22 5.17157 22 8 22H16C18.8284 22 20.2426 22 21.1213 21.1213C22 20.2426 22 18.8284 22 16C22 13.1716 22 11.7574 21.1213 10.8787C20.2426 10 18.8284 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17ZM17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z" fill="#015e9c"></path> </g>
                            </svg>
                        <input type="password" class="inputField" id="password" name="password" placeholder="Password">
                        @error('password')
                            <span class="text-danger txError">{{__('ui.failed')}}</span>
                        @enderror
                    </div>




                    <div class="col-12 col-md-3">
                        <button id="button">Login</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid mt-5 d-flex justify-content-end">
        <div class="row">
            <div class="col-12 col-md-8 mt-5">
               <img class="dolomiti" src="https://www.dolomititour.com/images/slider/06-winter-urlaub/winter-urlaub.jpg" alt="">
            </div>
        </div>
    </div> --}}
</x-layout>

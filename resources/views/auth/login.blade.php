<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="flex justify-center gap-2 flex-wrap" id="debug">
            <button class="bg-pink-400 p-2 hover:bg-pink-200" id="btn_user">user</button>
            <button class="bg-pink-400 p-2 hover:bg-pink-200" id="btn_superuser">super user</button>
            <button class="bg-pink-400 p-2 hover:bg-pink-200" id="btn_adminKM">admin KM</button>
            <button class="bg-pink-400 p-2 hover:bg-pink-200" id="btn_adminTraining">admin Training</button>
            <button class="bg-pink-400 p-2 hover:bg-pink-200" id="btn_MD">MD</button>
            <button class="bg-pink-400 p-2 hover:bg-pink-200" id="btn_supperAdmin">supper Admin</button>
            <hr>
            <script>
                console.log('debug');
                const btnuser = document.querySelector('#btn_user')
                const btnsuperuser = document.querySelector('#btn_superuser')
                const btnadminKM = document.querySelector('#btn_adminKM')
                const btnadminTraining = document.querySelector('#btn_adminTraining')
                const btnMD = document.querySelector('#btn_MD')
                const btnsupperAdmin = document.querySelector('#btn_supperAdmin')

                
                document.querySelector("#debug").addEventListener('click',(e)=>{
                    let inpuser = document.querySelector('input#email')
                    let inppass = document.querySelector('input#password')
                    // console.log(e.target);
                    // console.log(btnuser);
                    inppass.value="password"
                    switch(e.target) {
                        case btnuser:
                            // code block
                            inpuser.value='user@test.com'
                            break;
                        case btnsuperuser:
                            // code block
                            inpuser.value='useradv@test.com'
                            break;
                        case btnadminTraining:
                            // code block
                            inpuser.value='managertr@test.com'
                            break;
                        case btnadminKM:
                            // code block
                            inpuser.value='managerkm@test.com'
                            break;
                        case btnMD:
                            // code block
                            inpuser.value='md@test.com'
                            break;
                        case btnsupperAdmin:
                            // code block
                            inpuser.value='admin@test.com'
                            break;
                        default:
                            // code block
                        }
                })
            </script>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>


    </x-auth-card>
    
</x-guest-layout>

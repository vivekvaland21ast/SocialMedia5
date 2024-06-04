<!DOCTYPE html>
<html>

<head>
    <title>Welcome to SocialMate</title>
</head>

<body style="margin: 0px;">
    <div
        style="display: flex; align-items: center; justify-content: center; flex-direction: column; margin-top: 1.25rem; font-family: Nunito, sans-serif;">
        <section style="max-width: 42rem; background-color: #fff;">
            <header
                style="padding-top: 1rem; padding-bottom: 1rem; display: flex; justify-content: center; width: 100%;">
                <div class="navbar-center hidden lg:flex text-3xl font-semibold cursor-pointer">
                    <span style="color: #365CCE;">S</span>ocial<span style="color: #f97316;">M</span>ate
                </div>
                <div class="lg:flex text-3xl font-semibold cursor-pointer">
                    <img class="h-8 w-8" src="{{ url('public/profile_images/mail.png') }}" alt="SocialMate" />
                </div>
            </header>
            <div style="width: 100%; height: 2px; background-color: #365CCE;"></div>
            <div style="text-align: center; width: 100%; margin-top: 15px;">
                <div style="font-weight: bold; font-size: 25px;">
                    Thanks for <span style="position: relative;">
                        Signing up!
                        <div
                            style="position: absolute; height: 3px; background-color: #365CCE; width: 55px; left: 1px; bottom: -4px;">
                        </div>
                    </span>
                </div>
            </div>
            <main style="text-align: start; padding-left: 20px; padding-right: 20px;">
                <p>
                    Hey <span style="font-weight : bold;">{{ $user->full_name }}</span>, We're glad you are here!
                </p>
                <a href="http://127.0.0.1:8000/">
                    <button
                        style="padding-left: 1.25rem; padding-right: 1.25rem; padding-top: 0.5rem; padding-bottom: 0.5rem; margin-top: 1.5rem; font-size: 14px; font-weight: bold; text-transform: capitalize; background-color: #f97316; color: #fff; transition-property: background-color; transition-duration: 300ms; transform: none; border-radius: 0.375rem; border-width: 1px; border: none; outline: none; cursor: pointer;">
                        Visit Site
                    </button>
                </a>
            </main>
            <p style="padding-left: 1.25rem; padding-right: 1.25rem; margin-top: 2rem;">
                This email was sent from <a href="http://127.0.0.1:8000/" target="_blank">SocialMate</a>.
            </p>
        </section>
    </div>
    <footer style="margin-top: 2rem;">
        <div
            style="background-color: #365cce; padding-top :10px; padding-bottom : 10px; color: #fff; text-align: center;">
            <p class="footertext">© 2024 SocialMate. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>

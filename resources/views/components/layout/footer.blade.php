<footer class="container d-flex"
    style="min-height: 30vh;background-color:#2a2a2a; margin-top: 30px; border-radius:2em; border: solid orange">

    <div class="col-12 col-sm-6 col-md-4" style="padding: 5px; margin-left: 15px; border-radius:2em">
        <img style="height: 160px; width: 250px;" src="/img/The-Aulab-Post-logowhite-500x320.png" alt="logo music art">
        <div style="padding-top: 5%;">
            <p style="color: #f4f7f6; font-size: 12px;">
                Copyright © 2024. All rights reserved. <br> Lagengah.
            </p>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4" style="align-items: center; justify-content: center; border:solid green">
        <p style="color: #f4f7f6; font-weight: 200; text-align: center;">SOCIAL</p>
        <div class="card" style="align-items: center; justify-content: center; border:solid rgb(100, 0, 128)">

        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4" style="align-items:center; justify-content: center; border-radius:2em; border:solid yellow">

        <div class="container-fluid pt-3" style="justify-content: left;">
            <p style="color: #f4f7f6; font-size: 14px; margin-right: 10px; flex: 1;"> Rimani sempre aggiornato sulle ultime novità. <br>Iscriviti alla Newsletter!</p>

            <div class="search-panels" style="flex: 2;">
                <div class="search-group">
                    <input required="" type="text" name="text" autocomplete="on" class="input">
                    <label class="enter-label">E-Mail</label>
                    <div class="btn-box">
                        <button class="btn-search">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                </path>
                                <circle id="svg-circle" cx="208" cy="208" r="144"></circle>
                            </svg>
                        </button>
                    </div>
                    <div class="btn-box-x">
                        <button class="btn-cleare">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                <path
                                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"
                                    id="cleare-line"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <button class="button-signup" style="margin: 0.2em 0.2em;">
                <a class="dropdown-item"
                    href="{{ route('register') }}">Iscriviti</a>
            </button>
        </div>
    </footer>

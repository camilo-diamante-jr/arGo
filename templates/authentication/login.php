<section class="hero is-light is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-4">
                    <div class="box">
                        <h1 class="title is-3 has-text-centered has-text-dark">Login</h1>
                        <p id="login-error" class="has-text-danger has-text-centered is-hidden"></p>
                        <form id="login-form" method="POST">
                            <div class="field">
                                <label class="label">Email</label>
                                <div class="control">
                                    <input class="input" type="email" name="email" required />
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                    <input class="input" type="password" name="password" required />
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button has-background-black is-dark is-fullwidth" type="submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
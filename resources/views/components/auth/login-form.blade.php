<div class="border border-1 rouded shadow p-3" style="width: 350px">
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Přihlásit se</h3>
                    </div>
                    <div class="panel-body mt-3">
                        <form action="{{ route('post.auth.login') }}" method="POST" accept-charset="UTF-8" role="form">
                            @csrf
                            <fieldset class="d-flex flex-column gap-3 justify-content-center align-items-center">
                                <div class="form-group col-12">
                                    <input class="form-control" placeholder="yourmail@example.com" name="email"
                                        type="text">
                                </div>
                                <div class="form-group col-12">
                                    <input class="form-control" placeholder="Password" name="password" type="password"
                                        value="">
                                </div>
                                <div class="checkbox col-12">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                    </label>
                                </div>
                                <div class="col-12 text-center">
                                    <input class="btn btn btn-success col-5" type="submit" value="Login">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
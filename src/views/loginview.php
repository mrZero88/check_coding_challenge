<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Login</h5>
        </div>
        <div class="card-body">
            <form action="/users/loguserin" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Username</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                    </div>
                    <input type="password" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div style="display: flex;gap: 15px; float: right">
                    <a href="/users/register" class="btn btn-primary">Register</a>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
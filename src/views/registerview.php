<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Register</h5>
        </div>
        <div class="card-body">
            <form action="/users/registeruserin" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Username</span>
                    </div>
                    <input name="userName" type="text" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                    </div>
                    <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Password"
                           aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                    </div>
                    <input name="confirmationPassword" type="password" class="form-control" placeholder="Password"
                           aria-label="Username"
                           aria-describedby="basic-addon1">
                </div>
                <div style="display: flex;gap: 15px; float: right">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
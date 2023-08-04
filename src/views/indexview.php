<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check24</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="font-family: monospace">
<div class="container p-3" style="height: 100vh">
    <div class="card" style="height: 100%">
        <div class="card-body" style="height: 100%; display: flex;flex-direction: column;gap: 20px">
            <h3>MyBlog</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/">Home</a>
                            |
                            <a href="/posts">Overview</a>
                            |
                            <a href="/posts/create">New Post</a>
                            |
                            <a href="/imprint">Imprint</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/users/login">Login</a>
                            |
                            <a href="/users/loguserout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="height: 100%">
                <div class="card-body">
                    <?php if (isset($selectedView)): ?>
                        <?php include($selectedView) ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
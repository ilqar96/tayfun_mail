<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <base href="http://localhost/mail/">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>


<div class="container" >
    <div class="row  d-flex justify-content-center">
        <h2>Registration form</h2>
    </div>
    <div class="row d-flex justify-content-center">
        <form class="w-50 mt-5" method="post" action="<?=site_url('register')?>">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="user_name">User name</label>
                <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User name">
            </div>
            <div class="form-group">
                <label for="question">Question</label>
                <select name="question" name="question" class="form-control" id="question">
                    <?php foreach (questions() as $key=>$value ):?>
                    <option value="<?=$key?>"><?=$value?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Answer</label>
                <input type="text" class="form-control" name="answer" id="answer" placeholder="Enter answer">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


</body>
</html>
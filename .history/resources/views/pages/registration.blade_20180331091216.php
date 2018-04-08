@extends('layout')

@section('content')
<main>
        <div class="container">
            <div class="row breadcrumbs">
                <div class="col-sm-12">
                    <a href="index.php?page=index">Home</a>
                    <span class="seperator">></span>
                    <span class="current-page">Registration</span>
                </div>
            </div> <!-- .breadcrumbs -->

            <div class="row">
                <div class="col-sm-4">
                    <form id="reg-form" method="post">
                        <div class="errors" style="">
                            <ul>
                                <?php
                                    if (isset($_SESSION['flash']) && isset($_SESSION['flash']['errors'])) {
                                        foreach ($_SESSION['flash']['errors'] as $error) {
                                            echo "<li>$error</li>";
                                        }
                                        unset($_SESSION['flash']['errors']);
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="success" style="">
                            <ul>
                                <?php
                                    if (isset($_SESSION['flash']) && isset($_SESSION['flash']['success'])) {
                                        foreach ($_SESSION['flash']['success'] as $msg) {
                                            echo "<li>$msg</li>";
                                        }
                                        unset($_SESSION['flash']['success']);
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username*">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password*">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password2" class="form-control" placeholder="Retype password*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First name*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="fast_name" class="form-control" placeholder="Last name">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </main>
@endsection
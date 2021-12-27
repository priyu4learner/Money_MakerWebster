<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="mode.css">
    <title>Money Tracker</title>
</head>
<style>
    .image {
        position: relative;
    }

    .text {
        position: absolute;
        top: 25%;
        left: 5%;
        color: aliceblue;
        font-size: 6em;
        animation-name: ani;
        animation-duration: 16s;
        animation-delay: 4s;
    }

    #intu {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        ;
    }

    .card-body:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        ;
    }

    .card-body {
        background-color: lightcyan;
    }

    .info {
        animation-name: bod;
        animation-duration: 5s;
        animation-delay: 2s;
        transition-timing-function: ease;
    }

    @keyframes bod {
        from {
            left: 0%;
        }

        to {
            left: 10%;
        }
    }

    @keyframes ani {
        from {
            top: 20%;
            left: 3%;
        }

        to {
            top: 30%;
            left: 10%;
        }
    }
</style>

<body>
    <div class="image">
        <img src="money.jpg" style="width:100%;">
        <h1 class="text">Expense Tracker Agent</h1>
    </div>
    <!-----------Navigation tab------------------------------->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" style="font-size: 1.3em;">Home</a>
            </li>
        </ul>
    </nav>
    <div id="mode_changer">
        <div id="dark_mode" style="float:right;">
            <button class="btn btn-warning" type="button" id="button"><svg xmlns="http://www.w3.org/2000/svg"
                    height="36px" viewBox="0 0 24 24" width="36px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M20 8.69V4h-4.69L12 .69 8.69 4H4v4.69L.69 12 4 15.31V20h4.69L12 23.31 15.31 20H20v-4.69L23.31 12 20 8.69zm-2 5.79V18h-3.52L12 20.48 9.52 18H6v-3.52L3.52 12 6 9.52V6h3.52L12 3.52 14.48 6H18v3.52L20.48 12 18 14.48zM12.29 7c-.74 0-1.45.17-2.08.46 1.72.79 2.92 2.53 2.92 4.54s-1.2 3.75-2.92 4.54c.63.29 1.34.46 2.08.46 2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
                </svg></button>
        </div>
        <div style="justify-content: center;margin: 1.5em;text-align: center;">
            <a href=signup.php><button type="button" class="btn btn-primary btn-lg m-2"
                    style="margin: auto;">Register</button></a>
            <a href=login.php><button type="button" class="btn btn-primary btn-lg" style="margin: auto;">Log
                    In</button></a>
        </div>
        <div class="card mt-5 container p-5" id="intu">
            <div>
                <h1><b>An intuitive and cross-platform finance website.</b></h1>
            </div>
            <div>
                <h5>Money Lover helps you get just about everything managed. A smart,
                    easy-to-use app that allows you to track and categorize your in-and-out
                    money, create budgets that you can actually stick to.</h5>
            </div>
        </div>
        <div class="card mt-lg-5 p-2 border-0 info" style="width: 55%;margin-left: 5em;">
            <div class="card-body" id="intro">
                <h3>Simple money tracker</h3>
                <div>It takes seconds to record daily transactions. Put them into clear
                    and visualized categories such as Expense: Food, Shopping or Income:
                    Salary, Gift.</div>
            </div>
        </div>
        <div class="card  p-2 border-0 info" style="width: 55%;margin-left: 5em;">
            <div class="card-body" id="intro1">
                <h3>Painless Budgeting</h3>
                <div>Set budgets that are easy to stick to, based on your own
                    spending habits. You are one step closer to that stuff you want to buy.</div>
            </div>
        </div>
        <div class="card  p-2 border-0 info" style="width: 55%;margin-left: 5em;">
            <div class="card-body" id="intro2">
                <h3>The whole picture in one place</h3>
                <div>One report to give a clear view on your spending patterns. Understand
                    where your money comes and goes with easy-to-read graphs.</div>
            </div>
        </div>
    </div>
    <!---------------It is used to include js file for dark mode------------>
    <script src="mode.js"></script>
</body>

</html>
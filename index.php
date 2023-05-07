
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/style.css">
    <title>Tutorshop Admin Panel</title>
</head>
<body>
<div class="side-menu">
        <div class="brand-name">
            <img src="img/logo-white.png" alt="" width="140px">
        </div>
        <ul>
            <a href="index.php">
                <li><span>Dashboard</span></li>
            </a>
            <a href="students.html">
                <li><span>Students</span></li>
            </a>
            <a href="tutors.html">
                <li><span>Tutors</span></li>
            </a>
            <a href="income.html">
                <li><span>Income</span></li>
            </a>
            <a href="messages.html">
                <li><span>Messages</span></li>
            </a>
            <a href="transactions.html">
                <li><span>Transactions</span></li>
            </a>
            <a href="settings.html">
                <li><span>Settings</span></li>
            </a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="icon/search (1).png" alt="" ></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <img src="icon/bell.png" alt="">
                    <div class="img-case">
                        <img src="icon/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Students</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>530</h1>
                        <h3>Teachers</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Subjects</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>330000</h1>
                        <h3>Income</h3>
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>School</th>
                            <th>Amount</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>Froilan A. Emeliano</td>
                            <td>WMSU</td>
                            <td>Php 199</td>
                            <td>
                                <a href="#" class="btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Froilan A. Emeliano</td>
                            <td>WMSU</td>
                            <td>Php 199</td>
                            <td>
                                <a href="#" class="btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Froilan A. Emeliano</td>
                            <td>WMSU</td>
                            <td>Php 199</td>
                            <td>
                                <a href="#" class="btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Froilan A. Emeliano</td>
                            <td>WMSU</td>
                            <td>Php 199</td>
                            <td>
                                <a href="#" class="btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Froilan A. Emeliano</td>
                            <td>WMSU</td>
                            <td>Php 199</td>
                            <td>
                                <a href="#" class="btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Froilan A. Emeliano</td>
                            <td>WMSU</td>
                            <td>Php 199</td>
                            <td>
                                <a href="#" class="btn">View</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="icon/smile.png" alt="">
                            </td>
                            <td>Student 2</td>
                            <td><img src="icon/smile.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="icon/smile.png" alt="">
                            </td>
                            <td>Student 2</td>
                            <td><img src="icon/smile.png" alt=""></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="icon/smile.png" alt="">
                            </td>
                            <td>Student 2</td>
                            <td><img src="icon/smile.png" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
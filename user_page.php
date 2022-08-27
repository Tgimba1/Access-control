<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>Electricity Company Of Ghana</title>
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.png" type="image/png">
    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
               <a href="" ><h2><span class="las la-bolt"></span><span>Electricity Company Of Ghana</span></h2></a>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-exchange-alt"></span><span>Deposit</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-wallet"></span><span>Transfer</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-credit-card"></span><span>Cards</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-cog"></span><span>Settings</span></a>
                    </li>
                    <li>
                        <a href=""><span class="las la-user-circle"></span><span>Customer service</span></a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="las la-sign-out-alt"></span><span>Log out</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                       <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                   <a href="" ><span class="las la-search"></span></a>
                    <input type="search" placeholder="Search here" />
                </div>
                <div class="user-wrapper">
                    <img src="pro1.jpg" width="40px" height="40px" alt="">
                    <div>
                    <h4>Welcome,</h4>
                    <small><?php echo $_SESSION['user_name'] ?></small>
                    </div>
                </div>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>10</h1>
                            <span>Total Transfers</span>
                        </div>
                        <div>
                            <span class="las la-exchange-alt"></span>
                        </div>
                    </div>
                
                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Total Deposits</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>2</h1>
                        <span>Active Joint Users</span>
                    </div>
                    <div>
                        <span class="las la-user-friends"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>¢134,000</h1>
                        <span>Account amount</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
                </div>
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recent Transactions</h3>
                                <a href=""><button>See all<span class="las la-arrow-right"></span></button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>Transaction type</td>
                                                <td>Amount</td>
                                                <td>Status</td>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢8,000</td>
                                                    <td>
                                                        <span class="status orange"></span>
                                                        declined
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢52,000</td>
                                                    <td>
                                                        <span class="status pink"></span>
                                                        pending
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢5,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢2,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢7,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢3,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢1,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢19,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Deposit</td>
                                                    <td>¢37,000</td>
                                                    <td>
                                                        <span class="status purple"></span>
                                                        processed
                                                    </td>
                                                </tr>
                                            </tbody>
                                    </table>
                                </div>
                          
                            </div>
                        </div>

                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>Account Information</h3>
                                <button><span class="las la-info"></span></button> 
                            </div>
                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                    <img src="acc.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Account type</h4>
                                        <small>User</small>
                                    </div>
                                </div>
                                <div class="contact">
                                  <!--  <span class="las la-user-circle"></span> gimbatamiim@gmail.com">    <span class="las la-comment"></span></a> 
                                  <span class="las la-phone"></span> -->
                                </div>
                            </div>
                            

                           <div class="customer">
                                <div class="info">
                                <img src="acc1.png" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Account Holder</h4>
                                    <small><?php echo $_SESSION['user_name'] ?></small>
                                </div>
                            </div>
                            <!-- 
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        
                        <div class="customer">
                            <div class="info">
                            <img src="ram.jpg" width="40px" height="40px" alt="">
                            <div>
                                <h4>Michael Humming</h4>
                                <small>CEO Expert</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="las la-user-circle"></span>
                            <span class="las la-comment"></span>
                            <span class="las la-phone"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                        <img src="ram.jpg" width="40px" height="40px" alt="">
                        <div>
                            <h4>Michael Humming</h4>
                            <small>CEO Expert</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>
                <div class="customer">
                    <div class="info">
                    <img src="ram.jpg" width="40px" height="40px" alt="">
                    <div>
                        <h4>Michael Humming</h4>
                        <small>CEO Expert</small>
                    </div>
                </div>
                <div class="contact">
                    <span class="las la-user-circle"></span>
                    <span class="las la-comment"></span>
                    <span class="las la-phone"></span>
                </div>
            </div> -->
                    

                       
                    
                            </div>
                    </div>
                </div>
            </main>
        </div>
        <a href="mailto:gimbatamiim@gmail.com" class="go-top active" data-go-top>
            <span><i class="las la-envelope"></i></span>
        </a>
        <!--
        <div class="popup">
            <button id="close">&times;</button>
            <h2>Notification</h2>
            <br>
            
            <p>Processing.
            <i class="las la-spinner"></i>
            </p>
            
             <br>
            <p id="ok">OK</p>
        </div>
        -->
        <script src="script.js"></script>
    </body>
</html>
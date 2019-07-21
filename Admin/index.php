<?php 
include"header.php";
include"sidebar.php";
?>

                
                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container" style="overflow: auto; height: 550px;">
                        
                        
                        <div class="row row-condensed">
                            <div class="col-lg-9 col-md-6">
                                
                                <div class="wrapper">
                                    <div class="page-subtitle">
                                        <h2>Summary profit</h2>
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-rounded btn-icon"><i class="fa fa-calendar pull-left"></i> 01/07/2015</button>
                                                <button class="btn btn-default btn-rounded btn-icon"><i class="fa fa-calendar pull-left"></i> 01/08/2015</button>
                                            </div>
                                        </div>
                                    </div>                                                                        
                                    <div id="dashboard-chart" class="chart-holder"><svg></svg></div>                                                                                                            
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover text-center">
                                            <tr>                 
                                                <th width="200" class="text-left">Details</th>
                                                <th width="150" class="text-left">Products</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Delivery</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            <tr>          
                                                <td>                                                
                                                    <div class="list-contacts list-contacts-inline" style="width: 160px;">
                                                        <a href="#" class="list-contacts-item contact-online">
                                                            <img src="assets/images/users/user_2.jpg"> Devin Stephens
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-left table-products">
                                                    <a href="#">Awesome T-shirt</a>
                                                </td>
                                                <td>1</td>
                                                <td><strong>$15.99</strong></td>
                                                <td class="text-left">
                                                    <span class="label label-danger" style="margin-right: 10px;">Courier</span> UK,London. Street st. 159
                                                </td>                                                
                                                <td><span class="label label-success">New</span></td>
                                                <td>
                                                    <button class="btn btn-primary btn-rounded btn-clean">view</button>
                                                </td>                                            
                                            </tr>
                                            <tr>    
                                                <td>                                                
                                                    <div class="list-contacts list-contacts-inline" style="width: 160px;">
                                                        <a href="#" class="list-contacts-item contact-away">
                                                            <img src="assets/images/users/user_3.jpg"> Marissa George
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="text-left table-products">
                                                    <a href="#">Oldor GG pants</a><br><a href="#">Socks (white)</a>
                                                </td>
                                                <td>1 / 1</td>  
                                                <td><strong>$57.45</strong></td>
                                                <td class="text-left">
                                                    <span class="label label-info" style="margin-right: 10px;">Pickup</span> USA,New York. Highway st. 5
                                                </td>                                                
                                                <td><span class="label label-warning">In queue</span></td>
                                                <td>
                                                    <button class="btn btn-primary btn-rounded btn-clean">view</button>
                                                </td>                                            
                                            </tr>
                                            <tr>            
                                                <td>
                                                    <div class="list-contacts list-contacts-inline" style="width: 160px;">
                                                        <a href="#" class="list-contacts-item contact-offline">
                                                            <img src="assets/images/users/user_1.jpg"> John Doe
                                                        </a>
                                                    </div>                                                
                                                </td>
                                                <td class="text-left table-products">
                                                    <a href="#">pPhone 64Gb</a><br><a href="#">Accessories</a>
                                                </td>
                                                <td>1 / 2</td>                                            
                                                <td><strong>$348.00</strong></td>
                                                <td class="text-left">
                                                    <span class="label label-danger" style="margin-right: 10px;">Courier</span> UA, Kiev. Revuts st. 42
                                                </td>                                                
                                                <td><span class="label label-danger">Delivering</span></td>
                                                <td>
                                                    <button class="btn btn-primary btn-rounded btn-clean">view</button>
                                                </td>                                            
                                            </tr>
                                            <tr>             
                                                <td>
                                                    <div class="list-contacts list-contacts-inline" style="width: 160px;">
                                                        <a href="#" class="list-contacts-item contact-offline">
                                                            <img src="assets/images/users/user_4.jpg"> Karen Spencer
                                                        </a>
                                                    </div>                                                 
                                                </td>
                                                <td class="text-left table-products">
                                                    <a href="#">Teddy Bear</a><br><a href="#">Flowers (Roses)</a>
                                                </td>
                                                <td>1 / 21</td> 
                                                <td><strong>$121.32</strong></td>
                                                <td class="text-left">
                                                    <span class="label label-success" style="margin-right: 10px;">Post</span> RU, Moscow. Lenina st. 11
                                                </td>                                                
                                                <td><span class="label label-success">Delivered</span></td>
                                                <td>
                                                    <button class="btn btn-primary btn-rounded btn-clean">view</button>
                                                </td>                                            
                                            </tr>
                                        </table>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="widget-tabbed margin-top-30">
                                    <ul class="widget-tabs widget-tabs-three">
                                        <li class="active"><a href="#tasks">Tasks</a></li>                                        
                                        <li><a href="#activity">Activity</a></li>                                        
                                    </ul>                                    
                                    <div class="widget-tab list-tasks active" id="tasks">
                                                                                
                                        <div class="list-tasks-item primary">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_1">
                                                <label for="task_1"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">The term is commonly used as a synonym for computers and computer networks</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">John Doe</a></div>
                                                <div class="date">13:30</div>
                                            </div>
                                        </div>

                                        <div class="list-tasks-item danger">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_2">
                                                <label for="task_2"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">Humans have been storing, retrieving, manipulating and communicating information</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Devin Stephens</a></div>
                                                <div class="date">11:22</div>
                                            </div>
                                        </div>
                                        
                                        <div class="list-tasks-item danger">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_3">
                                                <label for="task_3"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">Based on the storage and processing technologies employed</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Kaitlynn Bowen</a></div>
                                                <div class="date">10:59</div>
                                            </div>
                                        </div>
                                        
                                        <div class="list-tasks-item info">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_4">
                                                <label for="task_4"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">Devices have been used to aid computation for thousands of years</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Marissa George</a></div>
                                                <div class="date">10:48</div>
                                            </div>
                                        </div>
                                        
                                        <div class="list-tasks-item warning active">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_1" checked="checked">
                                                <label for="task_1"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">The behaviour of troops in warfare varies considerably, both individually and as units or armies</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Philip Orlowsky</a></div>
                                                <div class="date">1 day ago</div>
                                            </div>
                                        </div>
                                        
                                        <div class="list-tasks-item danger active">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_5" checked="checked">
                                                <label for="task_5"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">In a business context, the Information Technology Association of America has defined information technology</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Darrell Wolfe</a></div>
                                                <div class="date">1 day ago</div>
                                            </div>
                                        </div>
                                        
                                        <div class="list-tasks-item primary active">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_6" checked="checked">
                                                <label for="task_6"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">The relational database model introduced a programming-language independent Structured Query Language</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Karen Spencer</a></div>
                                                <div class="date">1 day ago</div>
                                            </div>
                                        </div>
                                        
                                        <div class="list-tasks-item warning active">
                                            <div class="checkbox">
                                                <input type="checkbox" id="task_7" checked="checked">
                                                <label for="task_7"></label>
                                            </div>
                                            <div class="task">
                                                <a href="#">The field of information ethics was established by mathematician Norbert Wiener in the 1940s</a>
                                                <div class="user"><i class="fa fa-user"></i> <a href="#">Marissa George</a></div>
                                                <div class="date">2 days ago</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-tab" id="activity">
                                                                                
                                        <ul class="timeline-simple">
                                            <li class="success">
                                                <span class="timeline-simple-date">12 min ago</span>
                                                The standard Lorem Ipsum passage, used since the 1500s
                                            </li>                                        
                                            <li class="success">
                                                <span class="timeline-simple-date">2h ago</span>
                                                Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                                            </li>
                                            <li class="info">
                                                <span class="timeline-simple-date">15h ago</span>
                                                1914 translation by H. Rackham
                                            </li>
                                            <li class="info">
                                                <span class="timeline-simple-date">19h ago</span>
                                                Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC
                                            </li>
                                            <li class="primary">
                                                <span class="timeline-simple-date">20h ago</span>
                                                Phasellus finibus ut libero sit amet gravida. Vivamus sed placerat sapien.
                                            </li>
                                            <li class="primary">
                                                <span class="timeline-simple-date">20h ago</span>
                                                Phasellus finibus ut libero sit amet gravida. Vivamus sed placerat sapien.
                                            </li>
                                            <li class="warning">
                                                <span class="timeline-simple-date">1 day ago</span>
                                                Curabitur vel ultrices arcu, ut vestibulum nulla. Vivamus tempor eros dolor.
                                            </li>
                                            <li class="warning">
                                                <span class="timeline-simple-date">2 day ago</span>
                                                Vivamus finibus diam in feugiat gravida. Sed dapibus malesuada condimentum.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="wrapper padding-bottom-0">
                                    <div class="dev-table">    
                                        <div class="dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent">
                                                <h2>Server Usage</h2>
                                                <p>Total server usage in percentages</p>                                        
                                                <div class="dev-stat"><span class="counter">68</span>%</div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                                </div>                                        
                                                <p>We totally recommend you change your plan to <strong>Pro</strong>. Click here to get more details.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>
                                            </div>

                                        </div>
                                        <div class="dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent dev-widget-success">
                                                <h2>Total Earnings</h2>
                                                <p>This is total earnings per last year</p>                                        
                                                <div class="dev-stat">$<span class="counter">75,332</span></div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 79%;"></div>
                                                </div>                                        
                                                <p>We happy to notice you that you become an Elite customer, and you can get some custom sugar.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>
                                            </div>

                                        </div>
                                        <div class="dev-col">                                    

                                            <div class="dev-widget dev-widget-transparent dev-widget-danger">
                                                <h2>Your Balance</h2>
                                                <p>All your earnings for this time</p>
                                                <div class="dev-stat">$<span class="counter">5,321</span></div>                                                                                
                                                <div class="progress progress-bar-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                </div>                                        
                                                <p>You can withdraw this money in end of each month. Also you can spend it on our marketplace.</p>

                                                <a href="#" class="dev-drop">Take a closer look <span class="fa fa-angle-right pull-right"></span></a>                                        
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="wrapper">                                    
                                    <div class="table-controls">
                                        <div class="page-subtitle">
                                            <h2>Order statistics</h2>
                                            <div class="table-controls-block"></div>
                                        </div>             
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Year</th>
                                                        <th>Ja.</th>
                                                        <th>Fe.</th>
                                                        <th>Ma.</th>
                                                        <th>Aw.</th>
                                                        <th>Ma.</th>
                                                        <th>Ju.</th>
                                                        <th>Ju.</th>
                                                        <th>Ao.</th>
                                                        <th>Se.</th>
                                                        <th>Oc.</th>
                                                        <th>No.</th>
                                                        <th>De.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2015</td>
                                                        <td>923</td>
                                                        <td>975</td>
                                                        <td>1,021</td>
                                                        <td>950</td>
                                                        <td>915</td>
                                                        <td>841</td>
                                                        <td>802</td>
                                                        <td>896</td>
                                                        <td>971</td>
                                                        <td>955</td>
                                                        <td>921</td>
                                                        <td>1,032</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2014</td>
                                                        <td>823</td>
                                                        <td>875</td>
                                                        <td>902</td>
                                                        <td>850</td>
                                                        <td>815</td>
                                                        <td>841</td>
                                                        <td>702</td>
                                                        <td>796</td>
                                                        <td>871</td>
                                                        <td>855</td>
                                                        <td>821</td>
                                                        <td>955</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2013</td>
                                                        <td>533</td>
                                                        <td>517</td>
                                                        <td>590</td>
                                                        <td>601</td>
                                                        <td>612</td>
                                                        <td>586</td>
                                                        <td>547</td>
                                                        <td>605</td>
                                                        <td>638</td>
                                                        <td>477</td>
                                                        <td>541</td>
                                                        <td>680</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2015 <strong>Aqvatarius</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                    </div>
                    <!-- ./page content container -->
                                        
                </div>
                <!-- ./page content -->                                               
            </div>  
            <!-- ./page container -->
            
            <!-- right bar -->
            <!-- ./right bar -->
          <?php 
include"footer.php";
?>
  
          
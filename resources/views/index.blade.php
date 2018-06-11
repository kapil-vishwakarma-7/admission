@extends('layouts.header')
@section('body')
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="admission">
            <div class="info-box blue-bg">
              <i class="fa fa-university"></i>
              <div class="count">New</div>
              <div class="title">admission</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="enquiry">
            <div class="info-box brown-bg">
              <i class="fa fa-edit"></i>
              <div class="count">New</div>
              <div class="title">Enquiry</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
        
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="courses">
            <div class="info-box blue-bg">
              <i class="fa fa-book"></i>
              <div class="count">Our</div>
              <div class="title">Courses</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="">
            <div class="info-box green-bg">
              <i class="fa fa-users"></i>
              <div class="count">Student</div>
              <div class="title">List</div>
            </div>
            </a>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


       


        <!-- Today status end -->



        <div class="row">

          
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box facebook">
              <i class="fa fa-facebook"></i>
              <ul>
                <li>
                  <strong>256k</strong>
                  <span>friends</span>
                </li>
                <li>
                  <strong>359</strong>
                  <span>feeds</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->
          </div>
          <div class="col-md-3">

            <div class="social-box google-plus">
              <i class="fa fa-google-plus"></i>
              <ul>
                <li>
                  <strong>962</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>256</strong>
                  <span>circles</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>1562k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <div class="col-md-3">

            <div class="social-box twitter">
              <i class="fa fa-twitter"></i>
              <ul>
                <li>
                  <strong>1562k</strong>
                  <span>followers</span>
                </li>
                <li>
                  <strong>2562</strong>
                  <span>tweets</span>
                </li>
              </ul>
            </div>
            <!--/social-box-->

          </div>
          <!--/col-->
<div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Users</strong></h2>
                
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      
                      <th>Country</th>
                      <th>Users</th>
                      <th>Online</th>
                      <th>Performance</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <td>Germany</td>
                      <td>2563</td>
                      <td>1025</td>
                      
                    </tr>
                    <tr>
                      
                      <td>India</td>
                      <td>3652</td>
                      <td>2563</td>
                      
                    </tr>
                    <tr>
                     
                      <td>Spain</td>
                      <td>562</td>
                      <td>452</td>
                      
                    </tr>
                    <tr>
                      
                      <td>Russia</td>
                      <td>1258</td>
                      <td>958</td>
                      
                    </tr>
                    <tr>
                     
                      <td>USA</td>
                      <td>4856</td>
                      <td>3621</td>
                     
                    </tr>
                   
                    
                    
                  </tbody>
                </table>
              </div>

            </div>

          </div>
        </div>



        <!-- statics end -->




        <!-- project team & activity start -->
        <div class="row">
          <div class="col-md-4 portlets">
            <!-- Widget -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Message</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="panel-body">
                <!-- Widget content -->
                <div class="padd sscroll">

                  <ul class="chats">

                    <!-- Chat by us. Use the class "by-me". -->
                    <li class="by-me">
                      <!-- Use the class "pull-left" in avatar -->
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In meta area, first include "name" and then "time" -->
                        <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                        Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <!-- Chat by other. Use the class "by-other". -->
                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-me">
                      <div class="avatar pull-left">
                        <img src="img/user.jpg" alt="" />
                      </div>

                      <div class="chat-content">
                        <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                    <li class="by-other">
                      <!-- Use the class "pull-right" in avatar -->
                      <div class="avatar pull-right">
                        <img src="img/user22.png" alt="" />
                      </div>

                      <div class="chat-content">
                        <!-- In the chat meta, first include "time" then "name" -->
                        <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                        Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                        <div class="clearfix"></div>
                      </div>
                    </li>

                  </ul>

                </div>
                <!-- Widget footer -->
                <div class="widget-foot">

                  <form class="form-inline">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Type your message here...">
                    </div>
                    <button type="submit" class="btn btn-info">Send</button>
                  </form>


                </div>
              </div>


            </div>
          </div>

          <div class="col-lg-8">
            <!--Project Activity start-->
            <section class="panel">
              <div class="panel-body progress-panel">
                <div class="row">
                  <div class="col-lg-8 task-progress pull-left">
                    <h1>To Do Everyday</h1>
                  </div>
                  <div class="col-lg-4">
                    <span class="profile-ava pull-right">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                        Jenifer smith
                                </span>
                  </div>
                </div>
              </div>
              <table class="table table-hover personal-task">
                <tbody>
                  <tr>
                    <td>Today</td>
                    <td>
                      web design
                    </td>
                    <td>
                      <span class="badge bg-important">Upload</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                    </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Yesterday</td>
                    <td>
                      Project Design Task
                    </td>
                    <td>
                      <span class="badge bg-success">Task</span>
                    </td>
                    <td>
                      <div id="work-progress2"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>21-10-14</td>
                    <td>
                      Generate Invoice
                    </td>
                    <td>
                      <span class="badge bg-success">Task</span>
                    </td>
                    <td>
                      <div id="work-progress3"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>22-10-14</td>
                    <td>
                      Project Testing
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>24-10-14</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-info">Milestone</span>
                    </td>
                    <td>
                      <div id="work-progress4"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>28-10-14</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <div id="work-progress5"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>Last week</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-primary">To-Do</span>
                    </td>
                    <td>
                      <div id="work-progress1"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>last month</td>
                    <td>
                      Project Release Date
                    </td>
                    <td>
                      <span class="badge bg-success">To-Do</span>
                    </td>
                    <td>
                      <span class="profile-ava">
                                        <img alt="" class="simple" src="img/avatar1_small.jpg">
                                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </section>
            <!--Project Activity end-->
          </div>
        </div><br><br>

        <div class="row">
         

          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>
                <div class="widget-icons pull-right">
                  <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Tags</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
      @endsection

<?php
session_start();
if(isset($_SESSION["rollno"]))
{
    $rollno=$_SESSION["rollno"];
    if ($rollno==2014130999)
        header("Location:admin_page.php");
    else
        header("location:student_home.php");
}

include("nav_bar.php");
?>
            <div class="jumbotron">
                <h2>Log In</h2>
                <form role="form" method="POST" action="login.php">
                    <div class="form-group"> 
                        <label class="control-label" for="UID">Roll No.(UID)</label>                         
                        <input type="text" class="form-control" name="rollno" required="required" placeholder="Enter UID"> 
                    </div>                     
                    <div class="form-group"> 
                        <label class="control-label" for="\Password">Password</label>                         
                        <input type="password" class="form-control" name="Password" required="required" placeholder="Password"> 
                    </div>                     
                    <button type="button" data-toggle="modal" data-target="#id1" class="btn btn-large btn-success">Submit</button>
                </form>
            </div>
            <footer class="footer">
                <p>&copy Sardar Patel Institute of Technology</p>
            </footer>


<div class="modal fade" id="id1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body"><div class="row">
                    <div class="col-sm-12 head-containerbs3">
                        <div class="col-sm-7 name-date">
                            <div class="row">
                                <span class="item-titlebs3">{{ expense.paid_to }}</span>
                            </div>
                            <div class="row item-date-div">
                                <span class="item-date">{{ expense.date_created }}</span>
                            </div>
                        </div>
                        <div class="col-sm-5 amount-div-details"><span id="sp1" class="item-amountbs3 negative-amount-details"> </span></div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12 category-color-bar" style="background-color: #FFFFFF;"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 column-details left-column-details"> <!-- left column -->
                        <!-- category -->
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="label-details">Category</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="value-details">{{ expense.subcategories }}</span>
                            </div>
                        </div>
                        <!-- account -->
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="label-details">Source</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="value-details">{{ expense.source }}</span>
                            </div>
                        </div>

                        <!-- vat id -->
                        <!-- external reference -->

                        <div class="row horizontal-separator-out">
                            <div class="col-sm-12 horizontal-separator-in"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- tax -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="label-details">Tax</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="value-details">{{ expense.tax_details }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- tax deductable -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="label-details">VAT ID</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="value-details">{{ expense.vat }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- base -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="label-details">Type</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="value-details">{{ expense.option}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- value tax -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="label-details">External Reference</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="value-details">{{ expense.external_ref }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 column-details right-column-details"> <!-- right column -->
                        <!-- description -->
                        <!-- long description -->
                        <!-- attachment -->
                        <div class="row"></div>
                        <!-- is recurrent -->
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="label-details">Is recurrent: {{ expense.is_recurrent }}</span>
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="value-details"><a href="{{ expense.bill.url }}"> <img alt="User Pic" src="{{expense.bill.url}}" class="img-circle img-responsive"></a></span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</div>
</div>
        <!-- /container -->
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>

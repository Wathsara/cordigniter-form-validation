<div class="container">
    <div class="row main">
        <div class="main-login main-center" style="background-color:#FF7F50;">
            <h1 style="text-align: center">Registration form</h1>
        </div>
        <div class="main-login main-center" style="background-color:#004;">

            <form class="" method="post" action="Register/submit">
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">First Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="fname" id="name"  placeholder="Enter your First Name"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lname" class="cols-sm-2 control-label">Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="lname" id="name"  placeholder="Enter your Last Name"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Department</label>
                    <div class="cols-sm-10">
                        <select name='depertment' class="form-control" id='monthddl' style="margin-top:5px">
                            <option value="Science">Science</option>
                            <option value="Maths">Maths</option>
                            <option value="Law">Law</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="sname" class="cols-sm-2 control-label">User Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="sname" id="name"  placeholder="Enter your Screen Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">


                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="cols-sm-2 control-label">Phone</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="phone" id="username"  placeholder="Enter your Phone Number"/>
                            </div>
                        </div>
                    </div>

                    <div class="main-login main-center" style="background-color:#FF7F50;text-align:center;margin 0;width:100%;">
                        <input type="submit" class="btn btn-success" name="submit" value="submit" style="width="100%;float:left"/>
                    </div>

            </form>
        </div>
    </div>
</div>

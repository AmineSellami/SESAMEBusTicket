<div class="row">
    <div class="col-xs-4 col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Payment Details
                </h3>
                <div class="checkbox pull-right">
                    <label>
                        <input type="checkbox" />
                        Remember
                    </label>
                </div>
            </div>
            <div class="panel-body">
                <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                   required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-lg-6 pl-ziro">
                                    <input type="number"  class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-lg-6 pl-ziro">
                                    <input type="number" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <ul class="nav nav-pills nav-stacked">
        </ul>
        <br/>
        <?php echo '<a href="?controller=reservation&action=pay&id=' . $rid . '" class="btn btn-success btn-lg btn-block" role="button" >pay</a>'; ?>
        <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
    </div>
</div>
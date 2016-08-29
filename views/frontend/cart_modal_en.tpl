    <div class="modal fade" id="modal-1">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Personal data</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat col-md-offset-2 col-md-8">
                        <form class="orderform" action="">
                            <input name="name" type="text" placeholder="Name Surname Lastname">
                            <input name="phone" type="text" placeholder="Phone">
                            <input name="email" type="text" placeholder="Email">
							<input name="lang" type="hidden" value="Английский">
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-toggle="modal" data-target="#modal-1" style="display: inline-block;">Cancel</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-2">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Delivery method</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat cart col-md-offset-2 col-md-9">
                        <form class="orderform" action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                        <div class="check-modal">
                                            <input id="check1" type="checkbox" name="samovivoz" value="Самовывоз">
                                            <label for="check1"><h3>Pickup</h3></label>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="tab-txt"><a href="https://maps.yandex.ru/?text={$ss_samovivoz_address_en}" class="underline" target="_blank">{$ss_samovivoz_address_en}</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Transport company</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tcompany select sel-menu sel-mod">
                                            <div class="sel-select">
                                                <h5>Choose a company</h5>
												<input name="transport" id="tcc" type="hidden" />
                                                <img src="{$templateWebPath}images/sel4.png" alt="">
                                            </div>
                                            <div class="sel-option">
                                                <ul>
												    {foreach from=$transport item=tc}
                                                        <li>
                                                            <h4>{$tc.title_en}</h4>
                                                        </li>
													{/foreach}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-1" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-3" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-3">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Delivery address</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat cart col-md-offset-1 col-md-10">
                        <form class="orderform" action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Delivery address</h3>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="address" type="text">
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-4" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-4">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Payment details</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat cart col-md-offset-1 col-md-10">
                        <form class="orderform" action="">
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio1" type="radio" name="money" value="Наличный рассчёт">
                                    <label for="radio1"><h3>Cash</h3></label>

                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio2" type="radio" name="money" value="Безналичный рассчёт">
                                    <label for="radio2"><h3>Cashless</h3></label>

                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio3" type="radio" name="money" value="Электронные платёжные системы">
                                    <label for="radio3"><h3 class="rouge">Electronic payment systems</h3></label>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-3" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" style="display: inline-block;" onclick="add_order_details();">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-5">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Confirmation</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" onclick="add_order_details();"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="requisite requisite-mod col-md-offset-1 col-md-10">
                        <ul>
                            <li id="details_name">
                                <h3>Name Surname Lastname</h3>
                                <h3 class="h3-right">-</h3>
                            </li>
                            <li id="details_phone">
                                <h3>Phone</h3>
                                <h3 class="h3-right">-</h3>
                            </li>
                            <li id="details_email">
                                <h3>Email</h3>
                                <h3 class="h3-right">Hidden</h3>
                            </li>
                            <li id="details_samovivoz">
                                <h3>Delivery method</h3>
                                <h3 class="h3-right">-</h3>
                            </li>
							<li id="details_sv">
							    <h3>Pickup address</h3>
								<h3 class="h3-right"><a href="https://maps.yandex.ru/?text={$ss_samovivoz_address_en}" class="underline" target="_blank">{$ss_samovivoz_address_en}</a></h3>
							</li>
                            <li id="details_transport">
                                <h3>Transport company</h3>
                                <h3 class="h3-right">-</h3>
                            </li>
                            <li id="details_address">
                                <h3>Delivery address</h3>
                                <h3 class="h3-right">-</h3>
                            </li>
                            <li id="details_money">
                                <h3>Payment details</h3>
                                <h3 class="h3-right">-</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-4" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" onclick="sendit('orderform');">Order</button>
						<button id="sendordersuccess" class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-6" style="display: none;">SEND</button>
						<button id="sendordererror" class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-8" style="display: none;">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-6">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Success</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4>Order data sent to the company manager. We will contact you shortly. Thanks for your order!</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="modal fade" id="modal-8">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Unsuccessful</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4> Order data have not been sent.
                        <br /> Please fill in all the fields, and select a form of payment.
						<br />If you chose "Pickup", the transport company and the delivery address is not needed.</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-5">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
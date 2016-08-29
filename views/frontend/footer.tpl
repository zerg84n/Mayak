   <div class="footer">
       {if $lang == 'ru'}
            <div class="container">
                <div class="col-sm-6 col-md-3">
                    <h1>Контакты</h1>
                    <div class="footer-info">
                        <h2>Телефон: {$ss_phone}, {$ss_phone2}</h2>
                        <h2>Факс:  {$ss_fax}</h2>
                        <h2>Почта: <a href="mailto:{$ss_email}">{$ss_email}</a></h2>
                    </div>
                    <div class="footer-info">
                        <h2>Адрес: {$ss_address}</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>Информация</h1>
                    <ul>
		    		    {foreach from=$menu item=menuitem}
                            <li>
		    			    	<h2><a href="{$menuitem.link_ru}">{$menuitem.title_ru}</a></h2>
                            </li>
		    			{/foreach}
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>Мы принимаем</h1>
                    <div class="footer-info">
                        <img src="{$templateWebPath}images/icon-1.png" alt="">
						<br />
						<ul style="margin-top: 32px;">
						    <li>
						        <h2>Разработка сайта <a href="http://kovalevaleksey.ru/" target="_blank">Алексей Ковалев</a></h2>
							</li>
						    <li>
						        <h2><a href="/">{$ss_sitename}</a>, 2016 &copy;</h2>
							</li>
						</ul>
                    </div>
                    <div class="share">
                        <div id="ok_shareWidget"></div>
                        <div id="vk_like"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 footer-share">
                    <div id="vk_groups"></div>
                </div>
            </div>
		{else}
            <div class="container">
                <div class="col-sm-6 col-md-3">
                    <h1>Contacts</h1>
                    <div class="footer-info">
                        <h2>Phone: {$ss_phone}, {$ss_phone2}</h2>
                        <h2>Fax:  {$ss_fax}</h2>
                        <h2>Email: <a href="mailto:{$ss_email}">{$ss_email}</a></h2>
                    </div>
                    <div class="footer-info">
                        <h2>Address: {$ss_address}</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>Information</h1>
                    <ul>
		    		    {foreach from=$menu item=menuitem}
                            <li>
		    			    	<h2><a href="{$menuitem.link_en}">{$menuitem.title_en}</a></h2>
                            </li>
		    			{/foreach}
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>We get</h1>
                    <div class="footer-info">
                        <img src="{$templateWebPath}images/icon-1.png" alt="">
						<br />
						<ul style="margin-top: 32px;">
						    <li>
						        <h2>Developed by <a href="http://kovalevaleksey.ru/" target="_blank">Aleksey Kovalev</a></h2>
						    </li>
						    <li>
						        <h2><a href="/">{$ss_sitename}</a>, 2016 &copy;</h2>
							</li>
						</ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 footer-share">
                    <div id="vk_groups"></div>
                </div>
            </div>
		{/if}
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{$templateWebPath}js/bootstrap.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{$templateWebPath}js/script.js"></script>
  </body>
</html>
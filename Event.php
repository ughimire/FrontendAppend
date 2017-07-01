<?php

namespace Plugin\FrontendAppend;

class Event
{
    public static function ipBeforeController()
   {

       $cloneJsVar = self::getNode();

        ipAddJsVariable('NodeAppendVar', $cloneJsVar);

        ipAddJs('Plugin/FrontendAppend/assets/FrontendAppend.js');
    }

    private static function getNode()
    {


        $nodeHtml = '<div class="container">
						<button type="button" class="navbar-toggle" id="slide-nav"><i class="icon icon-menu"></i></button>
						<div class="row">
							<div class="col-sm-3 col-lg-3">
								<a class="logo" href="https://stickchaserstreeservice.com/"> <img class="logo-default" src="https://stickchaserstreeservice.com/assets/images/logo.png" alt="" /> <img class="logo-mobile" src="https://stickchaserstreeservice.com/assets/images/logo.png" alt="" /> </a>
							</div>
							<div class="visible-lg col-lg-3">
								<div class="slogan" style="margin-bottom: -60px;font-size: 21px;!important;"><strong>Stick Chasers Tree Service </strong> </div>
								<div class="slogan"> Quality work you Can Trust! </div>
								
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="phone">
                                    <div><span class="custom-color hidden-xs">CALL US: </span> <span class="phone-number"><a href="tel:262-583-2099"> 262-583-2099</a></span><i class="icon icon-telephone"></i></div>
									<div class="phone-sm hidden-xs">Emergency Hours - 24 hours a day 7 days a week </div>
									<div class="phone-sm hidden-xs">Normal hours - 8 to 4 Monday To Friday </div>
								</div>
							</div>
							<div class="col-sm-3 col-lg-2">
								<div class="social-links">
									<ul>
										<!--<li>
											<a class="icon icon-twitter-logo-button" href="#"></a>
										</li>-->
										<li>
											<a class="icon icon-facebook-logo-button" href=" https://www.facebook.com/Stick-Chasers-Tree-Service-728901497247114/" target="_blank"></a>
										</li>
										<!--<li>
											<a class="icon icon-instagram-logo" href="#"></a>
										</li>-->
									</ul>
								</div>
							</div>
						</div>
						<!--<div class="header__search"> <a href="#" class="search-open"><span class="icon icon-magnifying-glass"></span></a> </div>-->
					</div>
				</div>';

        return $nodeHtml;
    }
}

<td width="320px" align="center" valign="top">
    <!--
    <table class="table-rc-countdown-tab" border="0" cellpadding="0" cellpadding="0">
        <tr><td align="center" valign="top" height="10px"></td></tr>
        <tr><td align="center" valign="top"><span class="span-timer" id="span-timer"></span></td></tr>
    </table>
    <a href="tf-register.php">
    <table class="table-rc-countdown-tab-2" border="0" cellpadding="0" cellpadding="0">
        <tr><td></td></tr>
    </table>
    </a>
    <table height="25px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table>
    <table border="0" cellpadding="0" cellpadding="0">
        <tr><td><a href="tf-workshops.php" class="text-body-link" style="font-size: 8pt">Click here for <b>Workshop Registration</b></a></td></tr>
    </table>
    -->
    <table height="25px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table>
    <table class="table-rc-updates" border="0" cellpadding="0" cellpadding="0">
        <tr><td class="rc-widget-headers" align="left" valign="bottom"><a href="tf-updates.php" class="rc-widget-headers"><span id="a_updates_flasher">Updates</span></a></td></tr>
        <tr><td align="left" height="1px" bgcolor="#bbbf21"></td></tr>
        <tr><td align="left" height="3px"></td></tr>
        <tr>
            <td align="left" valign="top" class="rc-updates-list">
                <?php
					require_once('tf-config.php');
					require_once('tf-date-func.php');
					require('tf-sql-connect.php');
					$flag_sqlfail=0;
					//GET MESSAGES
					$tbl_name=__SQL_TABLE_PREFIX__ . "updates";
					$sql_query="SELECT * FROM $tbl_name ORDER BY uid DESC LIMIT 0,10";
					$query_result=mysql_query($sql_query);
					if(!$query_result)
					{
						$flag_sqlfail=1;
						$err_occured=1;
					}
					$printed=0;
					while($row=mysql_fetch_array($query_result))
					{
						echo "&bull;&nbsp;<a href='tf-updates.php' class='rc-updates-list'>";
						if(strlen($row['utext'])>30)
						{
							echo substr($row['utext'],0,30) . '...';
						}
						else
						{
							echo $row['utext'];
						}
						echo "</a><br />";
						$printed=1;
					}
					if($printed!=1)
					{
						echo "No updates are available.";
					}
					mysql_close($con);
				?>
            </td>
        </tr>
        <script type="text/javascript" language="javascript">
			function blinkUpdatesFlasher()
			{
				if(document.getElementById("a_updates_flasher").style.visibility=="hidden")
				{
					document.getElementById("a_updates_flasher").style.visibility="visible";
					setTimeout("blinkUpdatesFlasher()",500);
				}
				else
				{
					document.getElementById("a_updates_flasher").style.visibility="hidden";
					setTimeout("blinkUpdatesFlasher()",100);
				}
			}
			blinkUpdatesFlasher();
		</script>
    </table>
    <table height="40px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table> 
    <table class="table-rc-sponsors" border="0" cellpadding="0" cellpadding="0">
        <tr><td class="rc-widget-headers" align="left" valign="bottom">Gallery</td><td class="rc-widget-headers" align="right" valign="bottom"></td></tr>
        <tr><td align="left" height="1px" bgcolor="#bbbf21" colspan="2"></td></tr>
        <tr><td align="left" height="3px" colspan="2"></td></tr>
        <tr>
            <td align="left" valign="top" colspan="2">
				<script language="javascript" type="text/javascript">
					 var carousel_2;
					function carousel_2_initCallback(carousel) {
							carousel.selected=1
						jQuery('.carousel_2_control a').bind('click', function() {
							carousel.startAuto(0);
							carousel.scroll( this.className);
							return false; 
						});
						jQuery('#box_carousel_next').bind('click', function() {
							carousel.next();
							carousel.startAuto(0);
							return false;
						});
						jQuery('#box_carousel_prev').bind('click', function() {
							carousel.prev();
							carousel.startAuto(0);
							return false;
						});
						carousel.clip.hover(function() {
							carousel.stopAuto();
						}, function() {
							carousel.startAuto();
						});
					};
					function carousel_2_beforeAnimation(carousel,element,i,status){
							$('#carousel_2_slide_'+carousel.selected).attr("src","img/slide_off.gif");    
						var idx = carousel.index(i, carousel.options.size);
							carousel.add(i,carousel.get(idx).html())
						}
					function carousel_2_afterAnimation(carousel,element,index,status){
						var idx = carousel.index(index, carousel.options.size);
							carousel.selected=idx
							$('#carousel_2_slide_'+idx).attr("src","img/slide_on.gif");
							}
					function carousel_2_itemVisibleOutCallback(carousel, item, i, state, evt){
						if (i>carousel.options.size || i<0){
							carousel.remove(i);
							}
						carousel.startAuto();
							};
					jQuery(document).ready(function() {
						jQuery("#carousel_2").jcarousel({
							scroll: 1,
							auto: 1,
							wrap: 'circular',
							initCallback: carousel_2_initCallback,
							buttonNextHTML: null,
							buttonPrevHTML: null,
							itemVisibleInCallback: {
										onBeforeAnimation: carousel_2_beforeAnimation,
										onAfterAnimation: carousel_2_afterAnimation
											},
									itemVisibleOutCallback:carousel_2_itemVisibleOutCallback
						});
					});
				</script>
				<ul id="carousel_2">
                    <li><img src="gallery/1.jpg" height="120" width="240" /></li>
					<li><img src="gallery/2.jpg" height="120" width="240" /></li>
					<li><img src="gallery/3.jpg" height="120" width="240" /></li>
					<li><img src="gallery/4.jpg" height="120" width="240" /></li>
					<li><img src="gallery/5.jpg" height="120" width="240" /></li>
					<li><img src="gallery/6.jpg" height="120" width="240" /></li>
					<li><img src="gallery/7.jpg" height="120" width="240" /></li>
					<li><img src="gallery/8.jpg" height="120" width="240" /></li>
					<li><img src="gallery/9.jpg" height="120" width="240" /></li>
					<li><img src="gallery/10.jpg" height="120" width="240" /></li>
					<li><img src="gallery/11.jpg" height="120" width="240" /></li>
					<li><img src="gallery/12.jpg" height="120" width="240" /></li>
					<li><img src="gallery/13.jpg" height="120" width="240" /></li>
					<li><img src="gallery/14.jpg" height="120" width="240" /></li>
					<li><img src="gallery/15.jpg" height="120" width="240" /></li>
					<li><img src="gallery/16.jpg" height="120" width="240" /></li>
				</ul>
            </td>
        </tr>
    </table>
    <table height="40px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table> 
    <table class="table-rc-sponsors" border="0" cellpadding="0" cellpadding="0">
        <tr><td class="rc-widget-headers" align="left" valign="bottom">Sponsors &amp; Partners</td><td class="rc-widget-headers" align="right" valign="bottom"></td></tr>
        <tr><td align="left" height="1px" bgcolor="#bbbf21" colspan="2"></td></tr>
        <tr><td align="left" height="3px" colspan="2"></td></tr>
        <tr>
            <td align="left" valign="top" colspan="2">
                    <script language="javascript" type="text/javascript">
                         var carousel_1;
                        function carousel_1_initCallback(carousel) {
                                carousel.selected=1
                            jQuery('.carousel_1_control a').bind('click', function() {
                                carousel.startAuto(0);
                                carousel.scroll( this.className);
                                return false; 
                            });
                            jQuery('#box_carousel_next').bind('click', function() {
                                carousel.next();
                                carousel.startAuto(0);
                                return false;
                            });
                            jQuery('#box_carousel_prev').bind('click', function() {
                                carousel.prev();
                                carousel.startAuto(0);
                                return false;
                            });
                            carousel.clip.hover(function() {
                                carousel.stopAuto();
                            }, function() {
                                carousel.startAuto();
                            });
                        };
                        function carousel_1_beforeAnimation(carousel,element,i,status){
                                $('#carousel_1_slide_'+carousel.selected).attr("src","img/slide_off.gif");    
                            var idx = carousel.index(i, carousel.options.size);
                                carousel.add(i,carousel.get(idx).html())
                            }
                        function carousel_1_afterAnimation(carousel,element,index,status){
                            var idx = carousel.index(index, carousel.options.size);
                                carousel.selected=idx
                                $('#carousel_1_slide_'+idx).attr("src","img/slide_on.gif");
                                }
                        function carousel_1_itemVisibleOutCallback(carousel, item, i, state, evt){
                            if (i>carousel.options.size || i<0){
                                carousel.remove(i);
                                }
                            carousel.startAuto();
                                };
                        jQuery(document).ready(function() {
                            jQuery("#carousel_1").jcarousel({
                                scroll: 1,
                                auto: 1,
                                wrap: 'circular',
                                initCallback: carousel_1_initCallback,
                                buttonNextHTML: null,
                                buttonPrevHTML: null,
                                itemVisibleInCallback: {
                                            onBeforeAnimation: carousel_1_beforeAnimation,
                                            onAfterAnimation: carousel_1_afterAnimation
                                                },
                                        itemVisibleOutCallback:carousel_1_itemVisibleOutCallback
                            });
                        });
                    </script>
                    <ul id="carousel_1">
                        <li><img src="sponsors/innobuzz.jpg" height="120" width="240" border="0" /></li>
                        <li><img src="sponsors/technophilia.jpg" height="120" width="240" border="0" /></li>
                        <li><img src="sponsors/robosapiensindia.jpg" height="120" width="240" border="0" /></li>
                        <li><img src="sponsors/autonex.jpg" height="120" width="240" border="0" /></li>
                        <li><img src="sponsors/radiomisty.jpg" height="120" width="240" border="0" /></li>
                    </ul>
            </td>
        </tr>
    </table>
    <table height="40px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table> 
    <table class="table-rc-tagcloud" border="0" cellpadding="0" cellpadding="0">
        <tr><td class="rc-widget-headers" align="left" valign="bottom">Quick Links</td></tr>
        <tr><td align="left" height="1px" bgcolor="#bbbf21"></td></tr>
        <tr><td align="left" height="3px"></td></tr>
        <tr>
            <td align="left" valign="top">
                <div id="wpcumuluswidgetcontent"><p style="display:none;">Requires Adobe Flash Player 9 or better.</p></div>
                <script type="text/javascript">
                var rnumber = Math.floor(Math.random()*9999999);
                var widget_so = new SWFObject("scripts/tagcloud/tagcloud.swf?r="+rnumber, "tagcloudflash", "240", "240", "9", "#ffffff");
                widget_so.addParam("wmode", "transparent");
                widget_so.addParam("allowScriptAccess", "always");
                widget_so.addVariable("tcolor", "0x333333");
                widget_so.addVariable("tcolor2", "0x333333");
                widget_so.addVariable("hicolor", "0x000000");
                widget_so.addVariable("tspeed", "250");
                widget_so.addVariable("distr", "true");
                widget_so.addVariable("mode", "tags");
                widget_so.addVariable("tagcloud", "<tags><a href='tf-home.php' style='font-size: 8.60869565217pt;'>Home</a>%0A<a href='tf-forum.php' style='font-size: 8pt;'>Forum</a>%0A<a href='tf-updates.php' style='font-size: 8pt;'>Updates</a>%0A<a href='tf-initiatives.php' style='font-size: 8pt;'>Initiatives</a>%0A<a href='tf-lectures.php' style='font-size: 9.21739130435pt;'>Guest Lectures</a>%0A<a href='tf-workshops.php' style='font-size: 8pt;'>Workshops</a>%0A<a href='tf-hospitality.php' style='font-size: 8pt;'>Hospitality</a>%0A<a href='tf-events.php' style='font-size: 22pt;'>Events</a>%0A<a href='tf-contact-us.php' style='font-size: 8pt;'>Contact Us</a>%0A<a href='tf-events.php?p=pcknplc' style='font-size: 8pt;'>Loco Motion</a>%0A<a href='tf-events.php?p=saveaqua' style='font-size: 8.60869565217pt;'>SaveAqua</a>%0A<a href='tf-events.php?p=robosoccer' style='font-size: 8pt;'>RoboSoccer</a>%0A<a href='tf-events.php?p=codndbug' style='font-size: 9.21739130435pt;'>Coding and Debugging</a>%0A<a href='tf-events.php?p=bplan' style='font-size: 8pt;'>Business Plan</a>%0A<a href='tf-events.php?p=innovation' style='font-size: 8pt;'>Innovation</a>%0A<a href='tf-cfi.php' style='font-size: 8pt;'>CFI</a>%0A<a href='tf-events.php?p=gaming' style='font-size: 8pt;'>Gaming</a>%0A<a target='_blank' href='http://www.jgec.org/' style='font-size: 8.60869565217pt;'>College Website</a></tags>");
                widget_so.write("wpcumuluswidgetcontent");
                </script>
            </td>
        </tr>
    </table>
    <table height="15px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table>
        <table class="table-rc-north-bengal" border="0" cellpadding="0" cellpadding="0">
        <tr><td class="rc-widget-headers" align="left" valign="bottom" style="color: #900b09">Come <strong style="font-size: 10pt">X</strong>perience North Bengal</td><td class="rc-widget-headers" align="right" valign="bottom"></td></tr>
        <tr><td align="left" height="1px" bgcolor="#bbbf21" colspan="2"></td></tr>
        <tr><td align="left" height="3px" colspan="2"></td></tr>
        <tr>
            <td align="left" valign="top" colspan="2">
                    <script language="javascript" type="text/javascript">
                         var carousel_3;
                        function carousel_3_initCallback(carousel) {
                                carousel.selected=1
                            jQuery('.carousel_3_control a').bind('click', function() {
                                carousel.startAuto(0);
                                carousel.scroll( this.className);
                                return false; 
                            });
                            jQuery('#box_carousel_next').bind('click', function() {
                                carousel.next();
                                carousel.startAuto(0);
                                return false;
                            });
                            jQuery('#box_carousel_prev').bind('click', function() {
                                carousel.prev();
                                carousel.startAuto(0);
                                return false;
                            });
                            carousel.clip.hover(function() {
                                carousel.stopAuto();
                            }, function() {
                                carousel.startAuto();
                            });
                        };
                        function carousel_3_beforeAnimation(carousel,element,i,status){
                                $('#carousel_3_slide_'+carousel.selected).attr("src","img/slide_off.gif");    
                            var idx = carousel.index(i, carousel.options.size);
                                carousel.add(i,carousel.get(idx).html())
                            }
                        function carousel_3_afterAnimation(carousel,element,index,status){
                            var idx = carousel.index(index, carousel.options.size);
                                carousel.selected=idx
                                $('#carousel_3_slide_'+idx).attr("src","img/slide_on.gif");
                                }
                        function carousel_3_itemVisibleOutCallback(carousel, item, i, state, evt){
                            if (i>carousel.options.size || i<0){
                                carousel.remove(i);
                                }
                            carousel.startAuto();
                                };
                        jQuery(document).ready(function() {
                            jQuery("#carousel_3").jcarousel({
                                scroll: 1,
                                auto: 1,
                                wrap: 'circular',
                                initCallback: carousel_3_initCallback,
                                buttonNextHTML: null,
                                buttonPrevHTML: null,
                                itemVisibleInCallback: {
                                            onBeforeAnimation: carousel_3_beforeAnimation,
                                            onAfterAnimation: carousel_3_afterAnimation
                                                },
                                        itemVisibleOutCallback:carousel_3_itemVisibleOutCallback
                            });
                        });
                    </script>
                    <ul id="carousel_3">
                        <li><img src="gallery/17.jpg" height="120" width="240" /></li>
                        <li><img src="gallery/18.jpg" height="120" width="240" /></li>
                        <li><img src="gallery/19.jpg" height="120" width="240" /></li>
                        <li><img src="gallery/20.gif" height="120" width="240" /></li>
                        <li><img src="gallery/21.jpg" height="120" width="240" /></li>
                        <li><img src="gallery/22.jpg" height="120" width="240" /></li>
                        <li><img src="gallery/23.jpg" height="120" width="240" /></li>
                        <li><img src="gallery/24.jpg" height="120" width="240" /></li>
                    </ul>
            </td>
        </tr>
    </table>
    <table height="40px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table> 
    <table class="table-rc-follow-us" border="0" cellpadding="0" cellpadding="0">
        <tr><td class="rc-widget-headers" align="left" valign="bottom">Follow us on</td></tr>
        <tr><td align="left" height="1px" bgcolor="#bbbf21"></td></tr>
        <tr><td align="left" height="3px"></td></tr>
        <tr>
            <td align="left" valign="top">
                <a target="_blank" href="http://www.facebook.com/group.php?gid=138557892832875"><img src="style/follow-us-facebook.png" height="32" width="32" border="0" /></a>
                <a target="_blank" href="http://twitter.com/sristi2010jgec"><img src="style/follow-us-twitter.png" height="31" width="32" border="0" /></a>
                <a target="_blank" href="http://www.orkut.co.in/Main#Community?cmm=104305897"><img src="style/follow-us-orkut.png" height="32" width="32" border="0" /></a>
                <a target="_blank" href="tf-rss.php"><img src="style/follow-us-rss.png" height="32" width="32" border="0" /></a>
            </td>
        </tr>
    </table>
    <table height="40px" border="0" cellpadding="0" cellpadding="0"><tr><td></td></tr></table> 
</td>
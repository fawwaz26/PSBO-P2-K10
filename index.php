<?php require("header.php");

?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

                <div class="art-contentLayout">
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
`                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Selamat Datang di IPB Menfess</span>
                            </h2>
                            <div class="art-PostContent">


<p align="justify">Tempat dimana kamu bisa bertanya dan menulis keluh kesah mengenai akademik, kebijakan rektorat, kehidupan kampus, maupun pertanyaan receh disaat kamu gabut.</p>

<p align="justify"><b>IPB Menfess</b> terbuka bagi seluruh civitas akademika IPB.</p>

<p align="justify">Enjoy!</p>


                            </div>
                            <div class="cleared"></div>
                        </div>

                            </div>
                        </div>
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Bagaimana cara bertanya atau menulis keluh kesah?</span>
                            </h2>
                            <div class="art-PostContent">



                                  <p align="justify">1. Lakukan pendaftaran jika kalian belum memiliki akun, jika sudah memiliki akun langsung login ke dalam akun.</p>
                                  <p align="justify">2. Pilih topik dan subtopik sesuai keinginan kalian.</p>
                                  <p align="justify">3. Klik "Ask question", tulis pertanyaan atau keluh kesah kalian.</p>
                                  <p align="justify">4. Selamat pertanyaan atau keluh kesah kalian telah berhasil terposting secara anonim.</p>


                                	<p>
                                		<span class="art-button-wrapper">
                                			<span class="l"> </span>
                                			<span class="r"> </span>
                                			<a class="art-button" href="register.php">Join&nbsp;Now!</a>
                                		</span>
                                	</p>



                            </div>

                        </div>

                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Log In</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div>


                                        <script type="text/javascript">
										function check(f)
										{
											if(f.uid.value=="")
											{
												document.getElementById("spuid").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.uid.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("a").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;

													}

												else
												return true;
											}


										</script>
                                        <form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>User Id:</td></tr><tr><td><input type="text" name="uid" style="width:140px;"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Password:</td></tr><tr><td><input type="password" name="pwd" style="width:140px;"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td><input type="submit" value="login"><input type="reset" value="cancel"></td></tr>
<tr><td><a href="register.php"><input type="button" value="Sign Up"></a></td></tr>
</table>

<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";

?>

</form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php require("footer.php")?>

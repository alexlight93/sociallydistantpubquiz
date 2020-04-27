<!DOCTYPE html>
<html>
    <head>
      <title>How to Play</title>
      <?php include("htmlheader.php"); ?>
    </head>
    <body>
        <div class="container">
           <?php include("header.php") ; ?>
                
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#howtoplay" aria-controls="howtoplay" role="tab" data-toggle="tab">How to Play</a></li>
                <li role="presentation"><a href="#who" aria-controls="who" role="tab" data-toggle="tab">Who? Why? How?</a></li>
                <li role="presentation"><a href="#privacy" aria-controls="privacy" role="tab" data-toggle="tab">Data &amp; Privacy</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="howtoplay">
                    <p class="lead">We run quizzes every Friday night (with some special ones!). Follow us on Twitter (@PubQuizStreams) so you don't miss one. The questions are asked by a live quizmaster and unlike most online quizzes… we mark all your answers.</p>

                    <div class="panel-group" id="accordion_howtoplay" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Register">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion_howtoplay" href="#coll_Register" aria-expanded="true" aria-controls="coll_Register">
                              <h4>How To Register</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Register" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hd_Register">
                          <div class="panel-body">
                            <p class="lead">We open registration a few days before the quiz, giving you time to get a team together.</p>
                            <ol>
                                <li>
                                    Go to SociallyDistant.pub and click <button class="btn btn-default" href="newteam.php">Register your team</button>
                                </li>

TODO:                                Image: mobile/desktop, show-hide with width.

                                <li>
                                    Tell us your <strong>Team Name</strong> as well as an <strong>email address</strong> and the names of the <strong>people in your team</strong>.<br>
                                    <span class="small text-muted">It’s not a rule, but we recommend that teams are kept to 4 people at most. More than this many people, and it starts to get a bit messy on video calls.</span>
                                </li>
                                <li>
                                    You'll need to provide a <strong>Team Secret</strong>. This will mean nobody else can submit your answers. You should share this with your teammates.<br>
                                    <span class="small text-muted">If you're silly enough to forget this, don’t worry, just email <a href="mailto:hello@sociallydistant.pub">hello@sociallydistant.pub</a> and we can help you out.</span>
                                </li>
                            
                            <strong>That’s it!</strong> Your team will appear on the front page, and we’ll email you before the quiz starts with any further details!

                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Broken">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_howtoplay" href="#coll_Broken" aria-expanded="false" aria-controls="coll_Broken">
                              <h4>It's broken!</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Broken" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Broken">
                          <div class="panel-body">
                            <p class="lead">Oh... shit... sorry about that</p>
                            <p>Drop us a tweet (<a href="https://twitter.com/PubQuizStreams">@PubQuizStreams</a>) or email us at <a href="mailto:hello@sociallydistant.pub">hello@sociallydistant.pub</a>.</p> 
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Answers">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_howtoplay" href="#coll_Answers" aria-expanded="false" aria-controls="coll_Answers">
                              <h4>How do I send in my answers?</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Answers" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Answers">
                          <div class="panel-body">
                            <p class="lead">In a real pub, you’d be handed a pen and answer sheet. We hand out answer sheets too, but ours are fancy internet ones, not dead trees.</p>
                            <p><strong><u>When the quiz begins, the answer sheet will appear on the front page at <a href="index.php">www.sociallydistant.pub</a></u></strong></p>
                            <p>
                                <ul>
                                    <li>
                                        <strong>Fill in your answers in the boxes.</strong> There’ll be one for each answer. Don’t leave any blank (take a guess if you don’t know).<br>
                                        <span class="small text-muted">Sometimes we'll put hints on the answer sheet, especially during picture or music rounds.</span>
                                    </li>
                                    <li>
                                        <strong>Sometimes</strong>, you’ll need to pick your team name, and enter your team secret. After you've done this once, we’ll remember who you are.
                                    </li>
                                    <li>
                                        <strong>Hit Submit</strong>. We'll show you your answers, just to confirm that we got them.
                                    </li>
                                </ul>
                            </p>
                            <p><em>On the answer sheet, we only let you send in letters, numbers and spaces. None of our answers will require symbols or emojis!</em></p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Leaderboard">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_howtoplay" href="#coll_Leaderboard" aria-expanded="false" aria-controls="coll_Leaderboard">
                              <h4>Leaderboards. It's not just the taking part...</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Leaderboard" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Leaderboard">
                          <div class="panel-body">
                            <p class="lead">What’s the point of playing if you’re not here for glory?</p>
                            <p>As well as playing against everyone else, you’re also here to beat friends and family. You can view the leaderboard by clicking on <a href="leaderboard.php">Leaderboard</a>.</p>
                            <p><strong><u>The Main Leaderboard</u></strong></p>
                            <p>Our main leaderboard covers everyone in the team. You can see it by clicking on Leaderboard after the first round is marked. </p>
                            <p>We’ll update the table, showing how each team gets on in, as we mark each round.</p>

                            <p><strong><u>Build Your Own Leaderboard</u></strong></p>
                            <p>Play against loved ones, friends, or colleagues for bragging rights. </p>
                            <p>
                                <ul>
                                    <li>Once your team is logged into the quiz, you can pick teams from the main leaderboard. Hit “Add to My League”, and these will appear on the second tab.</li>
                                    <li>You can remove players in the same way as you added them<br>
                                        <span class="small text-muted">Don't worry, you can always add them back</span>
                                    </li>
                                </ul>
                            </p>
                            <p>Nobody can see who’s in your league, it’s completely private within your team.</p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Report">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_howtoplay" href="#coll_Report" aria-expanded="false" aria-controls="coll_Report">
                              <h4>Your Answers - How Did We Do?</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Report">
                          <div class="panel-body">
                            <p>After each round is marked, you can go to <a href="your_answers.php">Your Answers</a> to see how we marked you for each question. If you don’t agree, you’re more than welcome to whine to us <a href="https://twitter.com/PubQuizStreams">on twitter</a>.</p>
 TODO:                           IMAGE
                            <p>You can compare yourself to other teams. We show you what proportion of teams got it right this time round.</p>
                            <p>We’ll always show you the correct answer, and sometimes some witty (tooltip: well, we think so anyway) extra information. </p>

                          </div>
                        </div>
                      </div>
                    </div>


                </div> <!-- End of "How to play" tab content -->

                <div role="tabpanel" class="tab-pane" id="who"><p class="lead">Pub Quiz Streams started as a throwaway tweet (LINK), but quickly exploded into a popular weekly quiz played by thousands of players.</p>


                    <div class="panel-group" id="accordion_about" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Blokes">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion_about" href="#coll_Blokes" aria-expanded="true" aria-controls="coll_Blokes">
                              <h4>Who Are Those Blokes in the hideous shirts?</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Blokes" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hd_Blokes">
                          <div class="panel-body">
                            WHO ARE THOSE BLOKES

                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Why">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_about" href="#coll_Why" aria-expanded="false" aria-controls="coll_Why">
                              <h4>Why?</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Why" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Why">
                          <div class="panel-body">
                            Why?
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Raffle">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_about" href="#coll_Raffle" aria-expanded="false" aria-controls="coll_Raffle">
                              <h4>What's this about a Raffle?</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="col_Raffle" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Raffle">
                          <div class="panel-body">
                            <p class="lead">Raffle</p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_How">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_about" href="#coll_How" aria-expanded="false" aria-controls="coll_How">
                              <h4>How does this all work?</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_How" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_How">
                          <div class="panel-body">
                            <p><em>This bit is really for the nerds, if you think you can help out, then please get in touch (link, tw, dave).</em></p>
                            <ul>
                                <li>We use Open Broadcast Software (link) for our live streams.</li>
                                <li>Most of the code (PHP, MySQL) for this site is <a href="https://github.com/davidharrison92">handwritten by David Harrison</a></li>
                                <li>We use Amazon Web Services (AWS) for the hosting of the site.
                                    <ul>
                                        <li>Front End Servers are Elastic Cloud Compute (EC2) Ubuntu and NGINX</li>
                                        <li>HTTPS / SSL is courtesy of <a href="https://letsencrypt.org/">LetsEncrypt</a></li>
                                        <li>Data is stored using Relational Database Service (RDS)</li>
                                    </ul>
                                </li>
                                <li>The code is open source, view it on GitHub here. (link)</li>
                            <ul>
                            <p><strong>Our sincere thanks go to:</strong></p>
                            <ul>
                            <li><strong><a href="https://twitter.com/volgriff">Mark Christian</a></strong> created the magnificent <a href="thepanickedshopper.jpg">Pub Sign image</a>.</li>
                            <li>Website style and layout by <a href="https://getbootstrap.com/docs/3.3/">Bootstrap</a>, used under license <a href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</li>
                            <li><strong>George Walker</strong>, <strong>Gary Christian</strong>, <strong>Luke Ferris</strong>, and <strong>Alex Sim</strong> for their advice and support with website development.</li>
                          </div>
                        </div>
                      </div>
                    </div>

                </div><!-- End of "Who/What/Why" tab content -->
                <div role="tabpanel" class="tab-pane" id="privacy">
                    <p class="lead">We respect your privacy, and comply willingly with best practice and EU regulations around this. We collect on the data we need to help deliver the UK’s best online pub quiz.</p>

                    <div class="panel-group" id="accordion_privacy" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_YourData">
                          <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion_privacy" href="#coll_YourData" aria-expanded="true" aria-controls="coll_YourData">
                              <h4>Your Data</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_YourData" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hd_YourData">
                          <div class="panel-body">
                                                 
                            <p>We collect only data that you provide to us:</p>
                            <ul>
                                <li>Your email address</li>
                                <li>The names of players in your team</li>
                                <li>The answers that you provide to us</li>
                            </ul>
                           
                            <p>We may use your (often hilarious) team names and answers for promotional purposes (such as tweeting entertaining answers). We will never publish your email address or any personally identifiable information.</p>

                            <p>Please note: if you make a purchase through our store, we will need to collect additional information. Please refer to the <a href="https://sociallydistant.pub/store/?page_id=3">separate privacy policy</a>.</p>

                            <p>This data is stored securely and accessible only to David Harrison and Alex Light. <strong>We never share or sell your data</strong>.</p>


                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Analytics">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_privacy" href="#coll_Analytics" aria-expanded="false" aria-controls="coll_Analytics">
                              <h4>Site Analytics</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Analytics" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Analytics">
                          <div class="panel-body">
                            <p>We use <strong>Google Analytics</strong> to monitor how our website is used, and how it performs, so that we can continue to improve.</p>
                            <p><strong>We do not allow Google to use this information for remarketing, or cross site tracking.</strong> This data is retained for a maximum of 14 months. Please refer to the Google Analytics <a href="https://policies.google.com/privacy?hl=en" target="_blank">privacy policy</a>.</p>

                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_Contact">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_privacy" href="#coll_Contact" aria-expanded="false" aria-controls="coll_Contact">
                              <h4>Contact Preferences</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_Contact" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_Contact">
                          <div class="panel-body">
                            <p class="lead">Where you give explicit consent, we will add you to our promotional mailing list. We use this to keep you up to date with news about, and upcoming events for, our quizzes.</p>
                            <p>All emails include an unsubscribe link. </p>
                            <p>We use MailChimp to manage this.</p>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="hd_GDPR">
                          <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_privacy" href="#coll_GDPR" aria-expanded="false" aria-controls="coll_GDPR">
                              <h4>Your Rights</h4>
                            </a>
                          </h4>
                        </div>
                        <div id="coll_GDPR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hd_GDPR">
                          <div class="panel-body">
                           <p>We comply with the EU’s General Data Protection Regulation (GDPR). You have the following rights over your data:</p>
                            <ul>
                                <li><strong>Access</strong> - you can request a copy of your data in a portable format (Subject Access Request)</li>
                                <li><strong>Change</strong> - you can request that we correct any data we store</li>
                                <li><strong>Deletion</strong> - you can instruct us to delete any data that we hold about you.</li>
                            </ul>
                            <p>To do any of the following, please email <a href="mailto:hello@sociallydistant.pub">hello@sociallydistant.pub</a> and mention “Data Privacy” in the subject. We will complete any requests within 30 days. </p>

                          </div>
                        </div>
                      </div>
                    </div>


                </div>
              </div>
                <!-- Tabs JS -->
                <script> 
                    $('#myTabs a').click(function (e) {
                      e.preventDefault()
                      $(this).tab('show')
                    })
                </script>



        </div><!--/container-->
    </body>
</html>
<?php 
ob_start();
 session_start();
 // $_SESSION['username'];
 ?>
<?php include_once "include_once/header.php";?>
<?php include_once "include_once/top_nav.php";?>
<?php include_once "include_once/slider.php";?>
<?php include_once "include_once/search.php";?>
<?php include_once "include/db.php"; ?>
<?php include_once "include/post.php";?>
<?php include_once "include/function.php";?>



                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                        <div class="widget widget_related_search open" data-accordion>
                                            <h4 class="widget-title" data-control>Related Searches</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h4 class="" data-control>Categories <span class="caret"></span></h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li>
                                                                <a href="book_love.php">Love stories 
                                                                 <span>(<?php echo love_count();?>) 
                                                                 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="book_translate.php">Translate
                                                                  <span>(<?php echo translate_count();?>)
                                                                 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="book_history.php">History 
                                                                    <span>(<?php echo history_count(); ?>)
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            
                                                            <li>
                                                               <a href="book_technology.php">Technology
                                                                <span>(<?php technology_count(); ?>)
                                                                </span>
                                                               </a>
                                                           </li>

                                                            <li>
                                                                <a href="book_knowledge.php">Knowledge 
                                                                    <span>(<?php echo knowledge_count(); ?>)
                                                                    </span>
                                                                </a>
                                                            </li>

                                                             <li>
                                                                <a href="book_hartha.php">Har Tha 
                                                                    <span>(<?php echo hartha_count(); ?>)
                                                                    </span>
                                                                </a>
                                                            </li>
                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <div data-accordion>
                                                    <h4 class="" data-control>Authors <span class="caret"></span></h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <li>
                                                                <a href="book_laltwinthrsawchit.php">Lal Twin Thr Saw Chit
                                                                 <span>
                                                                    (<?php echo lal_count();?>)
                                                                 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="book_phaymyint.php">Phay Myint
                                                                 <span>
                                                                    (<?php echo phaymyint_count();?>)
                                                                 </span>
                                                                </a>
                                                            </li>

                                                             <li>
                                                                <a href="book_myathantint.php">Mya Than Tint
                                                                 <span>
                                                                    (<?php echo myathantint_count();?>)
                                                                 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="book_thoesaung.php">Thoe Saung
                                                                  <span>(<?php echo thoesaung_count();?>)
                                                                 </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="book_juu.php">Juu 
                                                                    <span>(<?php echo juu_count(); ?>)
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="book_khinkhinhtoo.php">Khin Khin Htoo
                                                                  <span>(<?php echo khinhtoo_count(); ?>)
                                                                    </span>
                                                                </a>
                                                           </li>
                                                            <li>
                                                               <a href="book_lynntheiknyunt.php">Lynn Theik Nyunt
                                                                <span>(<?php echo lynntheiknyunt_count(); ?>)
                                                                </span>
                                                               </a>
                                                           </li>
                                                            <li>
                                                               <a href="book_moemoe.php">Moe Moe(Inyar)
                                                                <span>(<?php echo moemoe_count(); ?>)
                                                                </span>
                                                               </a>
                                                           </li>
                                                          
                                                          
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                               
                                            </div>
                                          <div class="clearfix"></div>
                                      
                                        </div>                                       
                                    </aside>
                                </div>
                            </div>
                        </div>                      
        </div> 
    <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Check Out The New Releases</h2>
                            <span class="underline center"></span>
                        </div>
                    </div>
                </div>
                <div class="filter-buttons">

                    <div class="filter btn"><a href='index2.php?source=<?php echo 'release'?>' name="release">All Releases</a></div>
                    <div class="filter btn"><a href='index2.php?source=<?php echo 'love'?>'>love stories</a></div>
                    <div class="filter btn"><a href='index2.php?source=<?php echo 'history'?>'>History</a></div>
                    <div class="filter btn"><a href='index2.php?source=<?php echo 'science'?>'>Science</a></div>
                    <div class="filter btn"><a href='index2.php?source=<?php echo 'technology'?>'>Technology</a></div>
                    
                </div>
            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <?php
                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                            switch ($source) {

                                    case 'love':
                                    include_once "include/love.php";
                                        break;

                                    case 'history':
                                    include_once "include/history.php";
                                        break;

                                    case 'science':
                                    include_once "include/science.php";
                                        break;

                                    case 'technology':
                                    include_once "include/technology.php";
                                        break;
                                    default:
                                    include_once "include/release.php";
                                    break;
                            }

                        }else
                        {
                            include_once "include/release.php";
                        }
                    ?></ul>
                         <div class="clearfix"></div>
    </div>
    </section>

<?php include_once "include_once/note.php"?>   
<?php include_once "include_once/social.php"?>      
<?php include_once "include_once/footer.php"?>
                   
<?php // Atlantis - Admin Menu

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}

function atlantis_display_dashboard_page() {
	
	?>
	
	

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<title>Atlantis 2-5</title>
		<meta name="description" content="Interactive Multimedia Leaarning Management System (LMS) intended to improve your decision making. Making tbis a Decision Management System (DMS) rather than a LMS."/>		
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">	
        <script src="https://kit.fontawesome.com/d57613f455.js" crossorigin="anonymous"></script>		
		
</head>  

<HTML>
<body>



<div class="outer-wrap">

<!-- <main class="container">
      <article class="content">
        <figure class="image">
          <img
            src="http://localhost:10219/wp-content/uploads/2023/02/Sender-is-Responsible-for-Effective-Communication.jpg"
            alt="Photo by Joseph Gonzalez"
            width="3569"
            height="5354"
            loading="lazy"
          />
        </figure>
        <figure class="image">
          <img
            src="https://source.unsplash.com/VoBY0tQo52E/1800x1200"
            alt="Photo by EDDIE DEAN"
            width="5184"
            height="3456"
            loading="lazy"
          />
        </figure>
        <figure class="image">
          <img
            src="https://source.unsplash.com/Y7TEMCKRIgI/1197x1800"
            alt="Photo by Karabo Mdluli"
            width="4000"
            height="6016"
            loading="lazy"
          />
        </figure>
        <figure class="image">
          <img
            src="https://source.unsplash.com/9t691X-ZcA0/1197x1800"
            alt="Photo by Jeffery Erhunse"
            width="4024"
            height="6048"
            loading="lazy"
          />
        </figure>
      </article>
</main> -->




<!-- <main class="old-content">
        <section class="content-card">
        
                <img class="results-image" src="http://localhost:10219/wp-content/uploads/2023/02/Sender-is-Responsible-for-Effective-Communication.jpg" loading="lazy">


            <div class="card-meta">
            <a href="" >  <h2>The Banana Bird</h2>
                    
                    
                    <h3>meta</h3> </a>
            

         
                <p><span>The Bananxxxa Bird</span><br>                   This banana looks a lot like a bird, doesn't it? When originally posted there was some debate whether it was a hummingbird, a seagull, or a crow. I stand by my earlier statement that it is a banana.</p>   
    </div>

                <section class="card-topics">
                        <p>helllo</p>
                        <p>goodby</p>
                        <p>maybe</p>
                </section>

                <section class="card-questions">
                    <p>helllo</p>
                    <p>goodby</p>
                    <p>maybe</p>
                </section>
            </section>
            <section class="content-card">
            
            <img class="results-image" src="http://localhost:10209/wp-content/uploads/2023/02/ALC-Logo-3.jpg" loading="lazy">


        <div class="card-meta">
        <a href="" >  <h2>The Banana Bird</h2>
                
                
                <h3>meta</h3> </a>
    

    
            <span>The Banayyyya Bird</span><br>
                <p>This banana looks a lot like a bird, doesn't it? When originally posted there was some debate whether it was a hummingbird, a seagull, or a crow. I stand by my earlier statement that it is a banana.</p>   
    </div>

        <section class="card-topics">
                <p>helllo</p>
                <p>goodby</p>
                <p>maybe</p>
        </section>

        <section class="card-questions">
            <p>helllo</p>
            <p>goodby</p>
            <p>maybe</p>
        </section>
    </section>
</main> -->
           
              
            


    <header class="masthead">
        <?php
            $current_user = wp_get_current_user();
                $name = esc_html( $current_user->display_name);
                $user_id = ($current_user->id);
                $user_login = ($current_user->user_login);
                $user_level = ($current_user->user_level);
        ?>
            <div class="site-title">
                <!-- <span class="trademark"><img src="http://localhost:10209/wp-content/uploads/2023/02/Atlantis-Logo.png"></span>  -->
                <h2>@lantis®</h2>
                <br>Learning Dashboard for  - <span class="user-name"><?php echo $name ?></span></div>  
            
            <div class="current-time"></div> <br>  

            <section class="loading-container">
                <div class="loading loading--full-height"></div>          
                <div class="error"></div>
            </section> <!-- loading-container -->
    </header><!-- masthead -->

  

    <section class="top-menu">
            
            <div class="centered">
                
                <div class="menu-section"> 
                    <nav id="main-nav" class="main-nav menu" role="navigation">
                        <ul>
                            <li class="profile-button">
                                <a href="#">
                                    <div class="icon">
                                    <i class="fa-solid fa-filter"></i>
                                    </div>
                                    <div class="button-text">
                                        "Feed" Profile
                                        <span>Determines Information "Pushed" to You</span>
                                    </div>
                                </a>
                            </li>
                            <li class="library-button">
                                <a href="#">
                                    <div class="icon">
                                    <i class="fa-solid fa-database"></i>
                                    </div>
                                    <div class="button-text">
                                    Library/Cloud
                                        <span>Information You "Pull"</span>
                                    </div>
                                </a>
                            </li>
                            <li class="settings-button">
                                <a href="#">
                                    <div class="icon">
                                    <i class="fa-solid fa-gear"></i>
                                    </div>
                                    <div class="button-text">
                                        Settings
                                        
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> 
    
    </section> 
   
 


    <div class="feed-filter">
            <form class="feed-filter-form">
                    <h3 class="feed-filter-conformationBias">Confirmation Bias Adustments</h3>
                    <span class="feed-filter-labels" >
                    <input class="feed-filter-labels" type="radio" name="learning-conformation" value="confirms" id="info-confirms"><label for="supports-learning">Learning that supports my beliefs. <br>  <br>             
                    <input class="feed-filter-labels" type="radio" name="learning-conformation" value="disputs" id="info-disputs"><label for="disputs-learning">Learning that disputs my beliefs. <br>  <br>  <hr></span>
                    <h3 class="feed-filter-selectivePerception ">Selective Perception Adustments</h3>
                    <span class="feed-filter-labels" >
                    <input class="feed-filter-labels" type="radio" name="selective-perception" value="confirms" id="source-confirms"><label for="source-supports">Learning from Sources that support my beliefs. <br>  <br>             
                    <input class="feed-filter-labels" type="radio" name="selective-perception" value="disputs" id="source-disputs"><label for="source-disputs">Learning from Soures that disput my beliefs. <br>  <br> <hr> </span>
                    <h3 class="feed-filter-perspective ">Perspective Adustments</h3>
                    <span class="feed-filter-labels" >
                    <input class="feed-filter-labels" type="radio" name="perspectives" value="confirms" id="prespective-confirms"><label for="perspective-supports">Learning from Prespectives that support my beliefs. <br>  <br>             
                    <input class="feed-filter-labels" type="radio" name="perspectives" value="disputs" id="perspective-disputs"><label for="perspective-disputs">Learning from Perspectives that disput my beliefs. <br>  <br>  </span>
            </form>                
    </div><!-- feed-filter -->




    <div class="learning-select-container">
        <div class="learning-filter-item source-items">
            <span class="filter-title"><br>Source</span><br><br>
            <input class="source-toggel" type="radio" name="rest-source" id="home-source" value="http://localhost:10209/wp-json/wp/v2/"   onchange="getSourceRESTTypes()" /><span class="this-source">This Learning Community</span><br>
            <input class="source-toggel" type="radio" name="rest-source" id="asoc-source" value="https://atlantisschoolofcommunication.net/wp-json/wp/v2/" onchange="getSourceRESTTypes()" > <span class="asoc-source">@lantis School of Communication</span><br>
            <input class="source-toggel" type="radio" name="rest-source" id="economics-source" value="https://economicslearningcommunity.org/wp-json/wp/v2/" onchange="getSourceRESTTypes()" /><span class="elc-source"> Economics LC</span><br>
            <input class="source-toggel" type="radio" name="rest-source" id="parenting-source" value="https:/dadad.com/wp-json/wp/v2/" onchange="getSourceRESTTypes()" > <span class="dadad-source">Parenting LC</span><br>
            <input type="radio" name="rest-source" id="telecom-law-source" value="https://telecommunicationslawlearningcommunity.com/wp-json/wp/v2/" onchange="getSourceRESTTypes()" /><span class="tllc-source"> Telecomm Law LC</span><br>
        </div><hr>
        <div class="learning-filter-item type-items">      
                <span class="filter-title"><br>Type</span><br> <br>       
                    
                    <input type="radio" name="type-choice" id="type-answers" value="answers"   onchange="getTypeContent(value)" >Answers - <span class="answersCount"></span> <i class="fa-solid fa-circle-info answers-info-icon"></i> <span class="answers-info-text">Answers to specific questions</span><br>
                    <input type="radio" name="type-choice" id="type-arguments" value="arguments"  onchange="getTypeContent(value)" >Arguments - <span class="argumentsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-beliefs" value="beliefs"   onchange="getBeliefsContent(value)" >Beliefs - <span class="beliefsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-classes" value="classes"  onchange="getClassesContent(value)" >Classes - <span class="classesCount"></span><br>
                    <input type="radio" name="type-choice" id="type-definitions" value="definitions"   onchange="getDefinitionsContent(value)" >Definitions - <span class="definitionsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-facts" value="facts"  onchange="getFactsContent(value)" >Facts - <span class="factsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-lessons" value="lessons"   onchange="getTypeContent(value)" >Lessons - <span class="lessonsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-posts" value="posts"  onchange="getTypeContent(value)" >Posts - <span class="postsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-Questions" value="questions"   onchange="displayQuestionsContent(value)" >Questions - <span class="questionsCount"></span><br>
                    <input type="radio" name="type-choice" id="type-quotes" value="quotes"  onchange="getTypeContent(value)" >Quotes - <span class="quotesCount"></span><br>   
                    <input type="radio" name="type-choice" id="type-all" value="all"  checked="checked" onchange="getTypeContent(value)" ><span class="allCount"></span> <br>       
        </div><hr>
        <div class="learning-filter-item topic-items">  
                <span class="filter-title"><br>Topic</span><br>   <br>      
                    <!-- <input type="checkbox" name="topic-choice" id="topic-all" value="all"   onchange="getSourceRESTTypes()" checked="checked">All <span class="allCount"></span><br>      -->
                    <input type="radio" name="topic-choice" id="topic-all" value="all"  checked="checked" onchange="getTopicsContent(value)" >All <br>
                    <input type="radio" name="topic-choice" id="topic-communication" value="communication"   onchange="getTopicsContent(value)" >Communication - <span class="communicationCount"></span><br>  
                    <input type="radio" name="topic-choice" id="topic-economics" value="economic"  onchange="getTopicsContent(value)" >Economics - <span class="economicsCount"></span><br>  
                    <input type="radio" name="topic-choice" id="topic-science" value="engineering-science"  onchange="getTopicsContent(value)" >Engineering/Science - <span class="scienceCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-legal" value="legal"  onchange="getTopicsContent(value)" >Legal - <span class="legalCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-political" value="political"   onchange="getTopicsContent(value)" >Political - <span class="politicalCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-religion" value="religion-spritual"  onchange="getTopicsContent(value)" >Religion/Spritual - <span class="religionCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-technology" value="technology"   onchange="getTopicsContent(value)" >Technology - <span class="technologyCount"></span><br>
        </div>   <!-- topic-items -->     

        <!-- <div class="learning-filter-item question-items">  
                <span class="filter-title"><br>Question</span><br>   <br>      
                    <input type="radio" name="topic-choice" id="topic-all" value="all"  checked="checked" onchange="getTopicsContent(value)" >All <br>
                    <input type="radio" name="topic-choice" id="topic-communication" value="communication"   onchange="getTopicsContent(value)" >Communication - <span class="communicationCount"></span><br>  
                    <input type="radio" name="topic-choice" id="topic-economics" value="economic"  onchange="getTopicsContent(value)" >Economics - <span class="economicsCount"></span><br>  
                    <input type="radio" name="topic-choice" id="topic-science" value="engineering-science"  onchange="getTopicsContent(value)" >Engineering/Science - <span class="scienceCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-legal" value="legal"  onchange="getTopicsContent(value)" >Legal - <span class="legalCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-political" value="political"   onchange="getTopicsContent(value)" >Political - <span class="politicalCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-religion" value="religion-spritual"  onchange="getTopicsContent(value)" >Religion/Spritual - <span class="religionCount"></span><br>
                    <input type="radio" name="topic-choice" id="topic-technology" value="technology"   onchange="getTopicsContent(value)" >Technology - <span class="technologyCount"></span><br>
        </div>    -->
        <!-- topic-items -->     
    </div>  <!-- filter-box -->
   

<button class="clear-content-button">Clear Content</button>

<div class="results-summary">
    
    <span class="result-type result-item">
                    Results Summary
                </span><!-- .result-content -->
            
            
                <span class="result-content result-item">
                    4444
                </span><!-- .result-content -->
           
</div>   <!-- .outer-wrap -->

<main class="content"></main><!-- .content -->

<section class="questions-content">
    <div class="communication-questions"><h2 class="question-titles">Communication Questions</h2></div>
    <div class="economics-questions"><h2 class="question-titles">Economics Questions</h2></div>
    <div class="science-questions"><h2 class="question-titles">Engineering/Science Questions</h2></div>
    <div class="legal-questions"><h2 class="question-titles">Legal Questions</h2></div>
    <div class="political-questions"><h2 class="question-titles">Political Questions</h2></div>
    <div class="religion-questions"><h2 class="question-titles">Religion/Spritual Questions</h2></div>
    <div class="technical-questions"><h2 class="question-titles">Technology Questions</h2></div>
   
</section>

<!-- <section class="classes-content">
    <div class="communication-classes"><h2 class="classes-titles">Communication Classes</h2></div>
    <div class="economics-classes"><h2 class="classes-titles">Economics Classes</h2></div>
    <div class="science-classes"><h2 class="classes-titles">Engineering/Science Classes</h2></div>
    <div class="legal-classes"><h2 class="classes-titles">Legal Classes</h2></div>
    <div class="political-classes"><h2 class="classes-titles">Political Classes</h2></div>
    <div class="religion-classes"><h2 class="classes-titles">Religion/Spritual Classes</h2></div>
    <div class="technical-classes"><h2 class="classes-titles">Technology Classes</h2></div>
   
</section> -->



  
   
        
        <div>
        <!-- <div class=".library-menu-item""></div>
        <div class="library-button"></div>
        <div class="profile-button"></div>
        <div class="library-button"></div> -->
        </div>


</div> <!-- .outer-wrap -->



<section class="menu-section"> 
                <!-- <h2 class="menu-heading">Single Level Menu</h2>
                <nav id="single-nav" class="single-nav menu" role="navigation">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Recipes</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                </nav><!-- #single-nav .single-nav -->
            </section><!-- menu-section -->


</body>
</html>
	
	<?php
	}
	

// add top-level administrative menu
function atlantis_add_toplevel_menu() {
	
	/* 
	
	add_menu_page(
		string   $page_title, 
		string   $menu_title, 
		string   $capability, 
		string   $menu_slug, 
		callable $function = '', 
		string   $icon_url = '', 
		int      $position = null 
	)
	
	*/
	
	add_menu_page(
		esc_html__('ALN Dashboard'),
		esc_html__('@ - Dashboard'),
		'manage_options',
		'atlantis',
		'atlantis_display_dashboard_page',
		'dashicons-dashboard',
		81
	);
	
}
add_action( 'admin_menu', 'atlantis_add_toplevel_menu' );


// add sub-level administrative menu
// function settings_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug, 
		callable $function = ''
	);
	
	*/
	
// 	add_submenu_page(
// 		'atlantis',
// 		esc_html__('@lantis Network Settings'),
// 		esc_html__('@ Settings'),
// 		'manage_options',
// 		'atlantis-settings',
// 		'atlantis_display_settings_page'
// 	);
	
// }
// add_action( 'admin_menu', 'settings_add_sublevel_menu' );





